<?php
namespace Deployer;

require 'recipe/laravel.php';

// Project name
set('application', 'Larvel');

// Project repository
set('repository', 'https://github.com/sulaimaan46/Laravel_CICD.git');

// [Optional] Allocate tty for git clone. Default value is false.
set('git_tty', true);

// Shared files/dirs between deploys
add('shared_files', []);
add('shared_dirs', []);

// Writable dirs by web server
add('writable_dirs', []);


// Hosts
    host('3.82.203.16') // Hostname or IP address
    ->stage('production') // Deployment stage (production, staging, etc)
    ->user('ubuntu') // SSH user
    ->set('deploy_path', '/var/www/html'); // Deploy path

after('deploy:failed', 'deploy:unlock'); // Unlock after failed deploy

desc('Deploy the application');
task('deploy', [
    'deploy:info',
    'deploy:prepare',
    'deploy:lock',
    'deploy:release',
    'deploy:secrets', // Deploy secrets
    'deploy:shared',
    'deploy:vendors',
    'deploy:writable',
    'artisan:storage:link', // |
    'artisan:view:cache',   // |
    'artisan:config:cache', // | Laravel specific steps
    'artisan:optimize',     // |
    'artisan:migrate',      // |
    'deploy:symlink',
    'deploy:unlock',
    'cleanup',
]);

// Set up a deployer task to copy secrets to the server.
// Grabs the dotenv file from the github secret
task('deploy:secrets', function () {
    file_put_contents(__DIR__ . '/.env', getenv('DOT_ENV'));
    upload('.env', get('deploy_path') . '/shared');
});

// Migrate database before symlink new release.

before('deploy:symlink', 'artisan:migrate');

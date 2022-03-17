<?php

namespace App\Console\Commands;

use App\Models\User;
use Illuminate\Console\Command;
use Illuminate\Support\Str;

class CrudFunction extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'make:sulai';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sulai command Success';


    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $name = Str::random(8);
        $password = Str::random(10);
        User::create([
            'name' => $name,
            'email' =>$name.'@gmail.com',
            'password' =>bcrypt($password),
        ]);
        $this->info('Success');
    }
}

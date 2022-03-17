<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use HP\Crud\CrudController;


class sampleController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       $a = (new CrudController)->index();
    }
}

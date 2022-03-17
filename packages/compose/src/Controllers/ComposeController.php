<?php

namespace Hp\Compose\Controllers;
use App\Http\Controllers\Controller;

use Illuminate\Http\Request;

class ComposeController extends Controller
{
   /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('crud::add');
    }

}

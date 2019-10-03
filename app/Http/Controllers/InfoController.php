<?php

namespace App\Http\Controllers;
use App\info;
use Illuminate\Http\Request;

class InfoController extends Controller
{
    public function index(){
    $info=info::all();
     return view ('number');
     


    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index()
    {
        $train= Train::where("orario_di_partenza",">=","2022-02-18 00:00:00")->get();
        dd($train);
        return view("home",$train);
    }
}

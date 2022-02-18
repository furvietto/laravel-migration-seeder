<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;

class PageController extends Controller
{
    public function index()
    {
        $train= Train::where("data_partenza",">=","2022-02-18")->get();
        $data = ["train" => $train];
        return view("home",$data);
    }
}

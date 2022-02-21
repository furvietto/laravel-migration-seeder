<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Train;
use Carbon\Carbon;

class PageController extends Controller
{
    public function index()
    {
        // $train =  new Train();
        // $train->fill([
        // 'azienda'=>"italo",
        // 'stazione_di_partenza' => "palermo",
        // 'stazione_di_arrivo' => "rieti",
        // 'orario_di_partenza' => "22:00:00",
        // 'orario_di_arrivo' => "10:00:00",
        // 'codice_treno' => "ab12314",
        // 'numero_carrozze' => "32",
        // 'in_orario' => false,
        // 'cancellato' => false,
        // ]);
        // $train->save();

        // $train2 =  new Train();
        // $train2->fill([
        // 'azienda'=>"frecciarossa",
        // 'stazione_di_partenza' => "sicilia",
        // 'stazione_di_arrivo' => "francia",
        // 'orario_di_partenza' => "00:00:00",
        // 'orario_di_arrivo' => "23:00:00",
        // 'codice_treno' => "ab5714",
        // 'numero_carrozze' => "34",
        // 'in_orario' => true,
        // 'cancellato' => false,
        // ]);
        // $result2=$train2->save();

        return view("home");
    }
    public function trains()
    {
        
        // $train= Train::where("data_di_partenza","=",Carbon::today())->get();
        // $data = ["train" => $train];
        $train= Train::paginate(15);
        $data = ["train" => $train];
        return view("train",$data);
    }

    public function show(Train $train)
    {
        return view("show", compact("train"));
    }
}

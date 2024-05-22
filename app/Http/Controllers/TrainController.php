<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Train;

class TrainController extends Controller
{
    public function index()
    {
        $oggi = date('Y-m-d');
        $trainsToday = Train::whereDate('orario_di_partenza', $oggi)->get();
        $trains = Train::all();
        $data = [
            "trainsToday" => $trainsToday,
            "trains" => $trains,
        ];
        return view('trains.index', $data);
    }

    public function show($id)
    {
    }
}

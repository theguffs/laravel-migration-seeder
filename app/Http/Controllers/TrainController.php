<?php

namespace App\Http\Controllers;

use App\Models\Train;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index()
    {
        $treni = Train::where("orario_partenza")->get();
        return view("welcome", ["treni" => $treni]);
    }
}

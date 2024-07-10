<?php

namespace App\Http\Controllers\Guest;

use App\Models\Train;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class TrainController extends Controller
{
    public function index(){

        $trains = Train::all();

        return view('trains.welcome', compact('trains'));
    }
}

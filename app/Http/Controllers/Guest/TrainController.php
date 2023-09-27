<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;

class TrainController extends Controller {
  
  public function home(){

    $trains = Train::all();

    return view('home', compact('trains'));
}
}

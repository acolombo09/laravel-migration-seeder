<?php

namespace App\Http\Controllers\Guest;

use App\Http\Controllers\Controller;
use App\Models\Train;

class TrainController extends Controller {
  
  public function home(){

    //array di tutti gli elementi della tabella "Train"
    $data = [
      "trains" => Train::all()		
  ];
  return view("home", $data);
}
}

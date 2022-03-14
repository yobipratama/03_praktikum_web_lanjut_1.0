<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\rooms;


class RoomsController extends Controller
{
    //
    public function rooms(){
         $data = Rooms::all();
         return view ('rooms', ['rooms'=>$data]);
}
}

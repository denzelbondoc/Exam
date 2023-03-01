<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Room;
class RoomController extends Controller
{
    //
    function index(){
        $data = Room::all();
        return view('room.index',['rooms'=>$data]);
    }
}

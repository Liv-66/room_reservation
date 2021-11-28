<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getAllRooms(Request $request) {
        // section_start();
        // echo("<script>console.log('PHP: " . $_SESSION . "');</script>");
        // section_end();
        $rooms = Room::all();
        return view('index', ['rooms' => $rooms]);
    }
}

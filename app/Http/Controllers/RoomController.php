<?php

namespace App\Http\Controllers;

use App\Models\Room;
use Illuminate\Http\Request;

class RoomController extends Controller
{
    public function getAllRooms(Request $request) {
        $rooms = Room::all();
        return view('index', ['rooms' => $rooms]);
    }

    public function editRoom(Request $request, $id) {
        $room = Room::find($id);
        return view('edit')
                -> with('id', $room->id)
                -> with('name', $room->name)
                -> with('description', $room->description)
                -> with('price', $room->price)
                -> with('photo', $room->photo)
                -> with('quantity', $room->quantity);
    }
}

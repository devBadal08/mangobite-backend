<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Rooms;
use Illuminate\Support\Facades\Storage;

class RoomController extends Controller
{
    public function index()
    {
        $rooms = Rooms::latest()->get();

        $rooms->transform(function ($room) {

            // Main Image
            if ($room->image) {
                $room->image = Storage::url($room->image);
            }

            // Sub Images
            $room->sub_images = collect($room->sub_images)->map(function ($image) {
                return Storage::url($image);
            });

            return $room;
        });

        return response()->json([
            'status' => true,
            'data' => $rooms,
        ]);
    }

    /**
     * Display a single room.
     */
    public function show($slug)
    {
        $room = Room::where('slug', $slug)->first();

        if (!$room) {
            return response()->json([
                'status' => false,
                'message' => 'Room not found.',
            ], 404);
        }

        if ($room->image) {
            $room->image = Storage::url($room->image);
        }

        $room->sub_images = collect($room->sub_images)->map(function ($image) {
            return Storage::url($image);
        });

        return response()->json([
            'status' => true,
            'data' => $room,
        ]);
    }
}

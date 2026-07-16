<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Gallery;

class GalleryController extends Controller
{
    public function index()
    {
        $galleries = Gallery::latest()->get();

        return response()->json([
            'status' => true,
            'data' => $galleries,
        ]);
    }

    public function show($slug)
    {
        $gallery = Gallery::where('slug', $slug)->first();

        if (!$gallery) {
            return response()->json([
                'status' => false,
                'message' => 'Gallery not found.',
            ], 404);
        }

        return response()->json([
            'status' => true,
            'data' => $gallery,
        ]);
    }
}

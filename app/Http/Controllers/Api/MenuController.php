<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\category;
use App\Models\Menu_item;
use Illuminate\Support\Facades\Storage;

class MenuController extends Controller
{
    public function index()
    {
        $categories = category::with('menus')
            ->get();

        $categories->transform(function ($category) {

            if ($category->image) {
                $category->image = Storage::url($category->image);
            }

            return $category;
        });

        return response()->json([
            'status' => true,
            'data' => $categories,
        ]);
    }
}

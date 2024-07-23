<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index()
    {
        $perPage = 8;

        // Paginate items with relationships, ordered by the latest
        $items = Item::with(['type', 'brand'])->latest()->paginate($perPage);

        return view('landing', [
            'items' => $items
        ]);
    }
}

<?php

namespace App\Http\Controllers\Front;

use App\Models\Item;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;

class LandingController extends Controller
{
    public function index(Request $request)
    {
        $perPage = 8;
        $query = $request->input('query');

        // Paginate items with relationships, ordered by the latest
        $items = Item::with(['type', 'brand'])
            ->when($query, function ($q) use ($query) {
                return $q->where('name', 'like', '%' . $query . '%');
            })
            ->latest()
            ->paginate($perPage);

        return view('landing', [
            'items' => $items,
            'query' => $query
        ]);
    }
}


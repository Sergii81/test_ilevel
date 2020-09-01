<?php

namespace App\Http\Controllers;

use App\Category;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function item_from_category(Request $request)
    {
        $categories = Category::where('name', $request->category_name)->first();

        $items = $categories->items()->select('name')->get();

        return $items->toJson();
    }
}

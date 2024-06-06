<?php

namespace App\Http\Controllers;

use App\Models\UrgencyCategory;
use App\Models\UrgencyNumber;
use Illuminate\Http\Request;

class UrgencyNumberController extends Controller
{
    public function index(Request $request)
    {
        $query = null;
        // get all categories and numbers
        $categories = UrgencyCategory::all();
        $numbers = UrgencyNumber::all();
        // if query is present and it's not null
        if ($request->has('query') && $request->input('query') !== 'null') {
            // get numbers by her category id
            $query = $request->input('query');
            $numbers = UrgencyNumber::where('category_id', '=', $query)->get();
        }
        // render view with categories
        return view('urgencyNumber/index', ['categories' => $categories, 'numbers' => $numbers, 'query' => $query]);
    }
}

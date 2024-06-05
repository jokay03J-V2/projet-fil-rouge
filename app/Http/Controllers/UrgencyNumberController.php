<?php

namespace App\Http\Controllers;

use App\Models\UrgencyCategory;
use Illuminate\Http\Request;

class UrgencyNumberController extends Controller
{
    public function index()
    {
        // get all categories
        $categories = UrgencyCategory::all();
        // render view with categories
        return view('urgencyNumber/index', ['categories' => $categories]);
    }
}

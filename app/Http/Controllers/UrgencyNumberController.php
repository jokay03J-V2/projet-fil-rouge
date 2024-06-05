<?php

namespace App\Http\Controllers;

use App\Models\UrgencyCategory;
use Illuminate\Http\Request;

class UrgencyNumberController extends Controller
{
    public function index()
    {
        $categories = UrgencyCategory::all();
        return view('urgencyNumber/index', ['categories' => $categories]);
    }
}

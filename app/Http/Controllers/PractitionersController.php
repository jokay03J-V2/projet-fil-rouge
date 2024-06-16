<?php

namespace App\Http\Controllers;

use Illuminate\View\View;

class PractitionersController extends Controller
{
    public function showPractitioner(): View
    {
        return view('find_practitioners');
    }
}

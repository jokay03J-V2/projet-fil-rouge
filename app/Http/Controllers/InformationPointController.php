<?php

namespace App\Http\Controllers;

use App\Models\InformationPoint;
use App\Models\InformationService;
use Illuminate\Http\Request;
use Illuminate\View\View;

class InformationPointController extends Controller
{
    public function index(Request $request): View
    {
        $query = null;
        $services = InformationService::all();
        $points = InformationPoint::all();

        if ($request->has('query') && $request->query('query') !== 'null' ) {
            $query = $request->input('search');
            $points = InformationPoint::where('postcode', 'like',  $query . '%')->get();
        }

        return view('information-point', compact('points', 'services' ));
    }
}

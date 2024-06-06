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
        $selectquery =null;
        $services = InformationService::all();
        $points = InformationPoint::all();

        if ($request->has('query') && $request->query('query') !== 'null'
            && $request->has('selectquery') && $request->query('selectquery') !== 'null') {
            $query = $request->input('query');
            $points = InformationPoint::where('postcode', 'like',  $query . '%')->get();

        } else if ($request->has('selectquery') && $request->query('selectquery') !== 'null' ) {
            $points = InformationPoint::where('postcode', 'like',  $query . '%')->get();

        } else if($request->has('query') && $request->query('query') !== 'null') {

        }



        return view('information-point', compact('points', 'services' ));
    }
}

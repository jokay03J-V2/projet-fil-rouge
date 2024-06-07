<?php

namespace App\Http\Controllers;

use App\Models\InformationPoint;
use App\Models\InformationService;
use App\Models\ServicePointInformation;
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
            $resultPoints = InformationPoint::where('postcode', 'like',  $query . '%')->get();
            $result = $resultPoints->filter(function ($point) use ($request) {
                return count(ServicePointInformation::where([['information_id', '=', $point->id], ['service_id', '=',(int) $request->input('selectquery')]])->get()) > 0;
            });
            $points = $result;

        }

        else if ($request->has('selectquery') && $request->query('selectquery') !== 'null' ) {
            $result = $points->filter(function ($point) use ($request) {
                return count(ServicePointInformation::where([['information_id', '=', $point->id], ['service_id', '=',(int) $request->input('selectquery')]])->get()) > 0;
            });

            $points = $result;
        } else if($request->has('query') && $request->query('query') !== 'null') {
            $query = $request->input('query');
            $points = InformationPoint::where('postcode', 'like',  $query . '%')->get();
        }



        return view('information-point', compact('points', 'services' ));
    }
}

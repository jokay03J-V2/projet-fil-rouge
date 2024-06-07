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

//        search with the input and select add by user
        if ($request->has('query') && $request->query('query') !== 'null'
            && $request->has('selectquery') && $request->query('selectquery') !== 'null') {
            $query = $request->input('query');
//            search in bdd where postcode start with user input
            $resultPoints = InformationPoint::where('postcode', 'like',  $query . '%')->get();
//            search filter the precedent where data with the id of the service in select
            $result = $resultPoints->filter(function ($point) use ($request) {
                return count(ServicePointInformation::where([['information_id', '=', $point->id], ['service_id', '=',(int) $request->input('selectquery')]])->get()) > 0;
            });
            $points = $result;

        }
//      search with select add by user
        else if ($request->has('selectquery') && $request->query('selectquery') !== 'null' ) {
//            get only the information point with same service
            $result = $points->filter(function ($point) use ($request) {
                return count(ServicePointInformation::where([['information_id', '=', $point->id], ['service_id', '=',(int) $request->input('selectquery')]])->get()) > 0;
            });

            $points = $result;

        }
//        search with input add by user
        else if($request->has('query') && $request->query('query') !== 'null') {
//         search in bdd where postcode start with user input
            $query = $request->input('query');
            $points = InformationPoint::where('postcode', 'like',  $query . '%')->get();

        } else if($request->has('query') && $request->query('query') !== 'null') {
            $query = $request->input('query');
            $points = InformationPoint::where('postcode', 'like',  $query . '%')->get();
        }



        return view('information-point', compact('points', 'services' ));
    }
}

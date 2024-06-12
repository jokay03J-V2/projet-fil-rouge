<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Practitioners;

class PractitionersController extends Controller
{
    public function showPractitioner(Request $request): View
    {

        $communes = Practitioners::query()->groupBy('commune')->get('commune');
        $Practitioners = Practitioners::paginate(100);
        if ($request->has('commune')) {
            $Practitioners = Practitioners::where('commune', 'LIKE', $request->input('commune'))->paginate(100);
        }
        return view('find_practitioners', ['Practitioners' => $Practitioners, 'communes' => $communes, 'query' => $request->input('commune')]);
    }
}

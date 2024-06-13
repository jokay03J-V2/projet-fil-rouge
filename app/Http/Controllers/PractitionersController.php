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
    public function requestJson()
    {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, 'https://data.opendatasoft.com/api/explore/v2.1/catalog/datasets/medecins@public/exports/json?lang=fr&refine=libelle_profession%3A%22Psychiatre%22&timezone=Europe%2FParis');
        $data = curl_exec($ch);
        curl_close($ch);
        $responce = json_decode($data);
        dd($responce);
    }
}

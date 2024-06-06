<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use App\Models\CategoryAdvice;
use Database\Factories\AdviceFactory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdviceController extends Controller
{
    public function index(Request $request): View
    {
        $query = $request->input('query');
        $categoryId = $request->input('categoryAdvice');
        // retrieves the data sent by the input request and categoryAdvice
        $queryBuilder = Advice::query();

        if ($query) {
            $queryBuilder->where('name', 'LIKE', "%{$query}%");
        }

        if ($categoryId && $categoryId !== 'all') {
            $queryBuilder->where('category_id', $categoryId);
        }
        // check if the data received by the query input is equal to the data in the name column of our database, check if the value of the categoryAdvice input is equal to all 
        $advices = $queryBuilder->get();
        $categories = CategoryAdvice::all();
        // return variables on the view advices 
        return view('advices', [
            'advices' => $advices,
            'categories' => $categories,
            'query' => $query,
        ]);
    }

}

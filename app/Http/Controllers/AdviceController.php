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

        $queryBuilder = Advice::query();

        if ($query) {
            $queryBuilder->where('name', 'LIKE', "%{$query}%");
        }

        if ($categoryId && $categoryId !== 'all') {
            $queryBuilder->where('category_id', $categoryId);
        }

        $advices = $queryBuilder->get();
        $categorys = CategoryAdvice::all();

        return view('/advices', [
            'advices' => $advices,
            'categorys' => $categorys,
            'query' => $query,
        ]);
    }
    // public function search(Request $request): View
    // {
    //     $validated = $request->validate([
    //         'query' => 'required|string|max:255',
    //         'categoryAdvice' => 'required|string|max:255',
    //     ]);

    //     $query = $validated['query'];
    //     $categoryAdvice = $validated['categoryAdvice'];

    //     $results = Advice::where('name', 'LIKE', "%{$query}%")->get();
    //     $resultsCat = CategoryAdvice::where('name', 'LIKE', "%{$categoryAdvice}%")->get();

    //     $advices = Advice::all();
    //     $categorys = CategoryAdvice::all();

    //     return view('advices', ['advices' => $advices, 'categorys' => $categorys, 'results' => $results, 'query' => $query]);
    // }
}

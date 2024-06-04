<?php

namespace App\Http\Controllers;

use App\Models\Advice;
use App\Models\CategoryAdvice;
use Database\Factories\AdviceFactory;
use Illuminate\Http\Request;
use Illuminate\View\View;

class AdviceController extends Controller
{
    public function index(): View
    {
        $advices = Advice::all();
        $categorys = CategoryAdvice::all();
        return view('/advices',["advices" =>  $advices, "categorys" => $categorys]);
    }
}

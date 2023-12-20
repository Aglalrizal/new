<?php

namespace App\Http\Controllers;

use App\Models\product;
use App\Models\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function show(category $category){
        return view('category', [
            'title' => $category->name,
            'products' => product::where('category_id', $category->id)->paginate(12)
        ]);
    }
}

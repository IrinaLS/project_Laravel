<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
    
        $categories = Category::query()->select(Category::$availableFields)->paginate(6);
        
        return view('news.category', [
			'categoriesList' => $categories
		]);
       		
    }
}

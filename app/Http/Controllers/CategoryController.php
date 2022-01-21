<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function category()
    {
    
        $model = new Category();
		$categories = $model->getCategories();
        
        return view('news.category', [
			'categoriesList' => $categories
		]);
       		
    }
}

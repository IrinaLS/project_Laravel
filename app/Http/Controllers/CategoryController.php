<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    
    public function category()
    {
        return view ('news.category',[
            'category' => self::$categories
        ]);
       		
    }
}

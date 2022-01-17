<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CategoryController extends Controller
{
    static public $categories = ['Политика', 'Спорт', 'Культура','Наука', 'Экономика'];
    public function category()
    {
        return view ('news.category',[
            'category' => self::$categories
        ]);
       		
    }
}

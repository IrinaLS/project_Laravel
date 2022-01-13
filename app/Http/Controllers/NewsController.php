<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NewsController extends Controller
{
    
    public function index()
    {
        if (empty(self::$news)){
            self::setNews();
        } 
           return view ('news.index',[
            'news' => self::$news
        ]);
       		
    }
    
    public function show($title, $description, $author)
	{
		return view('news.show', [
			'newsItem' => 
            ['title' => $title, 'description' => $description, 'author' => $author]                      
            
		]);
	}
    
    public function oneCategoryNews($category)
    {
        dd($category,self::$news);
            return view ('news.oneCategoryNews',[
            'news' => self::$news,
            'category' => $category
        ]);
       		
    }
}

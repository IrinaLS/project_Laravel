<?php

namespace App\Http\Controllers;

use Faker\Factory;
use App\Models\News;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  
    
    public function index()
    {
        $model = new News();
		$news = $model->getNews();
        
        return view('news.index', [
			'news' => $news
		]);
    }
    
    public function show(int $id)
	{
        $model = new News();
		$news = $model->getNewsById($id);

		return view('news.show', [
			'newsItem' => $news
		]);	
	
	}
    
    public function oneCategoryNews($id)
    {
     
        $news = \DB::table('news')
		     ->where('category_id', '=', $id)
			 ->get()
             ->toArray();
             
            return view ('news.oneCategoryNews',[
            'news' => $news            
        ]);
       		
    }
}
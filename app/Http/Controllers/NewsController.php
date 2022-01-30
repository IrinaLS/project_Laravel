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
        $news = News::query()->select(News::$availableFields)->paginate(6);
               
                
        return view('news.index', [
			'news' => $news
		]);
        
    }
    /*public function show(News $news)
	{
        
        return view('news.show', [
			'news' => $news
		]);	
	
	}*/
    
    public function show(int $id)
	{
        $news= News::findOrFail($id);
        return view('news.show', [
			'news' => $news
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
<?php

namespace App\Http\Controllers;

use Faker\Factory;
use App\Http\Controllers\CategoryController;
use Illuminate\Http\Request;

class NewsController extends Controller
{
  static public $news = [];
              
    static public function setNews()
    {
        $faker = Factory::create();        
        $newsQuantity = 5;    
      
        for($i=0; $i < $newsQuantity; $i++){
            for($j=0; $j < $newsQuantity; $j++){
                self::$news [] = [
                'id' =>  ($i*$newsQuantity+$j),
                'category' => CategoryController::$categories[$i],
                'title' => $faker-> jobTitle(),
                'description' => $faker-> text(250),
                'author' => $faker-> userName()
            ];
            }
        }
        return self::$news;
    }
    
 	static public function  getNewsById(int $id): array
	{
        return (self::$news['id']);
     /*	$faker = Factory::create();

		return [
			'id'    => $id,
			'title' => $faker->jobTitle(),
			'description' => $faker->text(250),
			'author' => $faker->userName()
		];     
       */      
    }
    
    public function index()
    {
        if (empty(self::$news)){
            self::setNews();            
        } 
           return view ('news.index',[
            'news' => self::$news
        ]);
       		
    }
    
    public function show(int $id, $title, $description, $author)
	{
    
		return view('news.show', [
			'newsItem' => 
            ['id' => $id,'title' => $title, 'description' => $description, 'author' => $author]                      
            
		]);
	}
    
    public function oneCategoryNews($category)
    {
        dd($category,self::$news[0]);
            return view ('news.oneCategoryNews',[
            'news' => self::$news,
            'category' => $category
        ]);
       		
    }
}

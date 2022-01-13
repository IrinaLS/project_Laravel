<?php declare (strict_types=1);

namespace App\Http\Controllers;

use Faker\Factory;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Routing\Controller as BaseController;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    static public $news = [];
    static public $categories = ['Политика', 'Спорт', 'Культура','Наука', 'Экономика'];
            
    static public function setNews()
    {
        $faker = Factory::create();        
        $newsQuantity = 5;    
      
        for($i=0; $i < $newsQuantity; $i++){
            for($j=0; $j < $newsQuantity; $j++){
            self::$news [] = [
                'id' => ($i*$newsQuantity+$j),
                'category' => self::$categories[$i],
                'title' => $faker-> jobTitle(),
                'description' => $faker-> text(250),
                'author' => $faker-> userName()
            ];
            }
        }
        return self::$news;
    }
    
 	static function getNewsById(int $id): array
	{
     /*	$faker = Factory::create();

		return [
			'id'    => $id,
			'title' => $faker->jobTitle(),
			'description' => $faker->text(250),
			'author' => $faker->userName()
		];     
       */
 	}
}
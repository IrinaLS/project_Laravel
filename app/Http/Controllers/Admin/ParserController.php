<?php

declare(strict_types=1);

namespace App\Http\Controllers\Admin;

use App\Contracts\Parser;
use App\Services\ParserService;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\News;

use Orchestra\Parser\Xml\Facade as XmlParser;


class ParserController extends Controller
{
    public function __invoke(Request $request,Parser $service)
	{
      $news =$service->load('https://news.yandex.ru/music.rss')->start();       
         
       foreach ($news['news'] as $item) {
        $created = News::create(       
            ['category_id' => 1] +
            ['title' => $item['title']] +
            ['description' => $item['description']] +
            ['slug' => 'parse'] 
         );
        }
              
        if($created) {
               return redirect()->route('admin.news.index')
                        ->with('success', 'Новости добавлены');
           }
           return back()->with('error', 'Не удалось добавить новости')
               ->withInput();    
	}

}

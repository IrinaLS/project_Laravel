<?php

declare(strict_types=1);

namespace App\Services;

use Orchestra\Parser\Xml\Facade as XmlParser;
use App\Contracts\Parser;
use Laravie\Parser\Document as BaseDocument;

class ParserService implements Parser
{
	
	protected BaseDocument $load;
	
	public function load(string $link)
	{
		
	    $this->load = XmlParser::load($link);
		return $this;
	}

	public function start()
	{
		return       
        $this->load->parse([
			'title' => [
				'uses' => 'channel.title'
			],
			'link' => [
				'uses' => 'channel.link'
			],
			'description' => [
				'uses' => 'channel.description'
			],
			'image' => [
				'uses' => 'channel.image.url'
			],
			'news' => [
				'uses' => 'channel.item[title,link,guid,description,pubDate]'
			]
		]);
	}
 
}
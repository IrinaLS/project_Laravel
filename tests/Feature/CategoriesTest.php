<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoriesTest extends TestCase
{
    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function testCategotiesAvailable()
    {
        $response = $this->get('/news/category');

        $response->assertStatus(200);
    }

	public function testCategotiesShow()
	{
		$response = $this->get(route('news.category'));

		$response->assertStatus(200);
	}

	public function testCategotiesAdminAvailable()
	{
		$response = $this->get(route('admin.categories.index'));

		$response->assertStatus(200);
	}

	public function testCategotiesCreateAdminAvailable()
	{
		$response = $this->get(route('admin.categories.create'));

		$response->assertStatus(200);
	}

	public function testCategotiesAdminCreated()
	{
		$responseData = [
			'title' => 'Some title',			
			'description' => 'Some text'
		];
		$response = $this->post(route('admin.categories.store'), $responseData);

		$response->assertJson($responseData);
		$response->assertStatus(200);
	}
}

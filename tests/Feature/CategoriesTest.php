<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;
use App\Models\Category;

class CategoriesTest extends TestCase
{
	use RefreshDatabase;
    /**
     * A basic feature test example.
     *
     * @return void
     */
    
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
		$responseData = Category::factory()->definition();
		$response = $this->post(route('admin.categories.store'), $responseData);
		$response->assertStatus(302);
	}
}

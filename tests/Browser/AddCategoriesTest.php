<?php

namespace Tests\Browser;

use Illuminate\Foundation\Testing\DatabaseMigrations;
use Laravel\Dusk\Browser;
use Tests\DuskTestCase;

class AddCategoriesTest extends DuskTestCase
{

    /**
     * A Dusk test example.
     *
     * @return void
     */
    public function testExample()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/create')
                    ->assertSee('Добавить категорию');
        });
    }
    public function test1Example()
    {
        $this->browse(function (Browser $browser) {
            $browser->visit('/admin/categories/create')
                    ->type ('title', 'тест категория')
                    ->type ('description', 'тест  description')
                    ->press ('Сохранить')
                    ->assertPathIs('/admin/categories')
                    ->assertSee('Список категорий');
        });
    }

} 


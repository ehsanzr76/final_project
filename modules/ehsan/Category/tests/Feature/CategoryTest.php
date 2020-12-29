<?php

namespace ehsan\Category\tests\Feature;

use ehsan\Category\models\Category;
use ehsan\User\models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Tests\TestCase;

class CategoryTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     *
     */

    public function test_autenticated_user_can_see_categories_panel()
    {
        $this->ActionAsAdmin();
        $this->get(route('categories'))->assertOk();
    }


    public function test_user_can_create_categories()
    {

        $this->ActionAsAdmin();
        $this->CreateCategory();
        $this->assertEquals(1, Category::all()->count());
    }


    public function test_user_can_update_categories()
    {
        $CategoryTitle = 'fdouhviugg';
        $this->ActionAsAdmin();
        $this->CreateCategory();
        $this->assertEquals(1, Category::all()->count());
        $this->put(route('categories.update', 1), ['title' => $CategoryTitle, 'slug' => $this->faker->word]);
        $this->assertEquals(1, Category::wheretitle($CategoryTitle)->count());
    }



    public function test_user_can_delete_categories()
    {

        $this->ActionAsAdmin();
        $this->CreateCategory();
        $this->assertEquals(1, Category::all()->count());
        $this->delete(route('categories.delete', 1), ['title' => 'idfhbgifh', 'slug' => 'fnbfdhb']);
    }





    private function ActionAsAdmin()
    {
        $this->actingAs(factory(User::class)->create());
    }




    private function CreateCategory()
    {
        $this->post(route('categories.store'), ['title' => 'ihfdbih', 'slug' => 'oushgi']);
    }
}

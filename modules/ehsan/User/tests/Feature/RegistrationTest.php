<?php

namespace ehsan\User\tests\Feature;

use ehsan\User\models\User;
use ehsan\User\services\VerifyCodeServices;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Support\Facades\Auth;
use Tests\TestCase;

class RegistrationTest extends TestCase
{
    use RefreshDatabase;

    /**
     * A basic feature test example.
     *
     * @return void
     */
    public function test_user_can_see_register_form()
    {
        $response = $this->get(route('register'));
        $response->assertStatus(200);
    }




    public function test_user_can_register()
    {

        $response = $this->register_user();

        $response->assertRedirect(route('home'));
        $this->assertCount(1, User::all());
    }



    public function test_user_have_to_verify_account()
    {
        $this->register_user();
        $response = $this->get(route('home'));
        $response->assertRedirect(route('verification.notice'));
    }



    public function test_user_can_to_verify_account()
    {
        $user = User::create([

            'name' => 'ehsan',
            'email' => 'ehsanzr538@gmail.com',
            'mobile' => '9173145316',
            'password' => bcrypt('ehsanZR/*76'),
        ]);

        $code = VerifyCodeServices::GenerateCode();
        VerifyCodeServices::store($user->id, $code);
        Auth::loginUsingId($user->id);

        $this->assertAuthenticated();

        $this->post(route('verification.verify', [

            'verify_code' => $code

        ]));

        $this->assertEquals(true, $user->fresh()->hasVerifiedEmail());
    }






    public function test_user_verified_can_see_homepage()
    {
        $this->register_user();

        $this->assertAuthenticated();
        auth()->user()->markEmailAsVerified();
        $response = $this->get(route('home'));
        $response->assertOk();
    }




    public function register_user()
    {
        return $response = $this->post(route('register'), [

            'name' => 'ehsan',
            'email' => 'ehsanzr538@gmail.com',
            'mobile' => '9173145316',
            'password' => 'ehsanZR/*76',
            'password_confirmation' => 'ehsanZR/*76'

        ]);
    }
}

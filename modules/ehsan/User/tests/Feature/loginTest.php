<?php

namespace ehsan\User\tests\Feature;

use ehsan\User\models\User;
use Illuminate\Foundation\Testing\RefreshDatabase;
use Illuminate\Foundation\Testing\WithFaker;
use Biscolab\ReCaptcha\Facades\ReCaptcha;
use Tests\TestCase;

class loginTest extends TestCase
{
    use RefreshDatabase;
    use WithFaker;
    /**
     * A basic feature test example.
     *
     * @return void
     */

    public function test_user_can_see_login_form()
    {
        $response = $this->get(route('login'));
        $response->assertStatus(200);
    }



    public function test_user_can_login_byEmail_And_Mobile()
    {
        $this->recaptcha();
        $user = User::create([

            'name' => $this->faker->name,
            'email' => $this->faker->safeEmail,
            'mobile' => '9173145316',
            'password' => bcrypt('ehsanZR/*76'),
        ]);

        $this->post(route('login'), [

            'email' => $user->email,
            'mobile' => '9173145316',
            'password' => 'ehsanZR/*76',

        ]);

        $this->assertAuthenticated();
    }



    public function recaptcha()
    {
        return ReCaptcha::shouldReceive('validate')
            ->once()
            ->andReturnTrue();
    }
}

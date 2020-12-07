<?php

namespace ehsan\User\tests\Unit;

use ehsan\User\Rules\ValidPassword;
use PHPUnit\Framework\TestCase;

class ValidPasswordTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */

    public function test_password_user_should_not_less_than_6_character()
    {
        $result = (new ValidPassword())->passes('' , 'ehA/7');
        $this->assertEquals( 0 , $result);

    }


    public function test_password_user_should_include_sign_characters()
    {
        $result = (new ValidPassword())->passes('' , 'ehA7ehsan8');
        $this->assertEquals( 0 , $result);

    }

    public function test_password_user_should_include_digit_characters()
    {
        $result = (new ValidPassword())->passes('' , 'ehA/zareiZ');
        $this->assertEquals( 0 , $result);

    }

    public function test_password_user_should_include_capital_characters()
    {
        $result = (new ValidPassword())->passes('' , 'ehsanz/*76');
        $this->assertEquals( 0 , $result);

    }

    public function test_password_user_should_include_small_characters()
    {
        $result = (new ValidPassword())->passes('' , 'EHSANZ/*76');
        $this->assertEquals( 0 , $result);

    }
}

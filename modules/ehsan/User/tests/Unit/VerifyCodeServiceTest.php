<?php

namespace ehsan\user\tests\Unit;

use ehsan\User\services\VerifyCodeServices;
use Tests\TestCase;

class VerifyCodeServiceTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_verify_code_is_6_digit()
    {
        $code = VerifyCodeServices::GenerateCode();
        $this->assertIsNumeric($code , 'this code is not numeric');
        $this->assertLessThanOrEqual(999999 , $code , 'generated code less than 999999');
        $this->assertGreaterThanOrEqual(100000 , $code , 'generated code greater than 999999');

    }


    

    public function test_code_can_store()
    {
        $code = VerifyCodeServices::GenerateCode();
        VerifyCodeServices::store(1 , $code);
        $this->assertEquals($code , cache()->get('verify_code_1'));

    }
}

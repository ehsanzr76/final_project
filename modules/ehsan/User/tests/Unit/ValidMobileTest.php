<?php

namespace ehsan\User\tests\Unit;

use ehsan\User\Rules\ValidMobile;
use PHPUnit\Framework\TestCase;


class ValidMobileTest extends TestCase
{
    /**
     * A basic unit test example.
     *
     * @return void
     */
    public function test_mobile_user_can_not_be_less_than_10_character()
    {
        $result = (new ValidMobile())->passes('' ,'917314531');
        $this->assertEquals(0 , $result);
    }


    public function test_mobile_user_can_not_be_more_than_10_character()
    {
        $result = (new ValidMobile())->passes('' ,'91731453166');
        $this->assertEquals(0 , $result);
    }


    public function test_mobile_user_should_start_by_9()
    {
        $result = (new ValidMobile())->passes('' ,'3973145316');
        $this->assertEquals(0 , $result);
    }
}

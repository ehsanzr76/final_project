<?php 

namespace ehsan\User\services;

use NunoMaduro\Collision\Adapters\Phpunit\State;
use Symfony\Component\HttpKernel\DependencyInjection\ServicesResetter;

class VerifyCodeServices
{

    public static function GenerateCode()
    {
        return random_int(100000 , 999999);
    }


    public static function store($id , $code)
    {
        cache()->set('verify_code_' . $id , $code , now()->addDay()); /// برای یک روز کد فعالسازی ذخیره میماند
    }

    public static function get($id)        /// چک کردن کد فعالسازی ارسال شده به ایمیل با کد وارد شده توسط کاربر
    {
        return cache()->get('verify_code_' . $id);

    }

    public static function delete($id)   ///  حذف کد تایید از کش
    {
        return cache()->delete('verify_code_' . $id);
    }

}
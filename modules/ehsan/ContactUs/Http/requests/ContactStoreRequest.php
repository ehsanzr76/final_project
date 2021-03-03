<?php

namespace ehsan\ContactUs\Http\Requests;

use ehsan\User\Rules\ValidMobile;
use Illuminate\Foundation\Http\FormRequest;

class ContactStoreRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return auth()->check()==true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [

            'name' => 'required|max:190',
            'email' => 'required|min:3|max:190|email|',
            'body' =>'required',
            recaptchaFieldName() => recaptchaRuleName()

            //
        ];
    }
}

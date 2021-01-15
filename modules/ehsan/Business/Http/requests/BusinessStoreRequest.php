<?php

namespace ehsan\Business\Http\Requests;

use ehsan\User\Rules\ValidMobile;
use Illuminate\Foundation\Http\FormRequest;

class BusinessStoreRequest extends FormRequest
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

            'title' => 'required|max:190',
            'body' =>'required',
            'address' =>'required',
            'BusinessNumber' =>'required|max:190|unique:Businesses',
            'mobile' => ['string', 'min:9', 'max:14', 'unique:users' , new ValidMobile()],
            'category_id' => 'required|exists:categories,id',
            'image' => 'required|mimes:jpg,png,jpeg',
            recaptchaFieldName() => recaptchaRuleName()

            //
        ];
    }
}

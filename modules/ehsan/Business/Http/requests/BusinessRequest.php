<?php

namespace ehsan\Business\Http\Requests;

use ehsan\User\Rules\ValidMobile;
use Illuminate\Foundation\Http\FormRequest;

class BusinessRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
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
            recaptchaFieldName() => recaptchaRuleName()

            //
        ];
    }
}

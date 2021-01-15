<?php

namespace ehsan\Business\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
use ehsan\User\Rules\ValidMobile;

class BusinessUpdateRequest extends FormRequest
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

            'mobile' => ['string', 'min:9', 'max:14', 'unique:users', new ValidMobile()],
            'category_id' => 'required|exists:categories,id',
            'image' => 'nullable|mimes:jpg,png,jpeg',
            
        ];
    }
}

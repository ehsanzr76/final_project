<?php

namespace ehsan\User\Http\Requests;

use ehsan\User\models\User;
use ehsan\User\Rules\ValidMobile;
use ehsan\User\Rules\ValidPassword;
use Illuminate\Contracts\Validation\Rule;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Validation\Rule as ValidationRule;

class UserUpdateRequest extends FormRequest
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

            'name' => 'required|min:3|max:190',
            'email' => 'nullable|email|min:3|max:190|',
            'mobile' => ['nullable' , 'string', 'min:9', 'max:14', new ValidMobile()],
            'status' => ['required' , ValidationRule::in(User::$statuses)],
            'image' => 'nullable|mimes:jpg,jpeg,png',
            'password' => ['nullable', 'string', 'min:8'],
            'bio' => 'nullable',

            //
        ];
    }
}

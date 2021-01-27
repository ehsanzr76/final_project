<?php

namespace ehsan\User\Http\Requests;

use ehsan\User\Rules\ValidPassword;
use Illuminate\Foundation\Http\FormRequest;

class UserUpdateProfileRequest extends FormRequest
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
            'email' => 'required|min:3|max:190|email|unique:users,email,' . auth()->id(),
            'mobile' => 'required|unique:users,mobile,' . auth()->id(),
            'image' => 'nullable|mimes:jpg,jpeg,png',
            'password' => ['nullable', 'string', 'min:8' , new ValidPassword()],
            'bio' => 'nullable',


           
        ];
    }
}

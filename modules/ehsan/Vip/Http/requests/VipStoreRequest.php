<?php

namespace ehsan\Vip\Http\Requests;

use ehsan\User\Rules\ValidMobile;
use Illuminate\Foundation\Http\FormRequest;

class VipStoreRequest extends FormRequest
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
            'price' => 'required',
            'description' =>'required',
            'type'=>'required'
            //
        ];
    }
}

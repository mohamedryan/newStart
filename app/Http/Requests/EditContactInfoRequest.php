<?php

namespace App\Http\Requests;

use App\Http\Requests\Request;

class EditContactInfoRequest extends Request
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
            'email'         => 'required|email',
            'subject'       => 'required',
            'address'       => 'required',
            'emails'        => 'required',
            'phones'        => 'required',
            'fb'            => 'url',
            'tw'            => 'url',
            'skype'         => 'url',
            'youtube'       => 'url',
            'google'        => 'url',
            'pint'          => 'url',
            'instagram'     => 'url',
            'map'           => 'required'
        ];
    }
}

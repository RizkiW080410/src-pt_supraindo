<?php

namespace App\Http\Requests;

use App\Models\Contactus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateContactusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contactuse_edit');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'required',
            ],
            'phone' => [
                'string',
                'required',
            ],
            'email' => [
                'required',
            ],
            'description' => [
                'required',
            ],
        ];
    }
}

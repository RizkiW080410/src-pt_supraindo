<?php

namespace App\Http\Requests;

use App\Models\Contactus;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContactusRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contactuse_create');
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

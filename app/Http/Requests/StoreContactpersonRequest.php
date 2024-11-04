<?php

namespace App\Http\Requests;

use App\Models\Contactperson;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreContactpersonRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('contactperson_create');
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
        ];
    }
}

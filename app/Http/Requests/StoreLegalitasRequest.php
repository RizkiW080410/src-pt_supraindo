<?php

namespace App\Http\Requests;

use App\Models\Legalitas;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreLegalitasRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('legalitas_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
                'nullable',
            ],
        ];
    }
}

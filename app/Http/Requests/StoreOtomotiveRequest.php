<?php

namespace App\Http\Requests;

use App\Models\Otomotive;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreOtomotiveRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('otomotive_create');
    }

    public function rules()
    {
        return [
            'name' => [
                'string',
            ],
        ];
    }
}

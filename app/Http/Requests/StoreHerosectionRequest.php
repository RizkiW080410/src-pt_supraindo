<?php

namespace App\Http\Requests;

use App\Models\Herosection;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreHerosectionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('herosection_create');
    }

    public function rules()
    {
        return [
            'hero_description' => [
                'string',
            ],
        ];
    }
}

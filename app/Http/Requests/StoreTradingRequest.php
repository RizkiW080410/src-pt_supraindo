<?php

namespace App\Http\Requests;

use App\Models\Trading;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreTradingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('trading_create');
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

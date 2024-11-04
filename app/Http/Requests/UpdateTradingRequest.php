<?php

namespace App\Http\Requests;

use App\Models\Trading;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateTradingRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('trading_edit');
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

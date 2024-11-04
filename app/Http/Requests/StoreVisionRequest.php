<?php

namespace App\Http\Requests;

use App\Models\Vision;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class StoreVisionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('vision_create');
    }

    public function rules()
    {
        return [
            'visi' => [
                'string',
            ],
        ];
    }
}

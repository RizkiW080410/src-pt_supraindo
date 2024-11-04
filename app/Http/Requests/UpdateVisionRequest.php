<?php

namespace App\Http\Requests;

use App\Models\Vision;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateVisionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('vision_edit');
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

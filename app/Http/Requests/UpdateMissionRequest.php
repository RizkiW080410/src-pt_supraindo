<?php

namespace App\Http\Requests;

use App\Models\Mission;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateMissionRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('mission_edit');
    }

    public function rules()
    {
        return [
            'misi' => [
                'string',
            ],
        ];
    }
}

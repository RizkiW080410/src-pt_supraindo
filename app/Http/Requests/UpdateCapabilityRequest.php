<?php

namespace App\Http\Requests;

use App\Models\Capability;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateCapabilityRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('capabilitie_edit');
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

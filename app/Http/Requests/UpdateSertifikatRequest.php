<?php

namespace App\Http\Requests;

use App\Models\Sertifikat;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;

class UpdateSertifikatRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sertifikat_edit');
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

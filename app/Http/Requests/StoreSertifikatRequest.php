<?php

namespace App\Http\Requests;

use App\Models\Sertifikat;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Http\Response;
class StoreSertifikatRequest extends FormRequest
{
    public function authorize()
    {
        return Gate::allows('sertifikat_create');
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

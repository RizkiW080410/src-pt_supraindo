<?php

namespace App\Http\Requests;

use App\Models\Otomotive;
use Gate;
use Illuminate\Foundation\Http\FormRequest;
use Symfony\Component\HttpFoundation\Response;

class MassDestroyOtomotiveRequest extends FormRequest
{
    public function authorize()
    {
        abort_if(Gate::denies('otomotive_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return true;
    }

    public function rules()
    {
        return [
            'ids'   => 'required|array',
            'ids.*' => 'exists:otomotives,id',
        ];
    }
}

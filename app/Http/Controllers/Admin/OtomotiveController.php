<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyOtomotiveRequest;
use App\Http\Requests\StoreOtomotiveRequest;
use App\Http\Requests\UpdateOtomotiveRequest;
use App\Models\Otomotive;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class OtomotiveController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('otomotive_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $otomotives = Otomotive::all();

        return view('admin.otomotives.index', compact('otomotives'));
    }

    public function create()
    {
        abort_if(Gate::denies('otomotive_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.otomotives.create');
    }

    public function store(StoreOtomotiveRequest $request)
    {
        $otomotive = Otomotive::create($request->all());

        return redirect()->route('admin.otomotives.index');
    }

    public function edit(Otomotive $otomotive)
    {
        abort_if(Gate::denies('otomotive_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.otomotives.edit', compact('otomotive'));
    }

    public function update(UpdateOtomotiveRequest $request, Otomotive $otomotive)
    {
        $otomotive->update($request->all());

        return redirect()->route('admin.otomotives.index');
    }

    public function show(Otomotive $otomotive)
    {
        abort_if(Gate::denies('otomotive_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.otomotives.show', compact('otomotive'));
    }

    public function destroy(Otomotive $otomotive)
    {
        abort_if(Gate::denies('otomotive_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $otomotive->delete();

        return back();
    }

    public function massDestroy(MassDestroyOtomotiveRequest $request)
    {
        $otomotives = Otomotive::find(request('ids'));

        foreach ($otomotives as $otomotive) {
            $otomotive->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyHerosectionRequest;
use App\Http\Requests\StoreHerosectionRequest;
use App\Http\Requests\UpdateHerosectionRequest;
use App\Models\Herosection;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class HerosectionController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('herosection_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $herosections = Herosection::all();

        return view('admin.herosections.index', compact('herosections'));
    }

    public function create()
    {
        abort_if(Gate::denies('herosection_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.herosections.create');
    }

    public function store(StoreHerosectionRequest $request)
    {
        $herosection = Herosection::create($request->all());

        return redirect()->route('admin.herosections.index');
    }

    public function edit(Herosection $herosection)
    {
        abort_if(Gate::denies('herosection_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.herosections.edit', compact('herosection'));
    }

    public function update(UpdateHerosectionRequest $request, Herosection $herosection)
    {
        $herosection->update($request->all());

        return redirect()->route('admin.herosections.index');
    }

    public function show(Herosection $herosection)
    {
        abort_if(Gate::denies('herosection_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.herosections.show', compact('herosection'));
    }

    public function destroy(Herosection $herosection)
    {
        abort_if(Gate::denies('herosection_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $herosection->delete();

        return back();
    }

    public function massDestroy(MassDestroyHerosectionRequest $request)
    {
        $herosections = Herosection::find(request('ids'));

        foreach ($herosections as $herosection) {
            $herosection->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

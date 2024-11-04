<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyLegalitasRequest;
use App\Http\Requests\StoreLegalitasRequest;
use App\Http\Requests\UpdateLegalitasRequest;
use App\Models\Legalitas;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class LegalitasController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('legalitas_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $legalitys = Legalitas::with(['media'])->get();

        return view('admin.legalitys.index', compact('legalitys'));
    }

    public function create()
    {
        abort_if(Gate::denies('legalitas_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.legalitys.create');
    }

    public function store(StoreLegalitasRequest $request)
    {
        $legality = Legalitas::create($request->all());

        if ($request->input('image', false)) {
            $legality->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $legality->id]);
        }

        return redirect()->route('admin.legalitys.index');
    }

    public function edit(Legalitas $legality)
    {
        abort_if(Gate::denies('legalitas_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.legalitys.edit', compact('legality'));
    }

    public function update(UpdateLegalitasRequest $request, Legalitas $legality)
    {
        $legality->update($request->all());

        if ($request->input('image', false)) {
            if (! $legality->image || $request->input('image') !== $legality->image->file_name) {
                if ($legality->image) {
                    $legality->image->delete();
                }
                $legality->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($legality->image) {
            $legality->image->delete();
        }

        return redirect()->route('admin.legalitys.index');
    }

    public function show(Legalitas $legality)
    {
        abort_if(Gate::denies('legalitas_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.legalitys.show', compact('legality'));
    }

    public function destroy(Legalitas $legality)
    {
        abort_if(Gate::denies('legalitas_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $legality->delete();

        return back();
    }

    public function massDestroy(MassDestroyLegalitasRequest $request)
    {
        $legalitys = Legalitas::find(request('ids'));

        foreach ($legalitys as $legality) {
            $legality->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('legalitas_create') && Gate::denies('legalitas_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Legalitas();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
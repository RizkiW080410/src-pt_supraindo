<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroySertifikatRequest;
use App\Http\Requests\StoreSertifikatRequest;
use App\Http\Requests\UpdateSertifikatRequest;
use App\Models\Sertifikat;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class SertifikatController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('sertifikat_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sertifikats = Sertifikat::with(['media'])->get();

        return view('admin.sertifikats.index', compact('sertifikats'));
    }

    public function create()
    {
        abort_if(Gate::denies('sertifikat_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sertifikats.create');
    }

    public function store(StoreSertifikatRequest $request)
    {
        $sertifikat = Sertifikat::create($request->all());

        if ($request->input('image', false)) {
            $sertifikat->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $sertifikat->id]);
        }

        return redirect()->route('admin.sertifikats.index');
    }

    public function edit(Sertifikat $sertifikat)
    {
        abort_if(Gate::denies('sertifikat_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sertifikats.edit', compact('sertifikat'));
    }

    public function update(UpdateSertifikatRequest $request, Sertifikat $sertifikat)
    {
        $sertifikat->update($request->all());

        if ($request->input('image', false)) {
            if (! $sertifikat->image || $request->input('image') !== $sertifikat->image->file_name) {
                if ($sertifikat->image) {
                    $sertifikat->image->delete();
                }
                $sertifikat->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($sertifikat->image) {
            $sertifikat->image->delete();
        }

        return redirect()->route('admin.sertifikats.index');
    }

    public function show(Sertifikat $sertifikat)
    {
        abort_if(Gate::denies('sertifikat_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.sertifikats.show', compact('sertifikat'));
    }

    public function destroy(Sertifikat $sertifikat)
    {
        abort_if(Gate::denies('sertifikat_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $sertifikat->delete();

        return back();
    }

    public function massDestroy(MassDestroySertifikatRequest $request)
    {
        $sertifikats = Sertifikat::find(request('ids'));

        foreach ($sertifikats as $sertifikat) {
            $sertifikat->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('sertifikat_create') && Gate::denies('sertifikat_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Sertifikat();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}
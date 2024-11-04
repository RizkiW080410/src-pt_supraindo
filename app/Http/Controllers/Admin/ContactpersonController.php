<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyContactpersonRequest;
use App\Http\Requests\StoreContactpersonRequest;
use App\Http\Requests\UpdateContactpersonRequest;
use App\Models\Contactperson;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ContactpersonController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('contactperson_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactpersons = Contactperson::with(['media'])->get();

        return view('admin.contactpersons.index', compact('contactpersons'));
    }

    public function create()
    {
        abort_if(Gate::denies('contactperson_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactpersons.create');
    }

    public function store(StoreContactpersonRequest $request)
    {
        $contactperson = Contactperson::create($request->all());

        if ($request->input('image', false)) {
            $contactperson->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
        }

        if ($media = $request->input('ck-media', false)) {
            Media::whereIn('id', $media)->update(['model_id' => $contactperson->id]);
        }

        return redirect()->route('admin.contactpersons.index');
    }

    public function edit(Contactperson $contactperson)
    {
        abort_if(Gate::denies('contactperson_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactpersons.edit', compact('contactperson'));
    }

    public function update(UpdateContactpersonRequest $request, Contactperson $contactperson)
    {
        $contactperson->update($request->all());

        if ($request->input('image', false)) {
            if (! $contactperson->image || $request->input('image') !== $contactperson->image->file_name) {
                if ($contactperson->image) {
                    $contactperson->image->delete();
                }
                $contactperson->addMedia(storage_path('tmp/uploads/' . basename($request->input('image'))))->toMediaCollection('image');
            }
        } elseif ($contactperson->image) {
            $contactperson->image->delete();
        }

        return redirect()->route('admin.contactpersons.index');
    }

    public function show(Contactperson $contactperson)
    {
        abort_if(Gate::denies('contactperson_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contactpersons.show', compact('contactperson'));
    }

    public function destroy(Contactperson $contactperson)
    {
        abort_if(Gate::denies('contactperson_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contactperson->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactpersonRequest $request)
    {
        $contactpersons = Contactperson::find(request('ids'));

        foreach ($contactpersons as $contactperson) {
            $contactperson->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }

    public function storeCKEditorImages(Request $request)
    {
        abort_if(Gate::denies('contactperson_create') && Gate::denies('contactperson_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $model         = new Contactperson();
        $model->id     = $request->input('crud_id', 0);
        $model->exists = true;
        $media         = $model->addMediaFromRequest('upload')->toMediaCollection('ck-media');

        return response()->json(['id' => $media->id, 'url' => $media->getUrl()], Response::HTTP_CREATED);
    }
}

<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyContactusRequest;
use App\Http\Requests\StoreContactusRequest;
use App\Http\Requests\UpdateContactusRequest;
use App\Models\Contactus;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class ContactusController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('contactuse_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contacts = Contactus::all();

        return view('admin.contacts.index', compact('contacts'));
    }

    public function create()
    {
        abort_if(Gate::denies('contactuse_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contacts.create');
    }

    public function store(StoreContactusRequest $request)
    {
        $contact = Contactus::create($request->all());

        return redirect()->route('admin.contacts.index');
    }

    public function edit(Contactus $contact)
    {
        abort_if(Gate::denies('contactuse_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contacts.edit', compact('contact'));
    }

    public function update(UpdateContactusRequest $request, Contactus $contact)
    {
        $contact->update($request->all());

        return redirect()->route('admin.contacts.index');
    }

    public function show(Contactus $contact)
    {
        abort_if(Gate::denies('contactuse_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.contacts.show', compact('contact'));
    }

    public function destroy(Contactus $contact)
    {
        abort_if(Gate::denies('contactuse_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $contact->delete();

        return back();
    }

    public function massDestroy(MassDestroyContactusRequest $request)
    {
        $contacts = Contactus::find(request('ids'));

        foreach ($contacts as $contact) {
            $contact->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

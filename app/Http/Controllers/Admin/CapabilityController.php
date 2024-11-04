<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyCapabilityRequest;
use App\Http\Requests\StoreCapabilityRequest;
use App\Http\Requests\UpdateCapabilityRequest;
use App\Models\Capability;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class CapabilityController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('capabilitie_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $capabilities = Capability::all();

        return view('admin.capabilities.index', compact('capabilities'));
    }

    public function create()
    {
        abort_if(Gate::denies('capabilitie_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.capabilities.create');
    }

    public function store(StoreCapabilityRequest $request)
    {
        $capability = Capability::create($request->all());

        return redirect()->route('admin.capabilities.index');
    }

    public function edit(Capability $capability)
    {
        abort_if(Gate::denies('capabilitie_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.capabilities.edit', compact('capability'));
    }

    public function update(UpdateCapabilityRequest $request, Capability $capability)
    {
        $capability->update($request->all());

        return redirect()->route('admin.capabilities.index');
    }

    public function show(Capability $capability)
    {
        abort_if(Gate::denies('capabilitie_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.capabilities.show', compact('capability'));
    }

    public function destroy(Capability $capability)
    {
        abort_if(Gate::denies('capabilitie_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $capability->delete();

        return back();
    }

    public function massDestroy(MassDestroyCapabilityRequest $request)
    {
        $capabilities = Capability::find(request('ids'));

        foreach ($capabilities as $capability) {
            $capability->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

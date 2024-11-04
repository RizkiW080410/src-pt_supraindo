<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Controllers\Traits\MediaUploadingTrait;
use App\Http\Requests\MassDestroyTradingRequest;
use App\Http\Requests\StoreTradingRequest;
use App\Http\Requests\UpdateTradingRequest;
use App\Models\Trading;
use Gate;
use Illuminate\Http\Request;
use Spatie\MediaLibrary\MediaCollections\Models\Media;
use Symfony\Component\HttpFoundation\Response;

class TradingController extends Controller
{
    use MediaUploadingTrait;

    public function index()
    {
        abort_if(Gate::denies('trading_access'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $tradings = Trading::all();

        return view('admin.tradings.index', compact('tradings'));
    }

    public function create()
    {
        abort_if(Gate::denies('trading_create'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tradings.create');
    }

    public function store(StoreTradingRequest $request)
    {
        $trading = Trading::create($request->all());

        return redirect()->route('admin.tradings.index');
    }

    public function edit(Trading $trading)
    {
        abort_if(Gate::denies('trading_edit'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tradings.edit', compact('trading'));
    }

    public function update(UpdateTradingRequest $request, Trading $trading)
    {
        $trading->update($request->all());

        return redirect()->route('admin.tradings.index');
    }

    public function show(Trading $trading)
    {
        abort_if(Gate::denies('trading_show'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        return view('admin.tradings.show', compact('trading'));
    }

    public function destroy(Trading $trading)
    {
        abort_if(Gate::denies('trading_delete'), Response::HTTP_FORBIDDEN, '403 Forbidden');

        $trading->delete();

        return back();
    }

    public function massDestroy(MassDestroyTradingRequest $request)
    {
        $tradings = Trading::find(request('ids'));

        foreach ($tradings as $trading) {
            $trading->delete();
        }

        return response(null, Response::HTTP_NO_CONTENT);
    }
}

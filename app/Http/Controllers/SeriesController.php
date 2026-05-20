<?php

namespace App\Http\Controllers;

use App\Http\Requests\SeriesFormRequest;
use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index(Request $request)
    {
        $series = Serie::query()->orderBy('name')->get();
        $messageSuccess = session('message.success');

        return view('series.index')->with('series', $series)->with('messageSuccess', $messageSuccess);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(SeriesFormRequest $request)
    {
        $newSerie = Serie::create($request->all());

        return to_route("series.index")->with('message.success', "Série '$newSerie->name' criada com sucesso");
    }

    public function edit(Serie $series)
    {
        return view('series.edit')->with('series', $series);
    }

    public function update(Serie $series, SeriesFormRequest $request)
    {
        $series->fill($request->all());
        $series->save();

        return to_route('series.index')->with('message.success', "Série '$series->name' editada com sucesso");
    }

    public function destroy(Serie $series, Request $request)
    {
        $series->delete();

        return to_route("series.index")->with('message.success', "Série '$series->name' removida com sucesso!");
    }
}

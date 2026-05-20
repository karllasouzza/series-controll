<?php

namespace App\Http\Controllers;

use App\Models\Serie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SeriesController extends Controller
{
    public function index()
    {
        $series = Serie::query()->orderBy('name')->get();

        return view('series.index')->with('series', $series);
    }

    public function create()
    {
        return view('series.create');
    }

    public function store(Request $request)
    {
        $serieName = $request->input('name');
        $newSerie = new Serie();
        $newSerie->name = $serieName;
        $newSerie->save();

        return redirect('/series');
    }
}

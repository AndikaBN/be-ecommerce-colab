<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\History;

class HistoryController extends Controller
{
    public function index()
    {
        return History::all();
    }

    public function show($id)
    {
        return History::find($id);
    }
    public function store(Request $request)
    {
        $history = History::create($request->all());
        return response()->json($history, 201);
    }

    public function update(Request $request, $id)
    {
        $history = History::findOrFail($id);
        $history->update($request->all());
        return response()->json($history, 200);
    }

    public function delete($id)
    {
        History::findOrFail($id)->delete();
        return response()->json(null, 204);
    }
}

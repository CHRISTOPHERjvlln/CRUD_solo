<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\Program;
use Illuminate\Http\Request;

class ProgramController extends Controller
{
    public function index()
    {
        return response()->json(Program::all(), 200);
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'code' => 'required|unique:programs,code',
            'description' => 'required',
        ]);

        $program = Program::create($validated);
        return response()->json($program, 201);
    }

    public function show(Program $program)
    {
        return response()->json($program, 200);
    }

    public function update(Request $request, Program $program)
    {
        $validated = $request->validate([
            'code' => 'required|unique:programs,code,' . $program->id,
            'description' => 'required',
        ]);

        $program->update($validated);
        return response()->json($program, 200);
    }

    public function destroy(Program $program)
    {
        $program->delete();
        return response()->json(null, 204);
    }
}
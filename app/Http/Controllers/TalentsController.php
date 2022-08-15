<?php

namespace App\Http\Controllers;

use App\Models\Talents;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ClassesResource;

class TalentsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $talents = Talents::all();
        return response()->json([
            'status' => 'success',
            'data' => $talents
        ], 200);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'id_talent' => 'required',
            'nama_talent' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }
        $talents = Talents::create([
            'id_talent' => $request->id_talent,
            'nama_talent' => $request->nama_talent,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Talent berhasil ditambahkan'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Talents  $talents
     * @return \Illuminate\Http\Response
     */
    public function show(Talents $talent)
    {
        $talents = Talents::find($talent);
        if (is_null($talents)) {
            return $this->sendError('user not found.');
        }
        return response()->json([
            "success" => true,
            "message" => "Talent berhasil ditemukan.",
            "data" => $talents
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Talents  $talents
     * @return \Illuminate\Http\Response
     */
    public function edit(Talents $talents)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Talents  $talents
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Talents $talent)
    {
        $talent->update([
                'nama_talent'     => $request->nama_talent
        ]);
        return new ClassesResource(true, 'Data Talent Berhasil Diubah!', $talent);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Talents  $talents
     * @return \Illuminate\Http\Response
     */
    public function destroy(Talents $talent)
    {
        $talent->delete();
        return new ClassesResource(true, 'Data Kelas Berhasil Dihapus!', $talent);
    }
}

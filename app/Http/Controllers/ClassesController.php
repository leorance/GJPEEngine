<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ClassesResource;

class ClassesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        // laravel show all data
        $classes = Classes::all();
        return response()->json([
            'status' => 'success',
            'data' => $classes
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
            'id_kelas' => 'required',
            'nama_kelas' => 'required',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }
        $classes = Classes::create([
            'id_kelas' => $request->id_kelas,
            'nama_kelas' => $request->nama_kelas,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Kelas berhasil ditambahkan'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function show(Classes $class)
    {
        // laravel find by id
        $classes = Classes::find($class);
        if (is_null($classes)) {
            return $this->sendError('classes not found.');
        }
        return response()->json([
            "success" => true,
            "message" => "Kelas berhasil ditemukan.",
            "data" => $classes
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function edit(Classes $classes)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Classes $class)
    {
        // update data
         $class->update([
                'nama_kelas'     => $request->nama_kelas
        ]);
        return new ClassesResource(true, 'Data Kelas Berhasil Diubah!', $class);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Classes  $classes
     * @return \Illuminate\Http\Response
     */
    public function destroy(Classes $class)
    {
        // destroy controller laravel
        $class->delete();
        return new ClassesResource(true, 'Data Kelas Berhasil Dihapus!', $class);
    }
}
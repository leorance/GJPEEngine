<?php

namespace App\Http\Controllers;

use App\Models\Pelayanan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ClassesResource;

class PelayananController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $pelayanan = Pelayanan::all();
        return response()->json([
            'status' => 'success',
            'data' => $pelayanan
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
            'id_pel' => 'required',
            'id_user' => 'required',
            'id_talent' => 'required',
            'id_kelas' => 'required',
            'tanggal_pelayanan' => 'required|date',
        ]);
        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $validator->errors()
            ], 400);
        }
        $Pelayanans = Pelayanan::create([
            'id_pel' => $request->id_pel,
            'id_user' => $request->id_user,
            'id_talent' => $request->id_talent,
            'id_kelas' => $request->id_kelas,
            'tanggal_pelayanan' => $request->tanggal_pelayanan,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Jadwal Pelayanan berhasil ditambahkan'
        ], 201);
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function show(Pelayanan $pelayanan)
    {
        $pelayanans = Pelayanan::find($pelayanan);
        if (is_null($pelayanans)) {
            return $this->sendError('Jadwal Pelayanan tidak ditemukan.');
        }
        return response()->json([
            "success" => true,
            "message" => "Jadwal Pelayanan berhasil ditemukan.",
            "data" => $pelayanans
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function edit(Pelayanan $pelayanan)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Pelayanan $pelayanan)
    {
        $pelayanan->update([
            'id_user'           => $request->id_user,
            'id_talent'         => $request->id_talent,
            'id_kelas'          => $request->id_kelas,
            'tanggal_pelayanan' => $request->tanggal_pelayanan,
        ]);
        return new ClassesResource(true, 'Jadwal Pelayanan Berhasil Diubah!', $pelayanan);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Pelayanan  $pelayanan
     * @return \Illuminate\Http\Response
     */
    public function destroy(Pelayanan $pelayanan)
    {
        $pelayanan->delete();
        return new ClassesResource(true, 'Jadwal Pelayanan Berhasil Dihapus!', $pelayanan);
    }
}

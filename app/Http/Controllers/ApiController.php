<?php

namespace App\Http\Controllers;

use App\Models\Classes;
use App\Models\Pelayanan;
use App\Models\Talents;
use App\Models\Uname;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use App\Http\Resources\ClassesResource;

class ApiController extends Controller
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
        $uname = Uname::all();
        $pelayanan = Pelayanan::all();
        $talents = Talents::all();
        return response()->json([
            'data_class' => $classes,
            'data_uname' => $uname,
            'data_pelayanan' => $pelayanan,
            'data_talents' => $talents
        ]);
    }
    // Users
    public function index_uname(){
        $uname = Uname::all();
        return response()->json($uname);
    }

    // Classes
    public function index_classes(){
        $classes = Classes::all();
        return response()->json($classes);
    }

    // Pelayanan
    public function index_pelayanan(){
        $pelayanan = Pelayanan::all();
        return response()->json($pelayanan);
    }

    // Talents
    public function index_talents(){
        $talents = Talents::all();
        return response()->json($talents);
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
    
    // Uname
    public function store_uname(Request $request){
        $v_uname = Validator::make($request->all(), [
            'id_nama' => 'required',
            'nama_usr' => 'required',
        ]);
        if ($v_uname->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $v_uname->errors()
            ], 400);
        }
        $uname = Uname::create([
            'id_nama' => $request->id_nama,
            'nama_usr' => $request->nama_usr,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Uname berhasil ditambahkan'
        ], 201);
    }
     
    // Talent
    public function store_talent(Request $request){
        $v_talents = Validator::make($request->all(), [
            'id_talent' => 'required',
            'nama_talent' => 'required',
        ]);
        if ($v_talents->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $v_talents->errors()
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

    // Pelayanan
    public function store_pelayanan(Request $request){
        $v_pel = Validator::make($request->all(), [
            'id_pel' => 'required',
            'id_nama' => 'required',
            'id_talent' => 'required',
            'id_kelas' => 'required',
            'tanggal_pelayanan' => 'required|date',
        ]);
        if ($v_pel->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $v_pel->errors()
            ], 400);
        }
        $Pelayanans = Pelayanan::create([
            'id_pel' => $request->id_pel,
            'id_nama' => $request->id_nama,
            'id_talent' => $request->id_talent,
            'id_kelas' => $request->id_kelas,
            'tanggal_pelayanan' => $request->tanggal_pelayanan,
        ]);
        return response()->json([
            'status' => 'success',
            'message' => 'Jadwal Pelayanan berhasil ditambahkan'
        ], 201);
    }

    // Class
    public function store_class(Request $request)
    {
        $v_class = Validator::make($request->all(), [
            'id_kelas' => 'required',
            'nama_kelas' => 'required',
        ]);
        if ($v_class->fails()) {
            return response()->json([
                'status' => 'error',
                'message' => $v_class->errors()
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Users
    
    public function show_uname($id)
    {
        $unames = Uname::find($id);
        if (is_null($unames)) {
            return $this->sendError('user not found.');
        }
        return response()->json([
            "success" => true,
            "message" => "User berhasil ditemukan.",
            "data" => $unames
        ]);
    }

    // Talents
    public function show_talent($id)
    {
        $talents = Talents::find($id);
        if (is_null($talents)) {
            return $this->sendError('user not found.');
        }
        return response()->json([
            "success" => true,
            "message" => "Talent berhasil ditemukan.",
            "data" => $talents
        ]);
    }

    // Pelayanan
    public function show_pelayanan($id)
    {
        $pelayanans = Pelayanan::find($id);
        if (is_null($pelayanans)) {
            return $this->sendError('Jadwal Pelayanan tidak ditemukan.');
        }
        return response()->json([
            "success" => true,
            "message" => "Jadwal Pelayanan berhasil ditemukan.",
            "data" => $pelayanans
        ]);
    }

    // Classes
    public function show_class($id)
    {
        $classes = Classes::find($id);
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
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    
     // classes
     public function update_class(Request $request, Classes $class)
    {
        // update data
         $class->update([
                'nama_kelas'     => $request->nama_kelas
        ]);
        return new ClassesResource(true, 'Data Kelas Berhasil Diubah!', $class);
    }

    // Pelayanan
    public function update_pelayanan(Request $request, Pelayanan $pelayanan)
    {
        $pelayanan->update([
            'id_user'           => $request->id_user,
            'id_talent'         => $request->id_talent,
            'id_kelas'          => $request->id_kelas,
            'tanggal_pelayanan' => $request->tanggal_pelayanan,
        ]);
        return new ClassesResource(true, 'Jadwal Pelayanan Berhasil Diubah!', $pelayanan);
    }

    // Talent
    public function update_talent(Request $request, Talents $talent)
    {
        $talent->update([
                'nama_talent'     => $request->nama_talent
        ]);
        return new ClassesResource(true, 'Data Talent Berhasil Diubah!', $talent);
    }

    // User
    public function update_uname(Request $request, Uname $uname)
    {
        $uname->update([
                'nama_usr'     => $request->nama_usr
        ]);
        return new ClassesResource(true, 'Data User Berhasil Diubah!', $uname);
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    // Classes
    public function destroy_class(Classes $class)
    {
        // destroy controller laravel
        $class->delete();
        return new ClassesResource(true, 'Data Kelas Berhasil Dihapus!', $class);
    }
    
    // Pelayanan
    public function destroy_pelayanan(Pelayanan $pelayanan)
    {
        $pelayanan->delete();
        return new ClassesResource(true, 'Jadwal Pelayanan Berhasil Dihapus!', $pelayanan);
    }

    // Talent
    public function destroy_talent(Talents $talent)
    {
        $talent->delete();
        return new ClassesResource(true, 'Data talent Berhasil Dihapus!', $talent);
    }

    // User
    public function destroy_uname(Uname $uname)
    {
        $uname->delete();
        return new ClassesResource(true, 'Data user Berhasil Dihapus!', $uname);
    }

    public function weekOfDate(){
        $w1 = date('Y-m-d', strtotime("first sunday of this month"));
        $w2 = date('Y-m-d', strtotime("second sunday of this month"));
        $w3 = date('Y-m-d', strtotime("third sunday of this month"));
        $w4 = date('Y-m-d', strtotime("fourth sunday of this month"));
        $collection = array($w1, $w2, $w3, $w4);
        // $mulai = Carbon::parse($collection)->format('Y-m-d');
        // $data = $collection;
        // $last = JSON.parse($data);
        return response()->json($collection);
    }
}

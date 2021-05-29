<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Mahasiswa;
use App\Models\SetupKelas;
use App\Models\SetupPelajaran;

class MahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $mahasiswa = Mahasiswa::all();
        $mahasiswaselect = SetupKelas::select('bidang', 'nama_kelas')->get();
        $mahasiswawhere = SetupKelas::where('bidang', '=', 'Fisika')->get();
        $mahasiswajoin = SetupPelajaran::join('setup_kelas', 'nama_pelajaran', '=', 'bidang')->get();
        $mahasiswajoinlike = SetupPelajaran::join('setup_kelas', 'nama_pelajaran', '=', 'bidang')
            ->where('bidang', 'like', 'Fisika')->get();
        return view('0009home', [
            'mahasiswaselect' => $mahasiswaselect,
            'mahasiswawhere' => $mahasiswawhere,
            'mahasiswajoin' => $mahasiswajoin,
            'mahasiswajoinlike' => $mahasiswajoinlike,
        ]);
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
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

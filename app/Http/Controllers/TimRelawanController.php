<?php

namespace App\Http\Controllers;

use App\Models\DaftarTim;
use Illuminate\Http\Request;

class TimRelawanController extends Controller
{
    public function createTim(Request $request)
    {
        $this->validate($request, [
            'nama_tim' => 'required',
            'koordinator' => 'required',
            'keterangan' => 'max:255',
        ]);

        $daftar_tim = new DaftarTim();
        $daftar_tim->village_id = $request->kelurahan;
        $daftar_tim->nama_tim = $request->nama_tim;
        $daftar_tim->koordinator = $request->koordinator;
        $daftar_tim->jumlah_anggota = $request->jumlah_anggota;
        $daftar_tim->keterangan = $request->keterangan;
        $daftar_tim->save();

        return redirect()->back();
    }
}

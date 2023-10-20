<?php

namespace App\Http\Controllers;

use App\Models\DaftarTim;
use App\Models\AnggotaTim;
use Illuminate\Http\Request;

class TimRelawanController extends Controller
{
    public function createTim(Request $request)
    {
        // $this->validate($request, [
        //     'village_id' => 'required',
        //     'nama_tim' => 'required',
        //     'koordinator' => 'required',
        //     'keterangan' => 'required',
        // ]);
        $tim = new DaftarTim();
        $tim->village_id = $request->kelurahan;
        $tim->nama_tim = $request->nama_tim;
        $tim->koordinator = $request->koordinator;
        $tim->keterangan = $request->keterangan;
        $tim->save();
        // dd($tim);
        return redirect()->back()->with('success', 'Tim Berhasil ditambah!');
    }
    public function createAnggotaTim(Request $request)
    {
        // $request->validate([
        //     'nama_anggota'=>'required',
        //     'referal_tim'=>'required',
        //     'nik'=>'required',
        //     'no_hp'=>'required',
        //     'direkrut_oleh'=>'required',
        //     'tanggal_lahir'=>'required',
        //     'keterangan'=>'required',
        //     'agama'=>'required',
        //     'suku'=>'required',
        //     'alamat'=>'required',
        // ]);

        $anggota_tim = new DaftarTim();
        $anggota_tim->nama_anggota = $request->nama_anggota;
        $anggota_tim->referal_tim = $request->referal_tim;
        $anggota_tim->nik = $request->nik;
        $anggota_tim->no_hp = $request->no_hp;
        $anggota_tim->direkrut_oleh = $request->direkrut_oleh;
        $anggota_tim->tanggal_lahir = $request->tanggal_lahir;
        $anggota_tim->keterangan = $request->keterangan;
        $anggota_tim->agama = $request->agama;
        $anggota_tim->suku = $request->suku;
        $anggota_tim->alamat = $request->alamat;
        $anggota_tim->save();

        return redirect()->back()->with('success', 'Anggota berhasil ditambah!');
    }
}

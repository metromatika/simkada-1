<?php

namespace App\Http\Controllers;

use App\Models\DaftarTim;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;
use Illuminate\Support\Str;

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
    public function createAnggotaTim()
    {
        $attributes = request()->validate([
            'role' => ['required'],
            'ref_referal' => ['nullable', 'string', 'max:6'],
            'nama' => ['required', 'max:50'],
            'email' => ['required', 'email', 'max:50', Rule::unique('users', 'email')],
            'password' => ['required', 'min:5', 'max:20'],
            'nik' => ['required', 'string', 'max:16', Rule::unique('users', 'nik')],
            'jenis_kelamin' => ['required'],
            'agama' => ['required', 'string'],
            'suku' => ['required', 'string'],
            'telepon' => ['nullable', 'string', 'max:15'],
            'kelurahan' => ['required'],
            'alamat' => ['required', 'string'],
            'rt' => ['nullable', 'string', 'max:3'],
            'rw' => ['nullable', 'string', 'max:3'],
            'tps' => ['nullable', 'string', 'max:4'],
        ]);

        $attributes['password'] = bcrypt($attributes['password'] );
        $attributes['referal'] = strtoupper(Str::random(6));
        // dd($attributes);
        $user = User::create($attributes);
        return redirect()->back()->with('success', 'Anggota berhasil ditambah!');
    }
}
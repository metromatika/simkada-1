<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TPS;

class MasterDataController extends Controller
{
    public function jumlahTPS(Request $request)
    {
        // Validasi data
        $this->validate($request, [
            'jumlah_tps' => 'required|integer',
            'keterangan' => 'max:255',
        ]);

        $tps = new TPS();
        $tps->village_id = $request->kelurahan;
        $tps->jumlah_tps = $request->jumlah_tps;
        $tps->keterangan = $request->keterangan;
        $tps->save();

        return redirect()->back()->with('success');
    }
}

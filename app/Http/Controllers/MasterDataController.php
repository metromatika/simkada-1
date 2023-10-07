<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\TPS;

class MasterDataController extends Controller
{
    public function createJumlahTPS(Request $request)
    {
        $this->validate($request, [
            'jumlah_tps' => 'required|integer',
            'keterangan' => 'max:255',
        ]);

        $tps = new TPS();
        $tps->village_id = $request->kelurahan;
        $tps->jumlah_tps = $request->jumlah_tps;
        $tps->keterangan = $request->keterangan;
        $tps->save();

        return redirect()->back();
    }
    public function showJumlahTPS() {
        $tpsData = TPS::get();
        return view('applications.master-data.data-TPS', ['tpsData'=>$tpsData]);
    }
    public function deleteJumlahTPS($id) {
        $tpsData = TPS::where('id', $id)->delete();
        return redirect()->route('read-TPS');
    }
    public function editJumlahTPS($id, $editMode = true){
        $tpsData = TPS::find($id);
        return view('applications.master-data.data-tps', compact('tpsData', 'editMode'));
    }
    public function updateJumlahTPS(Request $request, TPS $tpsData){
        $tpsData->update([
            'jumlah_tps' => $request->jumlah_tps,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('read-TPS')->with('success', 'Data TPS berhasil diupdate');
    }

}

<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use App\Models\JumlahDPT;
use App\Models\TPS;
use Illuminate\Http\Request;
use Illuminate\Http\RedirectResponse;
use Illuminate\View\View;

class MasterDataController extends Controller
{
    public function createJumlahTPS(Request $request): RedirectResponse
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

        return redirect()->back()->with('success', 'Data TPS Berhasil ditambah!');
    }
    public function showJumlahTPS(): View
    {
        $tpsData = TPS::get();
        return view('applications.master-data.data-tps',compact('tpsData'));
    }
    public function deleteJumlahTPS($id): RedirectResponse
    {
        $tpsData = TPS::where('id', $id)->delete();
        return redirect()->route('read-TPS');
    }
    public function updateJumlahTPS(Request $request, $id): RedirectResponse
    {
        $tpsData = TPS::findOrFail($id);
        $tpsData->update([
            'jumlah_tps' => $request->jumlah_tps,
            'keterangan' => $request->keterangan,
        ]);
        return redirect()->route('read-TPS')->with('success', 'Data TPS berhasil diupdate');
    }
    public function createJumlahDPT(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'dpt_l' => 'required|integer',
            'dpt_p' => 'required|integer',
        ]);

        $dpt_l = $request->dpt_l;
        $dpt_p = $request->dpt_p;
        $dpt_jumlah = $dpt_l + $dpt_p;

        $jumlah_dpt = new JumlahDPT();
            $jumlah_dpt->village_id = $request->kelurahan;
            $jumlah_dpt->dpt_l = $dpt_l;
            $jumlah_dpt->dpt_p = $dpt_p;
            $jumlah_dpt->dpt_jumlah = $dpt_jumlah;
            $jumlah_dpt->save();
            return redirect()->back()->with('success', 'Data DPT berhasil ditambahkan.');
    }
    public function updateJumlahDPT(Request $request, $id): RedirectResponse
    {
        $tpsData = JumlahDPT::findOrFail($id);
        $dpt_l = $request->dpt_l;
        $dpt_p = $request->dpt_p;
        $dpt_jumlah = $dpt_l + $dpt_p;
        $tpsData->update([
            'dpt_l' => $request->dpt_l,
            'dpt_p' => $request->dpt_p,
            'dpt_jumlah' => $request->dpt_jumlah,
        ]);
        return redirect()->route('read-TPS')->with('success', 'Data DPT berhasil diupdate');
    }
    public function showJumlahDPT()
    {
        $jumlah_dpt = JumlahDPT::get();
        return view('applications.master-data.data-jumlah-dpt', ['jumlah_dpt' => $jumlah_dpt])->with('no', 1);
    }
    public function deleteJumlahDPT($id)
    {
        $jumlah_dpt = JumlahDPT::where('id', $id)->delete();
        return redirect()->route('read-DPT');
    }
}

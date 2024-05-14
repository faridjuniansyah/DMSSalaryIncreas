<?php

namespace App\Http\Controllers;

use App\Models\KemampuanBahasa;
use App\Models\Pendidikan;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class ProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $user = Auth::user();
        $personel = $user->personel;
        $pendidikan = $personel->pendidikan;
        $bahasa = $personel->kemampuan_bahasa;
        $personelBio = $personel->personelBio;
        $tanda_kehormatan = $personel->tanda_kehormatan;
        // dd($personel);
        return view('profile.index', compact('user', 'personel', 'pendidikan', 'bahasa', 'personelBio', 'tanda_kehormatan'));
    }

    public function pendidikanShow(): View
    {
        $user = Auth::user()->personel;
        $pendidikan = $user->pendidikan;
        return view('profile.pendidikan', compact('pendidikan'));
    }

    public function bahasaUpdate(Request $request): RedirectResponse
    {
        $user = Auth::user()->personel;

        KemampuanBahasa::where('personels_id', $user->id)->delete();

        foreach ($request->bahasa as $key => $bahasa) {

            $status = $request->status[$key];
            
            $kemampuan = new KemampuanBahasa();
            $kemampuan->personels_id = $user->id;
            $kemampuan->bahasa = $bahasa;
            $kemampuan->status = $status;

            $kemampuan->save();
        }

        Alert::success('Success', 'Data Kemampuan Bahasa berhasil diperbarui');

        return redirect()->route('bahasa.show');
    }

    public function pendidikanUpdate(Request $request): RedirectResponse
    {
        $user = Auth::user()->personel;

        Pendidikan::where('personels_id', $user->id)->delete();

        foreach ($request->tingkat as $key => $tingkat) {
            $nama_institusi = $request->nama_institusi[$key];
            $tahun = $request->tahun[$key];

            $pendidikan = new Pendidikan();
            $pendidikan->personels_id = $user->id;
            $pendidikan->tingkat = $tingkat;
            $pendidikan->nama_institusi = $nama_institusi;
            $pendidikan->tahun = $tahun;

            $pendidikan->save();
        }

        Alert::success('Success', 'Data pendidikan berhasil diperbarui');

        return redirect()->route('pendidikan.show');
    }

    /**
     * Show the form for creating a new resource.
     */

    public function bahasaShow(): View
    {
        $user = Auth::user()->personel;
        $bahasa = $user->kemampuan_bahasa;
        return view('profile.bahasa', compact('bahasa'));
    }
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

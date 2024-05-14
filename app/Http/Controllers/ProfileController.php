<?php

namespace App\Http\Controllers;

use App\Models\KemampuanBahasa;
use App\Models\Pendidikan;
use App\Models\Personel;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;
use Illuminate\Support\Facades\DB;

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

    public function personelShow(): View
    {
        $user = Auth::user();
        $personel = $user->personel;
        return view('profile.datadiri', compact('personel', 'user'));
    }

    public function personelUpdate(Request $request): RedirectResponse
    {
        try {


            DB::beginTransaction();

            // dd($request->file('foto'));

            $validatedData = $request->validate([
                'email' => 'required|string|email|max:255',
            ]);

            $dataUser = Auth::user();
            $user = User::findOrFail($dataUser->id);

            $dataPersonel = $dataUser->personel;
            $personel = Personel::findOrFail($dataPersonel->id);

            $foto = "";
            if ($request->file('foto')) {
                $validatedData = $request->validate([
                    'foto' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
                ]);
                $foto = $this->saveImage($request->file('foto'));

                // dd($foto);
            }
            

            // Update user data
            $user->update([
                'name' => $request->name,
                'email' => $request->email,
            ]);
            // dd($foto);

            $personel->name = $request->name;
            $personel->agama = $request->agama;
            $personel->tempat_lahir = $request->tempat_lahir;
            $personel->tgl_lahir = $request->tgl_lahir;
            $personel->suku = $request->suku;
            $personel->status = $request->status;
            $personel->gender = $request->gender;
            $personel->nrp = $request->nrp;
            $personel->foto = $foto  ? $foto : $personel->foto;

            $personel->save();

            DB::commit();
            Alert::success('Success', 'Data Diri Berhasil diperbarui');

            return redirect()->route('personel.datadiri');
        } catch (\Exception $e) {
            DB::rollBack();

            Alert::error('Error', 'Terjadi kesalahan saat memperbarui data diri');

            // Redirect back with input
            return redirect()->back()->withInput();
        }
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

    private function saveImage($file)
    {
        $imageName = time() . '.' . $file->getClientOriginalExtension();
        $f = $file->move(public_path('profile'), $imageName);

        return 'profile/' . $imageName;
    }
}

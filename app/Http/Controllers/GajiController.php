<?php

namespace App\Http\Controllers;

use App\Models\Gaji;
use Illuminate\Http\Request;
use DB;
use Hash;
use Illuminate\Support\Arr;
use Illuminate\View\View;
use Illuminate\Http\RedirectResponse;
use RealRashid\SweetAlert\Facades\Alert;

class GajiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request): View
    {
        return view('gaji.index', [
            'gaji' => Gaji::latest('id')->get()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('gaji.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $this->validate($request, [
            'golongan' => 'required',            
            'jumlah' => 'required'
        ]);

        $input = $request->all();

        $gaji = Gaji::create($input);
        
        
        Alert::success('Success', 'Data Gaji Berhasil Di Tambahkan');

        return redirect()->route('pelatihan.show');
    }

    /**
     * Display the specified resource.
     */
    public function show($id): View
    {
        $gaji = Gaji::find($id);
        return view('gaji.show', compact('gaji'));
    }

    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id): View
    {
        $gaji = Gaji::find($id);
        
        return view('gaji.edit', compact('gaji'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id): RedirectResponse
    {
        $this->validate($request, [
            'golongan' => 'required',
            'jumlah' => 'required',
            
        ]);

        $input = $request->all();
       
        $user = Gaji::find($id);
        $user->update($input);
       
        Alert::success('Success', 'Data Gaji Berhasil Di Ubah');

        return redirect()->route('gaji.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id): RedirectResponse
    {
        Gaji::find($id)->delete();
        Alert::success('Success', 'Data Gaji Berhasil Di Delete');
        return redirect()->route('users.index');
    }
}

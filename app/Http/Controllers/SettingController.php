<?php

namespace App\Http\Controllers;

use App\Models\Setting;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        if (Auth::user()->id == 1) {
            $title = 'Setting';
            $setting = Setting::first();
            return view('setting.index', compact('setting', 'title'));
        } else {
            return redirect('ppdb');
        }
    }

    /**
     * Show the form for creating a new resource.
     */
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
    public function show(Setting $setting)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Setting $setting)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $setting = Setting::findorfail($id);
        $logo = $setting->logo_setting;
        $update = [
            'pimpinan_setting' => $request->pimpinan_setting,
            'logo_setting' => $logo,
            'keyword_setting' => $request->keyword_setting,
            'deskripsi_setting' => $request->deskripsi_setting,
            'perusahaan_setting' => $request->perusahaan_setting,
            'tentang_setting' => $request->tentang_setting,
            'alamat_setting' => $request->alamat_setting,
            'no_hp_setting' => $request->no_hp_setting,
            'email_setting' => $request->email_setting,
            'maps_setting' => $request->maps_setting,
        ];
        if ($request->logo_setting != "") {
            $request->logo_setting->move(public_path('logo/'), $logo);
        }
        $setting->update($update);
        return redirect()->back()->with('Sukses', 'Berhasil Edit Konfigurasi Website');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Setting $setting)
    {
        //
    }
}

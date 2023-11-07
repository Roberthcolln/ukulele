<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContactUsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $data = DB::table('contact_us')->get();
        return view('contact.index', [
            'title' => 'Data Contact Us',
            'data' => $data
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $message = ['required' => '*Wajib diisi'];
        $validatedData = $request->validate([
            'full_name' => 'required',
            'email' => 'required',
            'organization' => 'required',
            'message' => 'required',
        ], $message);

        DB::table('contact_us')->insert($validatedData);

        return back()->with('sukses', 'Your Message Has been Sent');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = DB::table('contact_us')->where('id', $id)->first();
        return view('contact.show', [
            'title' => 'Detail Data Contact Us',
            'data' => $data
        ]);
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

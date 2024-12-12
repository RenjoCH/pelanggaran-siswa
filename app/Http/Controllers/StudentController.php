<?php

namespace App\Http\Controllers;
use App\Models\User;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = User::where('admin', '==', false)->get();
        return view('data-siswa.index',compact('user'));
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
        $input = $request->all();
        User::create($input);
        return back();
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $data = Siswa::find($id);
        return view('siswa.detail', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Siswa $siswa)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Siswa $siswa)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $data = Siswa::find($id);
        $data->delete();
        return back();
    }
}
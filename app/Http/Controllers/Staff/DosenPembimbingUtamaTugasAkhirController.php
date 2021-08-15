<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ProfileDosen;
use App\Models\User;
use Illuminate\Http\Request;

class DosenPembimbingUtamaTugasAkhirController extends Controller
{
    public function index()
    {
        $dosens = ProfileDosen::all();
        // dd($dosens);
        return view('staff.dosenTA.index', compact('dosens'));
    }
    public function create()
    {
        $users = User::where('role_id', '3')->get();
        return view('staff.dosenTA.create', compact('users'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "user_id" => "nullable",
            "total_mahasiswa" => "required",
        ]);
        ProfileDosen::create([
            "user_id" => $request->user_id,
            "total_mahasiswa" => $request->total_mahasiswa,
        ]);
    	
    	return redirect()->back()->with('status', 'Data Created!');
    }
    public function show($id)
    {
        $dosen = ProfileDosen::find($id);
        return view('staff.dosenTA.show', compact('dosen'));
    }
    public function edit($id)
    {
        $dosen = ProfileDosen::find($id);
        return view('staff.dosenTA.update', compact('dosen'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "user_id" => "nullable",
            "total_mahasiswa" => "required",
        ]);
        $dosen = ProfileDosen::find($id);
        $dosen->update([
            "user_id" => $request->user_id,
            "total_mahasiswa" => $request->total_mahasiswa,
        ]);
    	
    	return redirect()->back()->with('status', 'Data Created!');
    }
    public function destroy($id)
    {
        $dosen = ProfileDosen::find($id);
        $dosen->delete();
    	return redirect()->back()->with('status', 'Data Deleted!');
    }
}

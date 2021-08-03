<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ProfileDosen;
use App\Models\User;
use Illuminate\Http\Request;

class DosenTidakTetapController extends Controller
{
    public function index()
    {
        $dosens = ProfileDosen::all();
        // dd($dosens);
        return view('staff.dosenTidakTetap.index', compact('dosens'));
    }
    public function create()
    {
        $users = User::where('role_id', '3')->get();
        return view('staff.dosenTidakTetap.create', compact('users'));
    }
    public function store(Request $request)
    {
        //
    }
    public function show($id)
    {
        $dosen = ProfileDosen::find($id);
        return view('staff.dosenTidakTetap.show', compact('dosen'));
    }
    public function edit($id)
    {
        $users = User::all();
        $dosen = ProfileDosen::find($id);
        return view('staff.dosenTidakTetap.update', compact('dosen', 'users'));
    }
    public function update(Request $request, $dosen)
    {
        dd($request->all());
        $request->validate([
            'user_id' => 'reqired|numeric',
            // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
   
        $dosen = ProfileDosen::find($dosen->id);

        if ($request->hasFile("spp")) {
            $file = $request->file("spp");
            // $fileName = time() . "." . $file->getClientOriginalExtension();
            $fileName = time().'.'.$file->getClientOriginalExtension();  

            $request->file->move(public_path('files/dosen'), $fileName);
        }
        if ($request->hasFile("skpi")) {
            $file = $request->file("skpi");
            // $fileName = time() . "." . $file->getClientOriginalExtension();
            $fileName = time().'.'.$file->getClientOriginalExtension();  

            $request->file->move(public_path('files/dosen'), $fileName);
        }
        
        $dosen->update([
            "file" => $fileName,
            "user_id" => $request->user_id,
            "pps" => $request->pps,
            "bk" => $request->bk,
            "ja" => $request->ja,
            "spp" => $request->fileSpp,
            "skpi" => $request->fileSkpi,
            "mk" => $request->mk,
            "kmk" => $request->kmk,
            "desc" => $request->desc,
        ]);

        return redirect()->route('dosenTidakTetap.index');
    }
    public function destroy($id)
    {
        //
    }
}

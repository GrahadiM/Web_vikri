<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ProfileDosen;
use App\Models\User;
use Illuminate\Http\Request;

class DosenTetapController extends Controller
{
    public function index()
    {
        $dosens = ProfileDosen::all();
        return view('staff.dosenTetap.index', compact('dosens'));
    }
    public function create()
    {
        $users = User::where('role_id', '3')->get();
        return view('staff.dosenTetap.create', compact('users'));
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "user_id" => "nullable",
            "pps" => "required",
            "bk" => "required",
            "ja" => "required",
            "mk" => "required",
            "kmk" => "required",
            // "spp" => "nullable|csv,txt,xlx,xls,pdf|max:2048",
            // "skpi" => "nullable|csv,txt,xlx,xls,pdf|max:2048",
        ]);

        if ($request->hasFile(["spp", "skpi"])) {
            $file = $request->file(["spp", "skpi"]);
            $filename = time() . "." . $file->getClientOriginalExtension();

            $file->move('file/sertifikat', $filename);

            // File::delete('assets/image/spp' . $user->spp);
            User::create([
                "user_id" => $request->user_id,
                "pps" => $request->pps,
                "bk" => $request->bk,
                "ja" => $request->ja,
                "mk" => $request->mk,
                "kmk" => $request->kmk,
                "spp" => $filename,
                "skpi" => $filename,
            ]);
        }
    	
    	return redirect()->back()->with('status', 'Data Created!');
    }
   public function show($id)
    {
        $dosen = ProfileDosen::find($id);
        return view('staff.dosenTetap.show', compact('dosen'));
    }
    public function edit($id)
    {
        $dosen = ProfileDosen::find($id);
        return view('staff.dosenTetap.update', compact('dosen'));
    }
    public function update(Request $request, $id)
    {
        //
    }
    public function destroy($id)
    {
        $dosen = ProfileDosen::find($id);
        $dosen->delete();
        return redirect()->back()->with('status', 'Data Deleted');
    }
}

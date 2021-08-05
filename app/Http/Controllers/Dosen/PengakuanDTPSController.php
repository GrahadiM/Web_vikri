<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\PengakuanDTPS;
use Illuminate\Http\Request;

class PengakuanDTPSController extends Controller
{
    public function index()
    {
        $pengakuan = PengakuanDTPS::all();
        return view('dosen.PengakuanDTPS.index', compact('pengakuan'));
    }
    public function create()
    {
        return view('dosen.PengakuanDTPS.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "keahlian" => "required",
            "tingkat" => "required",
        ]);
        if ($request->hasFile(["bukti"])) {
            $file = $request->file(["bukti"]);
            $filenameOri = $file->getClientOriginalName();
            $filename = time() . "-" . $filenameOri;

            $file->move('file/bukti', $filename);

            PengakuanDTPS::create([
                "user_id" => auth()->user()->id,
                "keahlian" => $request->keahlian,
                "bukti" => $filename,
                "tingkat" => $request->tingkat,
            ]);
        }
        
    	return redirect()->back()->with('status', 'Form Created!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $item = PengakuanDTPS::find($id);
        return view('dosen.PengakuanDTPS.update', compact('item'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "keahlian" => "required",
            "tingkat" => "required",
        ]);
        if ($request->hasFile(["bukti"])) {
            $file = $request->file(["bukti"]);
            $filenameOri = $file->getClientOriginalName();
            $filename = time() . "-" . $filenameOri;

            $file->move('file/bukti', $filename);

            $item = PengakuanDTPS::find($id);
            $item->update([
                "user_id" => auth()->user()->id,
                "keahlian" => $request->keahlian,
                "bukti" => $filename,
                "tingkat" => $request->tingkat,
            ]);
        }
        $item = PengakuanDTPS::find($id);
        $item->update([
            "user_id" => auth()->user()->id,
            "keahlian" => $request->keahlian,
            "tingkat" => $request->tingkat,
        ]);
        
    	return redirect()->back()->with('status', 'Form Updated!');
    }
    public function destroy($id)
    {
        $item = PengakuanDTPS::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Deleted!');
    }
}

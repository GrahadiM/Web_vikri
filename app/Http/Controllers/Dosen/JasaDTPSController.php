<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\JasaDTPS;
use Illuminate\Http\Request;

class JasaDTPSController extends Controller
{
    public function index()
    {
        $items = JasaDTPS::all();
        return view('dosen.JasaDTPS.index', compact('items'));
    }
    public function create()
    {
        return view('dosen.JasaDTPS.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "produk" => "required",
            "deskripsi" => "required",
            "tahun" => "required",
        ]);
        if ($request->hasFile(["bukti"])) {
            $file = $request->file(["bukti"]);
            $filenameOri = $file->getClientOriginalName();
            $filename = time() . "-" . $filenameOri;

            $file->move('file/bukti', $filename);

            JasaDTPS::create([
                "user_id" => auth()->user()->id,
                "produk" => $request->produk,
                "deskripsi" => $request->deskripsi,
                "tahun" => $request->tahun,
                "bukti" => $filename,
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
        $item = JasaDTPS::find($id);
        return view('dosen.JasaDTPS.update', compact('item'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "produk" => "required",
            "deskripsi" => "required",
            "tahun" => "required",
        ]);
        if ($request->hasFile(["bukti"])) {
            $file = $request->file(["bukti"]);
            $filenameOri = $file->getClientOriginalName();
            $filename = time() . "-" . $filenameOri;

            $file->move('file/bukti', $filename);

            $item = JasaDTPS::find($id);
            $item->update([
                "user_id" => auth()->user()->id,
                "produk" => $request->produk,
                "deskripsi" => $request->deskripsi,
                "tahun" => $request->tahun,
                "bukti" => $filename,
            ]);
        }

        $item = JasaDTPS::find($id);
        $item->update([
            "user_id" => auth()->user()->id,
            "produk" => $request->produk,
            "deskripsi" => $request->deskripsi,
            "tahun" => $request->tahun,
        ]);
        
    	return redirect()->back()->with('status', 'Form Updated!');
    }
    public function destroy($id)
    {
        $item = JasaDTPS::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Deleted!');
    }
}

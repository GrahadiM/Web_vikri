<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\PublikasiIlmiahDTPS;
use Illuminate\Http\Request;

class PublikasiIlmiahDTPSController extends Controller
{
    public function index()
    {
        $publikasi = PublikasiIlmiahDTPS::all();
        return view('dosen.PublikasiIlmiahDTPS.index', compact('publikasi'));
    }
    public function create()
    {
        return view('dosen.PublikasiIlmiahDTPS.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "jenis" => "required",
        ]);
        PublikasiIlmiahDTPS::create([
            "user_id" => auth()->user()->id,
            "jenis" => $request->jenis,
        ]);
        
    	return redirect()->back()->with('status', 'Form Created!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $item = PublikasiIlmiahDTPS::find($id);
        return view('dosen.PublikasiIlmiahDTPS.update', compact('item'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "jenis" => "required",
        ]);
        $item = PublikasiIlmiahDTPS::find($id);
        $item->update([
            "user_id" => auth()->user()->id,
            "jenis" => $request->jenis,
        ]);
        
    	return redirect()->back()->with('status', 'Form Updated!');
    }
    public function destroy($id)
    {
        $item = PublikasiIlmiahDTPS::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Deleted!');
    }
}

<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\HKIHakCipta;
use Illuminate\Http\Request;

class HKIHakCiptaController extends Controller
{
    public function index()
    {
        $items = HKIHakCipta::all();
        return view('dosen.HKIHakCipta.index', compact('items'));
    }
    public function create()
    {
        return view('dosen.HKIHakCipta.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "pkm" => "required",
            "tahun" => "required",
            "ket" => "required",
        ]);
        HKIHakCipta::create([
            "user_id" => auth()->user()->id,
            "pkm" => $request->pkm,
            "tahun" => $request->tahun,
            "ket" => $request->ket,
        ]);
        
    	return redirect()->back()->with('status', 'Form Created!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $item = HKIHakCipta::find($id);
        return view('dosen.HKIHakCipta.update', compact('item'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "pkm" => "required",
            "tahun" => "required",
            "ket" => "required",
        ]);
        $item = HKIHakCipta::find($id);
        $item->update([
            "user_id" => auth()->user()->id,
            "pkm" => $request->pkm,
            "tahun" => $request->tahun,
            "ket" => $request->ket,
        ]);
        
    	return redirect()->back()->with('status', 'Form Updated!');
    }
    public function destroy($id)
    {
        $item = HKIHakCipta::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Deleted!');
    }
}

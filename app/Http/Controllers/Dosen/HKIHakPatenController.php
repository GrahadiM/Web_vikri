<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\HKIHakPaten;
use Illuminate\Http\Request;

class HKIHakPatenController extends Controller
{
    public function index()
    {
        $items = HKIHakPaten::all();
        return view('dosen.HKIHakPaten.index', compact('items'));
    }
    public function create()
    {
        return view('dosen.HKIHakPaten.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "pkm" => "required",
            "tahun" => "required",
            "ket" => "required",
        ]);
        HKIHakPaten::create([
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
        $item = HKIHakPaten::find($id);
        return view('dosen.HKIHakPaten.update', compact('item'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "pkm" => "required",
            "tahun" => "required",
            "ket" => "required",
        ]);
        $item = HKIHakPaten::find($id);
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
        $item = HKIHakPaten::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Deleted!');
    }
}

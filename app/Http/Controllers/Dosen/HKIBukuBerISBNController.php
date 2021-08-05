<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\HKIBukuBerISBN;
use Illuminate\Http\Request;

class HKIBukuBerISBNController extends Controller
{
    public function index()
    {
        $items = HKIBukuBerISBN::all();
        return view('dosen.HKIBukuBerISBN.index', compact('items'));
    }
    public function create()
    {
        return view('dosen.HKIBukuBerISBN.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "pkm" => "required",
            "tahun" => "required",
            "ket" => "required",
        ]);
        HKIBukuBerISBN::create([
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
        $item = HKIBukuBerISBN::find($id);
        return view('dosen.HKIBukuBerISBN.update', compact('item'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "pkm" => "required",
            "tahun" => "required",
            "ket" => "required",
        ]);
        $item = HKIBukuBerISBN::find($id);
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
        $item = HKIBukuBerISBN::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Deleted!');
    }
}

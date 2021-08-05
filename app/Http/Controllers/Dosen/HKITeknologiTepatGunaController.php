<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\HKITeknologiTepatGuna;
use Illuminate\Http\Request;

class HKITeknologiTepatGunaController extends Controller
{
    public function index()
    {
        $items = HKITeknologiTepatGuna::all();
        return view('dosen.HKITeknologiTepatGuna.index', compact('items'));
    }
    public function create()
    {
        return view('dosen.HKITeknologiTepatGuna.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "pkm" => "required",
            "tahun" => "required",
            "ket" => "required",
        ]);
        HKITeknologiTepatGuna::create([
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
        $item = HKITeknologiTepatGuna::find($id);
        return view('dosen.HKITeknologiTepatGuna.update', compact('item'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "pkm" => "required",
            "tahun" => "required",
            "ket" => "required",
        ]);
        $item = HKITeknologiTepatGuna::find($id);
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
        $item = HKITeknologiTepatGuna::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Deleted!');
    }
}

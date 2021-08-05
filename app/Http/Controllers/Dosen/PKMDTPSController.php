<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\PKMDTPS;
use Illuminate\Http\Request;

class PKMDTPSController extends Controller
{
    public function index()
    {
        $pkm = PKMDTPS::all();
        return view('dosen.PKMDTPS.index', compact('pkm'));
    }
    public function create()
    {
        return view('dosen.PKMDTPS.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "sumber" => "required",
            "total_judul" => "required",
        ]);
        PKMDTPS::create([
            "user_id" => auth()->user()->id,
            "sumber" => $request->sumber,
            "total_judul" => $request->total_judul,
        ]);
        
    	return redirect()->back()->with('status', 'Form Created!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $item = PKMDTPS::find($id);
        return view('dosen.PKMDTPS.update', compact('item'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "sumber" => "required",
            "total_judul" => "required",
        ]);
        $item = PKMDTPS::find($id);
        $item->update([
            "user_id" => auth()->user()->id,
            "sumber" => $request->sumber,
            "total_judul" => $request->total_judul,
        ]);
        
    	return redirect()->back()->with('status', 'Form Updated!');
    }
    public function destroy($id)
    {
        $item = PKMDTPS::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Deleted!');
    }
}

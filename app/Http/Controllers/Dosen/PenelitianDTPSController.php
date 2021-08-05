<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\PenelitianDTPS;
use Illuminate\Http\Request;

class PenelitianDTPSController extends Controller
{
    public function index()
    {
        $penelitian = PenelitianDTPS::all();
        return view('dosen.PenelitianDTPS.index', compact('penelitian'));
    }
    public function create()
    {
        return view('dosen.PenelitianDTPS.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "sumber" => "required",
            "total_judul" => "required",
        ]);
        PenelitianDTPS::create([
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
        $item = PenelitianDTPS::find($id);
        return view('dosen.PenelitianDTPS.update', compact('item'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "sumber" => "required",
            "total_judul" => "required",
        ]);
        $item = PenelitianDTPS::find($id);
        $item->update([
            "user_id" => auth()->user()->id,
            "sumber" => $request->sumber,
            "total_judul" => $request->total_judul,
        ]);
        
    	return redirect()->back()->with('status', 'Form Updated!');
    }
    public function destroy($id)
    {
        $item = PenelitianDTPS::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Deleted!');
    }
}

<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\KaryaIlmiahDTPS;
use Illuminate\Http\Request;

class KaryaIlmiahDTPSController extends Controller
{
    public function index()
    {
        $items = KaryaIlmiahDTPS::all();
        return view('dosen.KaryaIlmiahDTPS.index', compact('items'));
    }
    public function create()
    {
        return view('dosen.KaryaIlmiahDTPS.create');
    }
    public function store(Request $request)
    {
        // dd($request->all());
        $request->validate([
            "judul" => "required",
        ]);
        KaryaIlmiahDTPS::create([
            "user_id" => auth()->user()->id,
            "judul" => $request->judul,
        ]);
        
    	return redirect()->back()->with('status', 'Form Created!');
    }
    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        $item = KaryaIlmiahDTPS::find($id);
        return view('dosen.KaryaIlmiahDTPS.update', compact('item'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $request->validate([
            "judul" => "required",
        ]);
        $item = KaryaIlmiahDTPS::find($id);
        $item->update([
            "user_id" => auth()->user()->id,
            "judul" => $request->judul,
        ]);
        
    	return redirect()->back()->with('status', 'Form Updated!');
    }
    public function destroy($id)
    {
        $item = KaryaIlmiahDTPS::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Deleted!');
    }
}

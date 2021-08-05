<?php

namespace App\Http\Controllers\Dosen;

use App\Http\Controllers\Controller;
use App\Models\EWMPDTPT;
use Illuminate\Http\Request;

class EWMPDTPTController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $ewmp = EWMPDTPT::all();
        return view('dosen.EWMPDTPT.index', compact('ewmp'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('dosen.EWMPDTPT.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // dd($request->all());
        $this->validate($request, [
            "total_sks" => "required",
        ]);
        EWMPDTPT::create([
            "user_id" => auth()->user()->id,
            "total_sks" => $request->total_sks,
        ]);
        
    	return redirect()->back()->with('status', 'Form Created!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        return view('dosen.EWMPDTPT.show');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $item = EWMPDTPT::find($id);
        return view('dosen.EWMPDTPT.update', compact('item'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            "total_sks" => "required",
        ]);
        $item = EWMPDTPT::find($id);
        $item->update([
            "user_id" => auth()->user()->id,
            "total_sks" => $request->total_sks,
        ]);
        
    	return redirect()->back()->with('status', 'Form Updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $item = EWMPDTPT::find($id);
        $item->delete();
    	return redirect()->back()->with('status', 'Form Updated!');
    }
}

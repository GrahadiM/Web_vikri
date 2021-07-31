<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ProfileDosen;
use App\Models\User;
use Illuminate\Http\Request;

class DosenTidakTetapController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $dosens = ProfileDosen::all();
        // dd($dosens);
        return view('staff.dosenTidakTetap.index', compact('dosens'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $users = User::all();
        $dosen = ProfileDosen::find($id);
        return view('staff.dosenTidakTetap.update', compact('dosen', 'users'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $dosen)
    {
        dd($request->all());
        $request->validate([
            'user_id' => 'reqired|numeric',
            // 'file' => 'required|mimes:pdf,xlx,csv|max:2048',
        ]);
   
        $dosen = ProfileDosen::find($dosen->id);

        if ($request->hasFile("spp")) {
            $file = $request->file("spp");
            // $fileName = time() . "." . $file->getClientOriginalExtension();
            $fileName = time().'.'.$file->getClientOriginalExtension();  

            $request->file->move(public_path('files/dosen'), $fileName);
        }
        if ($request->hasFile("skpi")) {
            $file = $request->file("skpi");
            // $fileName = time() . "." . $file->getClientOriginalExtension();
            $fileName = time().'.'.$file->getClientOriginalExtension();  

            $request->file->move(public_path('files/dosen'), $fileName);
        }
        
        $dosen->update([
            "file" => $fileName,
            "user_id" => $request->user_id,
            "pps" => $request->pps,
            "bk" => $request->bk,
            "ja" => $request->ja,
            "spp" => $request->fileSpp,
            "skpi" => $request->fileSkpi,
            "mk" => $request->mk,
            "kmk" => $request->kmk,
            "desc" => $request->desc,
        ]);

        return redirect()->route('dosenTidakTetap.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

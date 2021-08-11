<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ProfileDosen;
use App\Models\User;
use Illuminate\Http\Request;

class DosenTetapController extends Controller
{
    public function index()
    {
        $dosens = ProfileDosen::all();
        return view('staff.dosenTetap.index', compact('dosens'));
    }
    public function create()
    {
        $users = User::where('role_id', '3')->get();
        return view('staff.dosenTetap.create', compact('users'));
    }
    public function store(Request $request)
    {   
        $attr = $this->validate(request(), [
            'user_id' => 'nullable',
            'pps' => 'required',
            'bk' => 'required',
            'ja' => 'required',
            'mk' => 'required',
            'kmk' => 'required',
        ]);
        //Dekripsi
        $attr['desc'] = 'Dosen Tetap';
        //SKPI
        $skpi = request('skpi');
        $skpiName = time() . rand(100, 999) . "_" . $skpi->getClientOriginalName();
        $skpi->move(public_path() . '/file/skpi', $skpiName);
        $attr['skpi'] = $skpiName;
        //SPP
        $spp = request('spp');
        $sppName = time() . rand(100, 999) . "_" . $spp->getClientOriginalName();
        $spp->move(public_path() . '/file/spp', $sppName);
        $attr['spp'] = $sppName;
        ProfileDosen::create($attr);
    	
    	return back()->with('status', 'Data Created!');
    }
   public function show($id)
    {
        $dosen = ProfileDosen::find($id);
        return view('staff.dosenTetap.show', compact('dosen'));
    }
    public function edit($id)
    {
        $dosen = ProfileDosen::find($id);
        return view('staff.dosenTetap.update', compact('dosen'));
    }
    public function update(Request $request, $id)
    {
        // dd($request->all());
        $attr = $this->validate(request(), [
            'user_id' => 'nullable',
            'pps' => 'required',
            'bk' => 'required',
            'ja' => 'required',
            'mk' => 'required',
            'kmk' => 'required',
        ]);
        //Dekripsi
        $attr['desc'] = 'Dosen Tetap';
        
        $dosen = ProfileDosen::find($id);

        //SKPI
        if ($request->hasFile('skpi')){
            $skpi_req = request('skpi');
            $skpiName = time() . rand(100, 999) . "_" . $skpi_req->getClientOriginalName();
            $skpi_req->move(public_path() . '/file/skpi', $skpiName);
            $attr['skpi'] = $skpiName;
            
            $dosen->update($attr);
        }

        //SPP
        if ($request->hasFile('spp')){
            $spp_req = request('spp');
            $sppName = time() . rand(100, 999) . "_" . $spp_req->getClientOriginalName();
            $spp_req->move(public_path() . '/file/spp', $sppName);
            $attr['spp'] = $sppName;

            $dosen->update($attr);
        }
        
        //SKPI dan SPP
        if ($request->hasFile(['skpi', 'spp'])){

            $skpi_req = request('skpi');
            $skpiName = time() . rand(100, 999) . "_" . $skpi_req->getClientOriginalName();
            $skpi_req->move(public_path() . '/file/skpi', $skpiName);
            $attr['skpi'] = $skpiName;

            $spp_req = request('spp');
            $sppName = time() . rand(100, 999) . "_" . $spp_req->getClientOriginalName();
            $spp_req->move(public_path() . '/file/spp', $sppName);
            $attr['spp'] = $sppName;

            $dosen->update($attr);
        }

        $dosen->update($attr);

        return back()->with('status', 'Data Updated!');
    }
    public function destroy($id)
    {
        $dosen = ProfileDosen::find($id);
        $dosen->delete();
        return back()->with('status', 'Data Deleted');
    }
}

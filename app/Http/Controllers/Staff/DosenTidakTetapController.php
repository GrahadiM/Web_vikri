<?php

namespace App\Http\Controllers\Staff;

use App\Http\Controllers\Controller;
use App\Models\ProfileDosen;
use App\Models\User;
use Illuminate\Http\Request;

class DosenTidakTetapController extends Controller
{
    public function index()
    {
        $dosens = ProfileDosen::all();
        // dd($dosens);
        return view('staff.dosenTidakTetap.index', compact('dosens'));
    }
    public function create()
    {
        $users = User::where('role_id', '3')->get();
        return view('staff.dosenTidakTetap.create', compact('users'));
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
        $attr['desc'] = 'Dosen Tidak Tetap';
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
        return view('staff.dosenTidakTetap.show', compact('dosen'));
    }
    public function edit($id)
    {
        $users = User::all();
        $dosen = ProfileDosen::find($id);
        return view('staff.dosenTidakTetap.update', compact('dosen', 'users'));
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
        $attr['desc'] = 'Dosen Tidak Tetap';
        
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

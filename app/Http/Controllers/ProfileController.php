<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\File;

class ProfileController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $user = User::where('id', Auth::user()->id)->first();
        if (Auth::user()->role_id == 1) {
            return view('admin.profile.index', compact('user'));
        } elseif (Auth::user()->role_id == 2) {
            return view('staff.profile.index', compact('user'));
        } else {
            return view('dosen.profile.index', compact('user'));
        }
    }

    public function update(Request $request, $id)
    {
        // dd($request->all());
        $this->validate($request, [
            "name" => "required|string",
            "email" => "required|email|unique:users,id," . $id,
            "password" => "required",
            "gender" => "required",
            "nidn" => "required",
            "phone" => "required|numeric",
        ]);

    	$user = User::where('id', Auth::user()->id)->first();

        if ($request->hasFile("image")) {
            $file = $request->file("image");
            $filename = time() . "." . $file->getClientOriginalExtension();

            $file->move('img/profile', $filename);

            // File::delete('assets/image/profile' . $user->image);

            // Jika user mengganti passwornya password 
            if ($user->password != $request->password) {
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => Hash::make($request->password),
                    "image" => $filename,
                    "gender" => $request->gender,
                    "nidn" => $request->nidn,
                    "phone" => $request->phone,
                ]);
            } else {
                // Jika user tidak mengganti passwordnya
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => $request->password,
                    "image" => $filename,
                    "gender" => $request->gender,
                    "nidn" => $request->nidn,
                    "phone" => $request->phone,
                ]);
            }
        } else {
            // Jika user tidak mengubah foto
            // Jika user mengganti passwornya password 
            if ($user->password != $request->password) {
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => Hash::make($request->password),
                    "gender" => $request->gender,
                    "nidn" => $request->nidn,
                    "phone" => $request->phone,
                ]);
            } else {
                // Jika user tidak mengganti passwordnya
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "password" => $request->password,
                    "gender" => $request->gender,
                    "nidn" => $request->nidn,
                    "phone" => $request->phone,
                ]);
            }
        }
    	
    	return redirect('profile')->with('status', 'Profile updated!');
    }
}

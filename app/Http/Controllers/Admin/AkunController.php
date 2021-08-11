<?php

namespace App\Http\Controllers\Admin;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;

class AkunController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.akun.index', compact('users'));
    }

    public function create()
    {
        return view('admin.akun.create');
    }

    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required', 'string', 'max:255',
            'email' => 'required', 'string', 'email', 'max:255', 'unique:users',
            'username' => 'required', 'string', 'max:255', 'unique:users',
            'nidn' => 'required', 'numeric', 'unique:users',
            'birthday' => 'required',
            'gender' => 'required',
            'role_id' => 'required',
            'password' => 'required', 'string', 'min:8', 'confirmed',
        ]);
     
        User::create([
            'name' => $request->name,
            'email' => $request->email,
            'username' => $request->username,
            'nidn' => $request->nidn,
            'birthday' => $request->birthday,
            'gender' => $request->gender,
            'role_id' => $request->role_id,
            'status_id' => 1,
            'image' => 'user.png',
            'desc' => 'Dosen Tidak Tetap',
            'password' => Hash::make($request->password),
        ]);

        return redirect()->back()->with('status', 'User created!');
    }

    public function show(User $user)
    {
        //
    }

    public function edit(User $user, $id)
    {
        $user = User::find($id);
        return view('admin.akun.update', compact('user'));
    }

    public function update(Request $request, User $user, $id)
    {
        $this->validate($request, [
            "name" => "required|string",
            "email" => "required|email|unique:users,id," . $id,
            "username" => "required|unique:users,id," . $id,
            "password" => "required",
            // "gender" => "required",
            // "nidn" => "required",
            // "phone" => "required|numeric",
        ]);

        $user = User::find($id);

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
                    "username" => $request->username,
                    "password" => Hash::make($request->password),
                    "image" => $filename,
                    "gender" => $request->gender,
                    "nidn" => $request->nidn,
                    "phone" => $request->phone,
                    "desc" => $request->desc,
                ]);
            } else {
                // Jika user tidak mengganti passwordnya
                $user->update([
                    "name" => $request->name,
                    "email" => $request->email,
                    "username" => $request->username,
                    "password" => $request->password,
                    "image" => $filename,
                    "gender" => $request->gender,
                    "nidn" => $request->nidn,
                    "phone" => $request->phone,
                    "desc" => $request->desc,
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

        return redirect()->back()->with('status', 'User updated!');
    }

    public function destroy(User $user, $id)
    {
        $user = User::find($id);
        $user->delete();
        return redirect('akun')->with('status', 'User deleted!');
    }
}

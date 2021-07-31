<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        if (auth()->user()->status_id == 1) {
            if (auth()->user()->role_id == 1) {
                return view('admin.home');
            }
            if (auth()->user()->role_id == 2) {
                return view('staff.home');
            }
            if (auth()->user()->role_id == 3) {
                return view('dosen.home');
            }
        }
        if (auth()->user()->status_id == 2) {
            return view('home');
        }
        return view('home');
    }
}

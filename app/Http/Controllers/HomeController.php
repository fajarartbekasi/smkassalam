<?php

namespace App\Http\Controllers;

use App\Siswa;
use App\Wsiswa;
use App\Pembayaran;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::check()){
        $user = auth()->user()->id;
        }

        $pembayaran = Siswa::orderBy('user_id', $user)->paginate(5);

        $totalUser = Siswa::all()->count();
        return view('home', compact('pembayaran', 'totalUser'));
    }
}

<?php

namespace App\Http\Controllers;

use App\Kid;
use App\User;
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
        $user = User::all();
        $user->load('kids');
        $kids = Kid::where('code','bc13a')->get();
        return view('home',compact('kids','user'));
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {

        return redirect('home');
    }

}

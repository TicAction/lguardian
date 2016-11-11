<?php

namespace App\Http\Controllers;

use App\Behavior;
use App\File;
use App\FormHomework;
use App\Homework;
use App\Kid;
use App\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Psy\Test\CodeCleaner\CallTimePassByReferencePassTest;

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
        $guardians = User::where('id','=',Auth::guard()->user()->id)->get();
        $guardians->load('kids');
        $files = File::all();
        $fHomeworks = FormHomework::orderBy('start','desc')->paginate(4);
        $behaviors = Behavior::all();

        return view('home',compact('fHomeworks','guardians','behaviors','files'));
    }

    public function create()
    {
        return view('create');
    }
    public function store(Request $request)
    {
        return redirect('home');
    }

    public function behavior()
    {
        $behaviors = Behavior::all();

            return view('home',compact('behaviors'));
    }



}

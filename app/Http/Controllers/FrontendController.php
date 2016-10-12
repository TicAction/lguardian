<?php

namespace App\Http\Controllers;

use App\Behavior;
use App\FormHomework;
use App\Kid;
use App\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use Illuminate\Support\Facades\Auth;

class FrontendController extends Controller
{

    public function code(Request $request)
    {
        $guardian = Auth::guard()->user()->id;

        $user = new User();
        $user->load('kids');
        $code = $request->get('code');
        $kids = Kid::where('code','=',$code)->get();
           foreach($kids as $kid)
           {
               $user->kids()->attach($kid->id,['user_id'=>$guardian]);
           }
        return redirect('guardian/home');
    }

    public function getBehavior($id)
    {
        $behavior = Behavior::findOrFail($id);

        return view('frontend.behavior',compact('behavior'));
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $fHomework = FormHomework::all();
        $guardians= User::where('id', '=' , Auth::guard()->user()->id)->get();

        return view('frontend.index',compact('fHomework','guardians'));
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
        $fHomework =FormHomework::findOrFail($id);
        return view('frontend.show',compact('fHomework'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
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
        //
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

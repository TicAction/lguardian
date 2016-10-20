<?php

namespace App\Http\Controllers;

use App\Behavior;
use Illuminate\Http\Request;

use App\Http\Requests;

class BehaviorController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    public function show($id)
    {
        $behavior = Behavior::where('kid_id', '=', $id)->get();

        return view('behaviors.show', compact('behavior'));
    }


}

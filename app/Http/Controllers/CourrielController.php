<?php

namespace App\Http\Controllers;

use App\Courriel;
use App\Mail\Comment;
use Carbon\Carbon;
use Illuminate\Http\Request;

use App\Http\Requests;

use Illuminate\Support\Facades\Mail;

class CourrielController extends Controller
{
    /**
     * @return string
     */
    public function index()
    {


        return redirect("frontend.index");
    }

    /**
     * @return mixed
     */
    public function create()
    {
        $courriel = new Courriel();

        return view('courriels.create',compact('courriel'));
    }

    /**
     * @param Request $request
     * @return mixed
     */
    public function store(Request $request)
    {
          
       $email = Courriel::create($request->all());

        Mail::to("ghischa@gmail.com")->send(new Comment($email));
        return redirect('guardian/courriel');
    }
}

<?php

namespace App\Mail;
use App\Kid;
use App\User;
use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Support\Facades\Auth;

class Courriel extends Mailable
{
    use Queueable, SerializesModels;


    /**
     * Create a new message instance.
     *
     * @return void
     */
    public function __construct()
    {



    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {

        $user = User::where('id',Auth::guard()->user()->id)->first();
        $user->load('kids');

        foreach ($user->kids as $kid):

             $student = $kid->fullname;
            endforeach;

        return $this->view('courriels.welcome')
                    ->with([
                        'user'=>$user->name, 'student'=>$student,
                    ]

                    );
    }
}

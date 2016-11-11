<?php

namespace app\Http\ViewComposers;
use App\Kid;
use App\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class KidComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
            $view->with( 'guardians', User::where('id', '=' , Auth::guard()->user()->id)->get());
    }
}
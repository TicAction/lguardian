<?php

namespace app\Http\ViewComposers;

use App\File;
use Illuminate\Support\Facades\Auth;
use Illuminate\View\View;


class FileComposer
{
    /**
     * Bind data to the view.
     *
     * @param  View $view
     * @return void
     */
    public function compose(View $view)
    {
        $files = File::all();
            $view->with('files',$files);
    }
}
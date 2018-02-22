<?php

namespace App\Http\Composers;
use Illuminate\Contracts\View\View;
use Illuminate\Support\Facades\DB;
use App\Models\User;
use Auth;

class ComposerProfileData{
    public function compose(View $view){
        $profile = User::where( 'id', Auth::guard('web')->user()->id )->first();
        $view->with([
            'profile'=>$profile,
            ]);
    }
}
<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function getProfile(Request $request)
    {

        //$profile = Profile::where('user_id', $request->route('user_id'))
        /*$profile = Profile::with('user')
        		->get();*/
/*        $profile = ProfileUser::where('user_id', $request->route('user_id'))
            ->with('user')
            ->with('profile')
            ->get();*/
        $profile =User::find($request->route('user_id'))->Profile->lists('name');
        return Response()
            ->json($profile);
    }

}
<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Profile;

class ProfileController extends Controller
{
    public function getProfile(Request $request)
    {

        //$profile = Profile::where('user_id', $request->route('user_id'))
        $profile = Profile::with('user')//, $request->route('user_id'))
        		->get();


        return Response()
            ->json($profile);
    }

}
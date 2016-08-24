<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\User;
use App\Models\Profile;

class UserController extends Controller
{
    public function getUser(Request $request)
    {
        //return User::findOrFail($id);
        $user = User::where('login', $request->route('login'))
            ->first();

        return Response()
            ->json($user);
    }

    public function getProfile(Request $request)
    {
        $profile = User::with('profile')//, $request->route('user_id'))
        		->get();


        return Response()
            ->json($profile);
    }

}

<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

use App\Http\Requests;
use App\Models\Profile;
use App\Models\Option;
use Illuminate\Support\Facades\DB;
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

        //$profile =User::find($request->route('user_id'))->Profile->lists('name');

       $profile =User::find($request->route('user_id'))->profile()->lists('profile_id');
        //$option=Profile::all()->first()->Option->lists('name'); //option()->get();

       $option = Option::whereHas('profile', function($query) use ($profile) {
            $query->whereIn('profile_id', $profile);
        })->get();

/*        $option = Option::select(DB::raw('Options.*'))
            ->join('Option_profile', 'option_profile.option_id', '=', 'options.id')
            ->whereIn('profile_id', 1)
            ->get();*/

        return Response()
            ->json($option);
    }

}
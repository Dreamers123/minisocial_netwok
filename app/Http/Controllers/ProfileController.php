<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use View;
use Illuminate\Http\Request;
use App\User;
use App\Profile;
class ProfileController extends Controller
{
    public function __construct()
    {
    }

    public function profile($username,Profile $profile)
    {
    	$user=User::whereUsername($username)->first();
        $profile=$user->profiles;
    	return view('user.profile', compact('user','profile'));

    }

    public function create()
   {
      return view('profile.create');
   }
    public function store(User $user)
    {
        Profile::create([

            'user_id' => Auth::user()->id,
            'imagee_link'=>request('imagee_link'),
            'city'=>request('city'),
            'details'=>request('details'),
            'nickname'=>request('nickname')

        ]);
        return back();
    }
    public function edit(Request $request,$id)
    {
        $profile=Profile::findOrFail($id);

        return view('profile.edit', compact('profile'));

        return back();
    }
    public function update(Request $request,Profile $profile,$id)
    {
        $profile=Profile::findOrFail($id);
        $profile->update($request->all());
        return redirect('/articles');
    }

}

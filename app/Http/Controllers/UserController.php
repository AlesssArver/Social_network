<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    public function index()
    {

        return view('profile.index', ['userAuth' => Auth::user()]);
    }

    public function show($id)
    {
        $user = User::findOrFail($id);
        return view('profile.show', compact('user'));
    }

    public function edit($id)
    {
        $user = Auth::user($id);

        return view('profile.settings', compact('user'));
    }

    public function update($id)
    {
        $user = Auth::user($id);

        $user->first_name = request('first_name');
        $user->last_name = request('last_name');
        $user->email = request('email');

        $user->save();

        return redirect()->back();
    }

    public function destroy($id)
    {
        Auth::user($id)->delete();

        return redirect('/');
    }


    public function getAddFriend(Request $request)
    {
        $user = User::findOrFail($request->get('id'));
        Auth::user()->friends()->attach($user->id);
        $user->friends()->attach(Auth::user()->id);

        return redirect()->back();
    }

    public function removeFriend(Request $request)
    {
        $user = User::findOrFail($request->get('id'))   ;
        Auth::user()->friends()->detach($user->id);
        $user->friends()->detach(Auth::user()->id);

        return redirect()->back();
    }

    public function getRemoveFriend($id)
    {
        $user = User::find($id);
        Auth::user()->removeFriend($user);
        return redirect()->back();
    }


}

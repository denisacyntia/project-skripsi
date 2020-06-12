<?php

namespace App\Http\Controllers\Customer;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Auth;

class ProfileController extends Controller
{
    //
    public function profile()
    {
        $user = Auth::user();
        return view('profile',compact('user'));
    }
    public function update(Request $request){
        /*$user = User::find(Auth::user()->id);

        if($user){
            $this->validate($request, [
                'name' => 'required|string|max:255',
                'fullname' => 'required|string|max:255',
                'image' => 'nullable|image|mimes:png,jpeg,jpg',
                'email' => 'required|string|email|max:255|unique:users',
                'password' => 'required|string|min:6',
                'gender' => 'required|string|max:255',
                'phone' => 'required|string|min:10|max:20'
            ]);

        }else{
            return redirect()->back();
        }*/
        $this->validate($request, [
            'name' => 'required|string|max:255',
            'fullname' => 'required|string|max:255',
            'image' => 'nullable|image|mimes:png,jpeg,jpg',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'phone' => 'required|string|min:10|max:20'
        ]);
        $user= User::find(Auth::user()->id);
        $filename = $user->image;
        if ($request->hasFile('image')) {
            $file = $request->file('image');
            $filename = time() . Str::slug($request->name) . '.' . $file->getClientOriginalExtension();
            $file->storeAs('public/user', $filename);
            File::delete(storage_path('app/public/user/' . $user->image));
        }

        $user->update([
            'name' => $request->name,
            'fullname' => $request->fullname,
            'image' => $filename,
            'email' => $request->email,
            'password' => $request->password,
            'phone'=> $request->phone
        ]);
        return redirect(url('/klien/profil'))->with(['success' => 'Profil Diperbaharui']);
    }
}

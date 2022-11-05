<?php

namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;


class RegisterController extends Controller
{
    public function index()
    {
        return view('register.index', [
            'title' => 'Register'
        ]);
    }

    public function store(Request $request) {

   $validatedData =$request->validate([
            'name' => 'required|min:3|max:255',
            'username' => 'required|min:3|max:255|unique:users',
            'email' => 'required|email:dns|unique:users,email',
//            'password' => 'required|min:8|max:255'
            'password' => 'min:8|required_with:password_confirm|same:password_confirm',
            'password_confirm' => 'min:8'
        ]);

//        return dd($request->all());

//      User::create([
//            'name' => $validatedData['name'],
//            'username' => $validatedData['username'],
//            'email' => $validatedData['email'],
//            'password' => Hash::make($validatedData['password'])
//        ]);

//       $validatedData['password'] = bcrypt($validatedData['password']);

        $validatedData ['password'] = Hash::make($validatedData['password']);

        User::create($validatedData);
//
        return redirect('/login')->with('success', 'Your account has been created');
    }

}

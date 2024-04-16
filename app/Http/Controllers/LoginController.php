<?php

namespace App\Http\Controllers;

use App\Http\Requests\UserRegisterRequest;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;


class LoginController extends Controller
{
    public function __construct()
    {
//        $this->middleware('auth')->only('login');
    }

    public function register()
    {
        return view('auth.register');
    }

    public function store(UserRegisterRequest $request)
    {
        $validated = $request->validated();
        $validated['password'] = bcrypt($validated['password']);
        $user = User::create($validated);

        return redirect('login')->with('success', 'User Has been Registered Successfully.');
    }

    public function showLoginForm()
    {
        // return Illuminate\Support\Facades\View::make('auth.login');

        return view('auth.login');
    }

    public function login(Request $request)
    {
        $validated = $this->validatedLoginRecord($request);
        // 1. email, password,
        // 2. auth user will get login ( session holds login record)

        if (Auth::attempt($validated)) {
            // Authentication passed...
            return redirect('home');
        } else {
            //
            return redirect()->back()->with('error', 'The provided credentials do not match our records');

//            return redirect()->back()->withErrors('The provided credentials do not match our records');
        }
    }

    private function validatedLoginRecord(Request $request)
    {
        return $request->validate([
            'email' => 'required|email',
            'password' => 'required'
        ]);


    }
    public function logout(Request $request){

        Auth::logout();
    //   check  auth user then logout ( delte session record)
        return redirect ('login');

    }

    public function home()
    {
        // $user = auth()->user();
        // if (!$user) {
        //     return redirect('login');
        // }
        return view('home');
    }
}

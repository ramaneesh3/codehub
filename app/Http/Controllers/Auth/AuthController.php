<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;

use App\Models\post;

use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AuthController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Registration & Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users, as well as the
    | authentication of existing users. By default, this controller uses
    | a simple trait to add these behaviors. Why don't you explore it?
    |
    */

    use AuthenticatesAndRegistersUsers, ThrottlesLogins;

    protected $redirectTo = '/';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }
    public function PostRegister(){
        $user = new User();
        $user->setAttribute('email',request()->get('email'));
        $user->setAttribute('password',bcrypt(request()->get('password')));
        $user->save();
        
        return back()->with('message','Your new user has been saved');
    }
    public function PostLogin(){
        if(auth()->attempt(request()->only('email','password')))
           // dd('Congratulation you have been logged in');
        //return redirect()->intended('layouts.users.hom');
           // dd('allok');
            $posts=Post::orderBy('created_at','desc')->get();
            return view('users.hom',compact('posts'));
            //return view('users.hom');
        
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|',
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => bcrypt($data['password']),
        ]);
    }
}

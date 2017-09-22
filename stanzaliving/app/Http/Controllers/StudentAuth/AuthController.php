<?php

namespace App\Http\Controllers\StudentAuth;

use App\Student;
use Validator;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Http\Request;

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

    /**
     * Where to redirect users after login / registration.
     *
     * @var string
     */
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

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            's_firstname' => 'required|max:255',
            's_email' => 'required|email|max:255|unique:users',
            's_password' => 'required|min:6|confirmed',
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
            's_firstname' => $data['s_firstname'],
            's_email' => $data['s_email'],
            's_password' => bcrypt($data['s_password']),
        ]);
    }
	
	

 public function studentLogin()
    {
        return view('pages.front.index');
    }

    public function studentLoginPost(Request $request)
    {
        $this->validate($request, [
            's_email' => 'required|email',
            's_password' => 'required',
        ]);		
echo "============>".$request->input('s_password');die;
      if(\Auth::guard('student')->attempt(['s_email' => $request->input('s_email'), 's_password' => $request->input('s_password')])){
		
			//echo "============>".$request->input('s_password');die;
           // $user = \Auth::guard('student')->user();
            dd($user);
        }else{
			echo "============>";die;
            return back()->with('error','your username and password are wrong.');
        }
		
		
    }
	
	
	
}








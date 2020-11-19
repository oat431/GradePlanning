<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use Illuminate\Foundation\Auth\AuthenticatesUsers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
class LoginController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Login Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles authenticating users for the application and
    | redirecting them to your home screen. The controller uses a trait
    | to conveniently provide its functionality to your applications.
    |
    */

    use AuthenticatesUsers;

    /**
     * Where to redirect users after login.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest')->except('logout');
    }

    public function login(Request $request){
        $this->validate($request,[
            'studentName' => 'required',
            'studentID' => 'required'
        ]);
        $temp = $request->get('studentName');
        $email = explode(" ",$temp)[0];
        $user_data = array(
            'email' => $email."@".$email,
            'password' => $request->get('studentID')
        ); 

        if(Auth::attempt($user_data)){
            return redirect('/student/'.Auth::user()->student_id);
        }else{
            $msg = "something wrong with studentID or studentName";
            return view('auth.login',compact(['msg']));
        }

    }
}

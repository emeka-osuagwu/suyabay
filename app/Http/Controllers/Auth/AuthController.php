<?php

namespace app\Http\Controllers\Auth;


use Auth;
use App\User;
use Validator;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\RegisterRequest;
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

    protected $loginPath = '/login';
    protected $registerPath = '/register';

    /**
     * Create a new authentication controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest', ['except' => 'getLogout']);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param array $data
     *
     * @return User
     */
    protected function create(array $data)
    {
        return User::create([
            'email'         => $data['email'],
            'username'     => $data['username'],
            'password'     => bcrypt($data['password'])
        ]);
    }

    /**
     * Register a new user instance.
     *
     * @param Request $request
     *
     * @return home
     */
    public function Register()
    {
        return view('app.pages.signup');
    }

    public function postRegister(Request $request)
    {
        $email      = $request->email; 
        $username   = $request->username;

        $checkUserExists    = User::where('username', '=', $username)->get();
        $checkEmailExists   = User::where('email', '=', $email)->get();
        

        if ( $checkEmailExists->count() == true OR $checkUserExists->count() == true ) 
        {
            return $response = 
            [
                "message"       => "registration failed",
                "status_code"   => 401,
                "info" => 
                [
                    "email"     => $email,  
                    "username"  => $username
                ]
            ];
        }
        else
        {
            $this->create($request->all());
        }
    }




    /**
     * Login a exisitng instance of user.
     *
     * @param Request $request
     *
     * @return home
     */
    public function login()
    {
        return view('app.pages.signin');
    }


   /**
     * Login a exisitng instance of user.
     *
     * @param Request $request
     *
     * @return home
     */
    public function postLogin(Request $request)
    {
        $status = Auth::attempt($request->only(['username', 'password']));        
        if ( $status === false ) 
        {
            return $response = 
            [
                "message"       => "login failed",
                "status_code"   => 401,
            ];
        }
        else
        {
            return $response = 
            [
                "message"       => "login success",
                "status_code"   => 200,
            ];
        }
    }

    /**
     * Logout current user.
     *
     * @param Request $request
     *
     * @return home
     */
    public function getLogout()
    {
        Auth::logout();
        return redirect('/');
    }
}

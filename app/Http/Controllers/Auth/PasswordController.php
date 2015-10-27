<?php

namespace Suyabay\Http\Controllers\Auth;

use Suyabay\User;
use Suyabay\Password_reset;
use Illuminate\Mail\Message;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Suyabay\Http\Controllers\Controller;
use Illuminate\Support\Facades\Password;
use Illuminate\Foundation\Auth\ResetsPasswords;

class PasswordController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Password Reset Controller
    |--------------------------------------------------------------------------
    |
    | This controller is responsible for handling password reset requests
    | and uses a simple trait to include this behavior. You're free to
    | explore this trait and override any methods you wish to tweak.
    |
    */
    use ResetsPasswords;

    protected $redirectTo = '/login';

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }
    public function getEmailPage()
    {
        return view('app.pages.passwordreset');
    }

    /**
     * Load a password reset page.
     */
    public function passwordPage()
    {
        return view('app.pages.passwordreset');
    }

    public function postEmailForm(Request $request)
    {
        $this->validate($request, ['email' => 'required|email']);
        $response = [];

        //check if email exist (ajax call)
        $status = User::whereEmail($request->only('email'))->first();
        if ( $status == false )
        {
            return $response =
            [
                "message"       => "Invalid",
                "status_code"   => 401,
            ];
        }
        else
        {
            $response = Password::sendResetLink($request->only('email'), function (Message $message) {
                $message->subject($this->getEmailSubject());
            });

            switch ($response) {
                case Password::RESET_LINK_SENT:
                    return redirect()->back()->with('status', trans($response));

                case Password::INVALID_USER:
                    return redirect()->back()->withErrors(['email' => trans($response)]);
            }
        }
        dd($response);
    }

    public function getResetPage($token = null)
    {
        if (is_null($token)) {
            throw new NotFoundHttpException;
        }

        return view('app.pages.newpassword')->with('token', $token);
    }
    public function postResetCheckEmail(Request $request)
    {
        $status = Password_reset::whereEmail($request->only('email'))->first();
        if(is_null($status))
        {
            return 401;
        }
        else
        {
            // return $request->only('token');
        //     $credentials = $request->only(
        //         'email', 'password', 'password_confirmation', '_token'
        //     );
        //     dd($credentials);
        //     $response = Password::reset($credentials, function ($user, $password) {
        //         $this->resetPassword($user, $password);
        //     });
            // dd($response);
            // $response = Password::reset($credentials, function ($user, $password) {
            //     $this->resetPassword($user, $password);
            // });
        }
    }
}

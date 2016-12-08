<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\User;
use DB;
use Auth;
use Illuminate\Support\Facades\Mail;
use Illuminate\Foundation\Auth\ResetsPasswords;
use Illuminate\Http\Request;
use Carbon\Carbon;

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

    /**
     * Create a new password controller instance.
     *
     * @return void
     */
    public function __construct(){
        $this->middleware('guest');
    }

    public function sendResetLinkEmail(Request $request){
        $this->validate($request, [
            'username' => 'required',
        ]);

        $user = User::where('username', $request->input('username'))->first();
        if(!is_null($user)){
            list($email, $token) = $this->findOrCreateUser($user);
            $this->sendResetMail($email, $token);
            return redirect()->back()->with('status', 'We have e-mailed your password reset link!');
        } else {
            return redirect()->back()->with('warning', '<strong>'.$request->input('username') . '</strong> Not Found');
        }
    }

    protected function sendResetMail($email, $token){
        Mail::queue('auth.emails.password',
            ['token' => $token, 'email' => $email],
            function($message) use($email, $token) {
                $message->to($email, $token)
                    ->subject('Your Password Reset Link');
        });
    }

    protected function findOrCreateUser($user){
        DB::table('password_resets')->where('email',  $user->email)->delete();
        $token = (new AuthController())->getToken();
        DB::table('password_resets')->insert(
            [
                'email' => $user->email,
                'token' => $token,
                'created_at' => new Carbon
            ]
        );
        return array($user->email, $token);
    }

    /**
     * Get the response for after a successful password reset.
     *
     * @param  string  $response
     * @return \Symfony\Component\HttpFoundation\Response
     */
    protected function getResetSuccessResponse($response){
        Auth::logout();
        return redirect('/login')->with('status', trans($response));
    }
}

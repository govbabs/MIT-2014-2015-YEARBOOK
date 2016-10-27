<?php

namespace App\Http\Controllers\Auth;

use App\User;
use Validator;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;

class AuthController extends Controller{
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
    public function __construct(){
        $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data){
        $niceNames = array(
            'first_name' => 'First Name',
            'last_name' => 'Last Name',
            'email' => 'Email',
            'password' => 'Password',
            'username' => 'Username',
            'agreement' => 'Agreement'
        );

        $validator = Validator::make($data, [
            'username' => 'required|max:255|unique:mit_users',
            'first_name' => 'required|max:255',
            'last_name' => 'required|max:255',
            'email' => 'required|email|max:255|unique:mit_users',
            'password' => 'required|min:6|confirmed',
            'agreement' => 'required',
        ]);

        $validator->setAttributeNames($niceNames);

        return $validator;
    }

    /**
     * Handle a registration request for the application.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function register(Request $request)
    {
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $token = $this->getToken();
        $this->create($request->all(), $token);
        Mail::send('email.verify',
            array('body' => $this->getConfirmationMail($token)),
            function($message) use ($request) {
                $message->to($request->input('email'), $request->input('username'))
                ->subject('Verify your email address');
        });

        return redirect()->back()->with('status', 'We sent you an activation code. Check your email.');
    }

    /**
     * Create a new user instance after a valid registration.
     * @param  array  $data
     * @param   $token
     * @return User
     */
    protected function create(array $data, $token){
        return User::create([
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'username'      => $data['username'],
            'email'         => $data['email'],
            'token'         => $token,
            'role'          => 'user',
            'password'      => bcrypt($data['password']),
        ]);
    }

    /**
     * Generate Confirmation token
     * @return string
     *
     */
    private function getToken(){
        return hash_hmac('sha256', str_random(40), config('app.key'));
    }

    /**
     * get Confirmation Mail text
     * @param $token
     * @return string
     */
    private function getConfirmationMail($token){
        return "<h2 align='center'>Verify Your Email Address</h2>
        <div>
            Thanks for creating an account with the MIT E-year Book.
            Please follow the link below to verify your email address
            " . url('register/verify/'. $token) . ".
        </div>";
    }
}

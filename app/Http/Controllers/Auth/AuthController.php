<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\UserProfile;
use Validator;
use Auth;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;
use Illuminate\Support\Facades\Mail;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;

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
    public function register(Request $request){
        $validator = $this->validator($request->all());

        if ($validator->fails()) {
            $this->throwValidationException(
                $request, $validator
            );
        }

        $registeredUser = $this->create($request->all());
        $this->saveProfileAssociate($registeredUser);
        $this->sendActivationMail($registeredUser);
        return redirect()->back()->with('status', 'We sent you an activation code. Check your email.');
    }

    public function saveProfileAssociate($registeredUser){
        $userProfile = new UserProfile;
        $userProfile->user()->associate($registeredUser);
        $userProfile->save();
    }
    public function validateToken($token){
        $user = User::where('token', $token)->first();
        if(is_null($user)){
            return redirect('/login')->with('warning', 'Unable to validate user');
        } else {
            $user->activated = true;
            $user->token = '';
            $user->save();
            return redirect('/login')->with('status', 'Email Verified');
        }
    }

    /**
     * @param Request $request
     * @return \Illuminate\Http\RedirectResponse|\Illuminate\Routing\Redirector
     */
    public function postLogin(Request $request){
        $this->validate($request, [
            'username' => 'required',
            'password' => 'required'
        ]);

        if (Auth::guard()->attempt([
            'username' => $request->input('username'),
            'password' => $request->input('password')])) {

            return $this->authenticated($request, Auth::user());
        } else {
            return back()->with('error','Invalid login credentials!!');
        }

        return "error";
    }

    public function authenticated(Request $request, $user){
        if (!$user->activated) {
            $this->sendActivationMail($user);
            Auth::logout();
            return back()->with('warning',
                'You need to confirm your account. We have sent you an activation code, please check your email.');
        } else if(!$user->active) {
            Auth::logout();
            return back()->with('warning',
                'Administrator need to approve your account.Please check back.Thanks.');
        }
        return redirect()->intended('/');
    }

    protected function sendActivationMail($registeredUser){
        $token = $this->getToken();
        //update activation code for user
        $registeredUser->token = $token;
        $registeredUser->save();

        Mail::queue('email.verify',
            ['body' => $this->getConfirmationMail($token)],
            function($message) use($registeredUser) {
                $message->to($registeredUser->email, $registeredUser->username)
                    ->subject('Verify your email address');
            });
    }
    /**
     * Create a new user instance after a valid registration.
     * @param  array  $data
     * @param   $token
     * @return User
     */
    protected function create(array $data){
        return User::create([
            'first_name'    => $data['first_name'],
            'last_name'     => $data['last_name'],
            'username'      => $data['username'],
            'email'         => $data['email'],
            'matricNo'      => $data['matricnum'],
            'role'          => 'user',
            'password'      => bcrypt($data['password']),
        ]);
    }

    /**
     * Generate Confirmation token
     * @return string
     *
     */
    public function getToken(){
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
            Thanks for creating an account with MIT E-year Book.
            Please follow the link below to verify your email address
            " . url('register/verify/'. $token) . ".
        </div>";
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\UserCounters;

class YearController extends Controller{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct(){

    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index(){
        $users = User::where('active', true)->paginate(12);
        return view('yearbook.index')->withUsers($users);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($username){
        $requestedUser= User::where('username', $username)->first();
        $randomUsers = User::where('username', '!=', $username)->where('active', true)->inRandomOrder(3)->get();
        $this->view($requestedUser->user_id);
        return view('yearbook.show')
            ->with('requestedUser', $requestedUser)->with('randomUsers', $randomUsers);
    }

    /**
     * Is object already viewed by user?
     *
     * @return Boolean
     */
    protected function isViewed($id){
        if(!Auth::check()) {
            $viewed = \Session::get($this->get_view_key($id));
            if(!empty($viewed))
                return true;
        } else {
            $userAction = UserCounters::where('action', 'view')->where('class_name', snake_case(get_class($this)))
                            ->where('object_id', $id)->where('user_id', Auth::user()->user_id)->count();
            if($userAction > 0)
                return true;
        }
        return false;
    }

    /**
     * get session storage key for view
     *
     * @return String
     */
    private function get_view_key($id){
        return 'viewed_' . snake_case(get_class($this)).'_' . $id;
    }

    private function view($id){
        if(!$this->isViewed($id)){
            if(Auth::check()) {
                UserCounters::create([
                    'class_name' => snake_case(get_class($this)),
                    'object_id' => $id,
                    'user_id' => Auth::user()->user_id,
                    'action' => 'view'
                ]);
                User::where('user_id', $id)->increment('view_counter');
                return true;
            } else {
                \Session::put($this->get_view_key($id), time());
                User::where('user_id', $id)->increment('view_counter');
                return true;
            }
        }
        return false;
    }
}

<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;
use App\Http\Requests;

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
        $randomUsers = User::where('username', '!=', $username)->inRandomOrder(3)->get();
        return view('yearbook.show')
            ->with('requestedUser', $requestedUser)->with('randomUsers', $randomUsers);
    }

    protected function isViewed(){

    }

    /**
     * get session storage key for view
     *
     * @return String
     */
    private function get_view_key(){
        return 'viewed_' . snake_case(get_class($this)).'_' . $this->id;
    }

    public function view(){
        if(!$this->isViewed()){
            if(Auth::check()) {
                $this->user_counters()->create(array(
                    'class_name' => snake_case(get_class($this)),
                    'object_id' => $this->id,
                    'user_id' => \Auth::user()->id,
                    'action' => 'view'
                ));
                $this->counter()->increment('view_counter');

                return true;
            } else {
                \Session::put($this->get_view_key(), time());
                $this->counter()->increment('view_counter');

                return true;
            }
        }
        return false;
    }
}

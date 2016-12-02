<?php

namespace App\Console\Commands;

use App\User;
use Illuminate\Console\Command;
use App\UserProfile;

class HappyBirthday extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'mail:birthday';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Sends a Happy birthday message to users via mail';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle(){
        $listOfMails = array();
        /**
         * Get all the user email
         */
        $allUser = User::get();
        foreach($allUser as $user){
            array_push($listOfMails, $user->email);
        }

        /**
         * get all the user whose birthday is today
         */
        $profiles = UserProfile::where('date_of_birth', date('m/d'))->get();
        foreach($profiles as $profile ) {
            Mail::send('email.birthday', [], function($message) use ($listOfMails)
            {
                $message->to($listOfMails)->subject('This is test e-mail');
            });
            /*if($user->has('cellphone')) {
                SMS::to($user->cellphone)
                    ->msg('Dear ' . $user->fname . ', I wish you a happy birthday!')
                    ->send();
            }*/
        }
    }
}

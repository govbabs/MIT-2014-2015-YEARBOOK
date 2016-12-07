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
        $listofCelebrantsMails = array();
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
            array_push($listofCelebrantsMails, $profile->user->email);
            Mail::send('email.birthday',
                ['body' =>
                    $this->prepareClassMessage($profile->user->last_name,
                        $profile->user->first_name, $profile->user->email, $profile->user->phone_no)],
                function($message) use ($listOfMails) {
                    $message->to($listOfMails)->subject('Happy Birthday Wishes');
            });
        }
    }

    private function prepareClassMessage($lastname, $firstname, $email, $phone){
        $msg = "Class!! It's {$firstname} {$lastname}'s birthday, Please reach out to him on {$email}";
        if(isset($phone))
            $msg .= " / ". $phone;

        $msg .= " and send your wishes";

        return $msg;
    }
}

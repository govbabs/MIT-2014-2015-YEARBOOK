<?php

namespace App\Console\Commands;

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
        $profiles = UserProfile::where('date_of_birth', date('m/d'))->get();

        foreach($profiles as $profile ) {
            echo $profile->user->email;
            /*if($user->has('cellphone')) {
                SMS::to($user->cellphone)
                    ->msg('Dear ' . $user->fname . ', I wish you a happy birthday!')
                    ->send();
            }*/
        }
    }
}

<?php
/**
 * Created by PhpStorm.
 * User: Raphson
 * Date: 10/31/16
 * Time: 12:33
 */
namespace App;

use Illuminate\Database\Eloquent\Model;

class UserProfile extends Model{

    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'profile_id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mit_users_profile';
}

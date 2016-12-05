<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class UserCounters extends Model{
    /**
     * The primary key for the model.
     *
     * @var string
     */
    protected $primaryKey = 'id';

    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'mit_profile_view_counter';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'class_name', 'object_id', 'user_id', 'action'
    ];
}

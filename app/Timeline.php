<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;

class Timeline extends Model
{
    protected $table = 'mit_timeline';
    protected $fillable =['header','thumbnail','description'];

    public function postBy()
    {
        return $this->belongsTo('App\User', 'post_by');
    }
}

<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Avatar extends Model
{
	 protected $fillable = [
        'nickname', 'description', 'optradio', 'profilePicture',
    ];


    public function user()
    {
    	return $this->hasOne('App\User');
    }
}
 
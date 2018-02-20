<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class SocialFacebookAccount extends Model
{
    protected $table = "facebook_login";
    protected $fillable = ['user_id', 'provider_user_id', 'provider'];
 
    public function user()
    {
        return $this->belongsTo(\App\Models\Member::class);
    }
}

<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;
	
	class Reply extends Model
	{
	    use SoftDeletes;
	    protected $dates = ['deleted_at'];
	    protected $table = 'reply';

	    public function getUser(){
			return $this->hasOne('App\User','id','user_id');
		}
	}
?>
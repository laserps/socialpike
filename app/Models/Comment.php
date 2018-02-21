<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;
	
	class Comment extends Model
	{
	    use SoftDeletes;
	    protected $dates = ['deleted_at'];
	    protected $table = 'comment';

	    public function getUser(){
	    	return $this->hasOne('App\User','id','member_id');
	    }

	    public function getReply(){
	    	return $this->hasMany('App\Models\Reply','comment_id','id');
	    }
	}
?>
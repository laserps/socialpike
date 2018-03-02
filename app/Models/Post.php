<?php

	namespace App\Models;

	use Illuminate\Database\Eloquent\Model;
	use Illuminate\Database\Eloquent\SoftDeletes;
	
	class Post extends Model
	{
	    use SoftDeletes;
	    protected $dates = ['deleted_at'];
	    protected $table = 'post';
		
		public function getComment(){
			return $this->hasMany('App\Models\Comment','post_id','id');
		}

		public function getUser(){
			return $this->hasOne('App\User','id','posted_by');
		}

		public function getShare(){
			return $this->hasOne('App\Models\Post','id','post_share_id');
		}
	}


?>
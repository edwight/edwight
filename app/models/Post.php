<?php

class Post extends Eloquent {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	

	protected $table = 'posts';

    public function user()
    {
        return $this->belongsTo('User');
    }
    public function tags()
    {
        return $this->belongsToMany('Tag');
    }
    public function categories()
    {
        return $this->hasMany('Category');
    }
     public function img()
    {
        return $this->hasOne('Img');
    }
}

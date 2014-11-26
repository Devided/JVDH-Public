<?php

class Subscription extends \Eloquent {
	protected $fillable = [];

    public function user(){
        $this->belongsTo('User');
    }
}
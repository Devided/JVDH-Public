<?php

class Subscription extends \Eloquent {
	protected $fillable = [];

    public function user(){
        return $this->belongsTo('User');
    }

    public function part() {
        return $this->belongsTo('Part');
    }
}
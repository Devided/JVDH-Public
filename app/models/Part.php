<?php

class Part extends \Eloquent {
	protected $fillable = [];

    public function subscriptions(){
        return $this->hasMany('Subscription');
    }
}
<?php

class Address extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'phone' => 'required',
		'city' => 'required'
	);
}
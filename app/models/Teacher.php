<?php

class Teacher extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'phone_number' => 'required',
		'email' => 'required'
	);
}
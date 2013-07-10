<?php

class Driver extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'phone2' => 'required',
		'last_name' => 'required',
		'wheelchairs' => 'required'
	);
}
<?php

class School extends Eloquent {
    protected $guarded = array();

    public static $rules = array(
		'office_number' => 'required',
		'session_times' => 'required'
	);
}
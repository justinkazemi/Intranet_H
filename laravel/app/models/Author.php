<?php

class Author extends Eloquent {

	protected $fillable = array('name','bio');

	public static $rules = array(		//validation
			'name'=>'required|min:2',
			'bio'=>'required|min:10'
		);

	public static function validate($data){				//validation
		return Validator::make($data, static::$rules);
	}
}
?>
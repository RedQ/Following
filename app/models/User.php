<?php

use Zizaco\Confide\ConfideUser;

class User extends ConfideUser {
	protected $guarded = array();

	public static $rules = array();
}

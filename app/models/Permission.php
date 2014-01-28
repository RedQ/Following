<?php

use Zizaco\Entrust\EntrustPermission;

class Permission extends EntrustPermission {
	protected $guarded = array();

	public static $rules = array();
}

<?php defined('SYSPATH') OR die('No direct access allowed.');

return array(

	'driver'       => 'File',
	'hash_method'  => 'sha256',
	'hash_key'     => '2, 4, 6, 7, 9, 15, 20, 23, 25, 30',
	'lifetime'     => 1209600,
	'session_type' => Session::$default,
	'session_key'  => 'auth_user',

	// Username/password combinations for the Auth File driver
	'users' => array(
		 'admin' => 'dfd4f98425efa44d92fd6b5098b06d8489763f4939c2860b61269cb9ec448509',
	),

);

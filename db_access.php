<?php
define('HOST', '');
define('USERNAME', '');
define('PASSWORD', '');
define('DATABASE', '');
if (!local()) {
	define('HOST', '');
	define('USERNAME', '');
	define('PASSWORD', '');
	define('DATABASE', '');
}
define('CHECK', '');
define('SALT', '');
define('TEMP_TOKEN_NAME', '');
define('TEMP_TOKEN', '');

function headers() {
	$headers = [
	];
	foreach ($headers as $h) {
		header($h);
	}
}

function password_encrypt($password) {
	return $password;
}
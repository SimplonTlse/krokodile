<?php


function db(){
	ORM::configure('mysql:host=localhost;dbname=fake');
	ORM::configure('username', 'root');
	ORM::configure('password', 'root');
	ORM::configure('return_result_sets', true);
	ORM::configure('error_mode', PDO::ERRMODE_WARNING);
}

function assets(){
	return 'http://local.dev/krokodile/public/';
}


function d($var){
	echo '<pre>';
	var_dump($var);
	echo '</pre>';
}

function dd($var){
	d($var);
	die();
}
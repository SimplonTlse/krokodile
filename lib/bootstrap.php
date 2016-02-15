<?php
require BASE . 'vendor/autoload.php';
require 'functions.php';
require 'classes/models/Counter.php';
require 'classes/Bidule.php';
require 'classes/Router.php';


db();
$r = new Router();
$r->get();

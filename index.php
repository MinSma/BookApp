<?php

require 'Database/Router.php';
require 'Database/Request.php';

Router::load('routes.php')
	->direct(Request::uri(), Request::method());
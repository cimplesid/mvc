<?php

function router($uri,$closure){

	$url = $_SERVER["REQUEST_URI"];
	preg_match('/\.php.*/', $url, $matches);

	//var_dump($matches);
	
	$uri = '.php'. ( $uri!='/'? '/'.$uri:'' );
	//var_dump($uri);
	if($matches[0] == trim($uri)) {
		call_user_func($closure);
	}
}

/*function notfound(){
	echo '404 Error!! Page Not Found';
}*/

router('/',
	function()
	{
		Route::get('WelcomeController@index');
	}
);


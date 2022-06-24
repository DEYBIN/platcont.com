<?php
//Front Controller
function controller($name){

	if( empty( $name ) ){
		$name = 'home';
	}

	$url = "./views/$name.php";

	if (file_exists($url)) {
		require $url;
	}else{
		require "./views/404.php";
	}

}

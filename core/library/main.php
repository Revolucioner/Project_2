<?php
	function show404page(){
		header("HTTP/1.1 404 Not Found");

		//todo заменить на viee
		echo '404 page';
	}
	function renderView($viewName){
		include 'core/views/'.$viewName.'.php';
	}
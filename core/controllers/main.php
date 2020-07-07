<?php
	function action_index(){
		echo "Index page";
	}
	function action_contacts(){
		echo 'Contact page';
	}
	function action_registration(){
		if ($_SERVER['REQUEST_METHOD'] == 'POST') {
			// todo обрадртать данные
		}
		renderView('registration');
	}
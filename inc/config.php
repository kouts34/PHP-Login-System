<?php 
	
	//If there is now constant defined called __CONFIG__, do not load this file
	if(!defined('__CONFIG__')) {
		exit('You dont have a config file'); 
	}


	//Config below

	//Include the DB.php file:
	include_once "classes/DB.php"

?> 
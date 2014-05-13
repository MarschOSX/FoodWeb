<?php

	include(dirname(__FILE__) . '/../Controller/SearchController.php');
	$SearchController = new SearchController;
	$checkvalid = false;
	
	if( array_key_exists('zipcode', $_GET) ) {

		if( strlen($_GET['zipcode']) != 5)
			$errorString .= 'Please provide your zipcode it the correct format.<br />';
			
		if( strlen($errorString) == 0 ) {  
			$showForm = false;
			$checkvalid = true;
		}
	}
	
	if($checkvalid == true){
		echo '<pre>';
		$tester = $SearchController->getNearbyBusinesses($_GET['zipcode'], $_GET['radiusofsearch']);
		
		var_dump($tester);
		echo '</pre>';
	}
?>
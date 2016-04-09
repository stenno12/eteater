<?php
	
	if(isset($_GET['lang'])){
		change_language($_GET['lang']);
	}
	else if(!isset($_COOKIE['lang'])){//if no language is selected set language as Estonian
		set_language('et');
	} else set_language($_COOKIE['lang']);
	
	//sets language and changes cookie accordingly
	function change_language($id){
		setcookie('lang', $id, time() + 30000000 );
		set_language($id);
	}
	
	//Sets language used
	function set_language($id){
		$lang_file = realpath(dirname(__FILE__))."\\lang_".$id.".php";
		if(is_file($lang_file) && file_exists($lang_file)){
			include_once($lang_file);
		}
		else include_once(realpath(dirname(__FILE__))."\\lang_et.php");
	}
?>
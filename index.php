<?php 
	include_once 'config.php'
	include_once SMARTY_DIR . 'smarty.class.php';
	

	$smarty = new Smarty();
	$smarty->display("index.tpl");
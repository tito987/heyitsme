<?php
include "admin.php";
class superadmin extends admin{
	function __construct($login,$mdp){
		parent::__construct($login,$mdp);
	}
}
?>
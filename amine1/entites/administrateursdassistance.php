<?php
include"admin.php";
class assisstant extends admin{
private $metier;
	function _construct($login,$mdp,$metier){
		parent::_construct($login,$mdp);
		$this->metier=$metier;
	}
	//gettersS
 function getmetier()
{
return $this->metier;}
//setters
function setmetier($metier)
{
$this->metier=$metier;}
}
?>
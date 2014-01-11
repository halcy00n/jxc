<?php
class mysql{
	private $host;
	private $name;
	private $passwd;
	
	function __construct($host,$name,$pass){
		$this->host=$host;
		$this->name=$name;
		$this->pass=$pass;
		
		$this->connect();
		}
	
	function connect(){
		mysql_connect($this->host,$this->name,$this->passwd) or die(mysql_error());
		
		}
	}
	
	$db = new mysql('localhost','root','1234');
?>
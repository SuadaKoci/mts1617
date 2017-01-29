<?php
/**
* 
*/
class Stive
{
	private $numbers;
	function __construct()
	{
		$this->numbers = array();
	}
	public function push($number){
		$this->numbers[] = $number;
	}
	public function top(){
		$index = count($this->numbers) - 1;
		return 1*$this->numbers[$index];
	}
	public function pop(){
		$index = count($this->numbers) - 1;
		unset($this->numbers[$index]);
	}
}
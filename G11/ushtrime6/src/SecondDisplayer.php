<?php

class SecondDisplayer implements Displayer {
    
    public function __construct()
	{
		$inst = new Instance();
		$instances = $inst->getInstances();
		$instances->SecondDisplayer ++;
		$inst->save($instances);	
	}
    public function display($array)
    {
        echo implode("----", $array);
    }
}
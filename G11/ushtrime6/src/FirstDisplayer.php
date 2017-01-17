<?php

class FirstDisplayer implements Displayer {
    
    public function __construct()
	{
		$inst = new Instance();
		$instances = $inst->getInstances();
		$instances->FirstDisplayer ++;
		$inst->save($instances);	
	}
    public function display($array)
    {
        foreach ($array as $row)
        {
            echo $row . "<br />\n";
        }
    }
    
}
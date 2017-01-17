<?php

class TextMovieFinder implements MovieFinder {
    
    public function __construct()
	{
		$inst = new Instance();
		$instances = $inst->getInstances();
		$instances->TextMovieFinder ++;
		$inst->save($instances);	
	}
    
    public function getMovies()
    {
        return file(__DIR__ . "/../data/movies.txt");
    }

    
}
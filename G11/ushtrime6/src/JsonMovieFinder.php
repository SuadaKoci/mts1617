<?php

class JsonMovieFinder implements MovieFinder {
	
	public function __construct()
	{
		$inst = new Instance();
		$instances = $inst->getInstances();
		$instances->JsonMovieFinder ++;
		$inst->save($instances);	
	}
    
    public function getMovies()
    {
        return json_decode(file_get_contents(__DIR__ . "/../data/movies.json"));
    }
}
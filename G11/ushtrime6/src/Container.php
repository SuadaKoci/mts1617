<?php

class Container {
    
    private $dependencies;
    
    public function __construct()
    {
        $this->dependencies = [];
    }
    
    public function addImpl($interface,$arrayClass)
    {
        $this->dependencies[$interface]=$arrayClass;
    }
    
    public function getInstance($class,$n)
    {
        
        $c = new ReflectionClass($class);
        
        $dep = [];
        $inst = new Instance();
        $instStatus = $inst->getInstances();

        foreach ($c->getConstructor()->getParameters() as $p)
        {
            $interfaceName = $p->getClass()->name;
            
            
            if (!isset($this->dependencies[$interfaceName]))
            {
                throw new Exception("The implementation for interface {$interfaceName} has not been defined.");
            }else{
                for ($i=0; $i < count($this->dependencies[$interfaceName]); $i++) { 
                    if (!class_exists($this->dependencies[$interfaceName][$i]))
                    {
                        throw new Exception("Class {$this->dependencies[$interfaceName][$i]} does not exist.");
                    }
                    else 
                    {
                        $hasInstanceActive = false;
                        if($instStatus->{$this->dependencies[$interfaceName][$i]} < $n){
                            $hasInstanceActive=true;
                            $dep[$interfaceName] = new $this->dependencies[$interfaceName][$i]();
                            break;
                        }
                    }
                }
            }

            if(!$hasInstanceActive){
               throw new Exception("Te gjithe implementuesit jane te zene per interface ".$interfaceName);
               return;
            }
        }

        $instance = $c->newInstanceArgs($dep);
    
        return $instance;
    }
    
}
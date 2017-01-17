<?php

require 'vendor/autoload.php';

$c = new Container();
$inst = new Instance();
$inst->start();

$c->addImpl("MovieFinder", array("TextMovieFinder","JsonMovieFinder"));

$c->addImpl("Displayer", array("FirstDisplayer","SecondDisplayer"));

$ml = $c->getInstance("MovieLister",3);

$ml->test();
$ml = $c->getInstance("MovieLister",3);

$ml->test();
$ml = $c->getInstance("MovieLister",3);

$ml->test();
$ml = $c->getInstance("MovieLister",3);

$ml->test();
$ml = $c->getInstance("MovieLister",3);

$ml->test();
$ml = $c->getInstance("MovieLister",3);

$ml->test();
<?php
require_once __DIR__.'/../../vendor/autoload.php';
Class Blog {
	protected $driver;
	protected $session;
	private $url;
	private $page;

	public function __construct($url)
    {
    	$key='97a81c8fa817857e72756fe56168d81f';
    	$secret = '3415ca5c1a7314bf727d66c1717e5dc2';
    	$testingBotApiUrl = 'http://{$key}:{$secret}@hub.testingbot.com/wd/hub';

		$this->driver = new \Behat\Mink\Driver\Selenium2Driver('chrome', array("platform"=>"WINDOWS","browserName"=>"chrome", "name"=>"BlogTest"), $testingBotApiUrl);
		$this->session = new \Behat\Mink\Session($this->driver);
		$this->session->start();
		$this->session->visit("http://www.kristasblog.com/");
        $this->url = "http://www.kristasblog.com/";
    }

	public function visit(){
		$this->page = $this->session->getPage();
	}
	public function hasContent($content){
		return $this->page->hasContent($content);
	}
	public function click($css){
		$this->page->find('css',$css)->click();
	}
	public function insert($content, $name){
		$this->page->fillField($name,$content);
	}
	public function submit($css){
		$this->page->find('css',$css)->submit();
	}
}
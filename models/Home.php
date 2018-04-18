<?php


class Home extends Model{
	private $siteTitle;
	private $loginContent;
	private $welcomeTitle;
	private $welcomeMessage;
	private $urlSlideShow;
	private $urlAboutMeIcon;
	private $aboutMeTitle;
	private $aboutMeMessage;
	private $copyRight;
	private $pageID;
	private $session;


	function __construct($pageID, $session){
		$this->session = $session;
		parent::__construct($this->session->getLoggedIN());

		$this->pageID = $pageID;

		//Gets site title
		$this->setSiteTitle();

		//Gets the menu array and sets the menu navigation
		$this->setLoginContent();

		//Gets the welcome message title and message panel content
		$this->setWelcomeTitle();
		$this->setWelcomeString();

		//Gets the RHS slide show url's panel content
		$this->setSlideShow();

		//Gets the about me panel content
		$this->setAboutMeIconURL();
		$this->setAboutMeTitle();
		$this->setAboutMeString();
	}


	public function setSiteTitle(){
		if($this->loggedin){
			$this->siteTitle = 'Welcome to Bubble Burst';
		}else{
			$this->siteTitle = 'Welcome to Bubble Burst - Please Login';
		}
	}
	
	public function setLoginContent(){
		if($this->loggedin){
			$this->loginContent = file_get_contents('forms/nav.html');
		}else{
			$this->loginContent = file_get_contents('forms/login_form.html');
		}
	}
	
	public function setWelcomeTitle(){
		if($this->loggedin){
			//DO NOTHING
		}else{
			$this->welcomeTitle = 'Welcome to Bubble Burst';
		}
	}
	
	public function setWelcomeString(){
		$this->welcomeMessage = file_get_contents('forms/lorem.txt');
	}
	
	public function setSlideShow(){
		$this->urlSlideShow = file_get_contents('forms/form_register.php');
	}
	
	public function setAboutMeIconURL(){
		$this->urlAboutMeIcon = 'images/person.png';
	}
	
	public function setAboutMeTitle() {
		$this->aboutMeTitle = 'About Me';
	}
	
	public function setAboutMeString(){
		$this->aboutMeMessage = 'Lorem ipsum is a dummy language, designed to fill the empty content of a page or section to apply fake content, Lorem ipsum dolar.';
	}
	

	
	public function getSiteTitle(){return $this->siteTitle;}
	public function getLoginContent(){return $this->loginContent;}
	public function getWelcomeTitle(){return $this->welcomeTitle;}
	public function getWelcomeString(){return $this->welcomeMessage;}
	public function getSlideShow(){return $this->urlSlideShow;}
	public function getAboutMeIcon(){return $this->urlAboutMeIcon;}
	public function getAboutMeTitle(){return $this->aboutMeTitle;}
	public function getAboutMeString() {return $this->aboutMeMessage;}
	
}


?>
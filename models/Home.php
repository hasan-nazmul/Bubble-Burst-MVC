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


	private $panelHead_1;
	private $stringPanel_1;

	private $panelHead_2;
	private $stringPanel_2;

	private $menuNav;


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

		$this->setPanelHead_1();
		$this->setStringPanel_1();
		
		$this->setPanelHead_2();
		$this->setStringPanel_2();

		$this->setMenuNav();
	}

	public function setMenuNav(){
		if($this->loggedin){
			switch ($this->pageID) {
				case 'home':
					$this->menuNav[1] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=my_account">Account</a>';
					$this->menuNav[3] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=logout">Logout</a>';
					break;
				case 'new_game':
					$this->menuNav[0] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=home">Home</a>';
					$this->menuNav[1] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=my_account">Account</a>';
					$this->menuNav[2] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=leaderboard">Leaderboard</a>';
					$this->menuNav[3] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=logout">Logout</a>';
					break;
				case 'my_account':
					$this->menuNav[0] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=home">Home</a>';
					$this->menuNav[1] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=logout">Logout</a>';
					break;
				case 'logout':
					$this->menuNav[0] = '<form class="frmLogin" method="POST" action="index.php?pageID=process_login">
	<input type="text" name="username" id="username" placeholder="Username">
	<input type="password" name="password" id="password" placeholder="Password">
	<input type="submit" name="login" class="btnLogin" value="Login">
</form><div class="clearfix"></div>';
					break;
				case 'leaderboard':
					$this->menuNav[0] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=home">Home</a>';
					$this->menuNav[1] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=my_account">Account</a>';
					$this->menuNav[2] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=leaderboard">Leaderboard</a>';
					$this->menuNav[3] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=logout">Logout</a>';
					break;
				default:
					$this->menuNav[0] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=home">Home</a>';
					$this->menuNav[1] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=my_account">Account</a>';
					$this->menuNav[2] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=leaderboard">Leaderboard</a>';
					$this->menuNav[3] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=logout">Logout</a>';
					break;
			}
		}else{
			switch ($this->pageID) {
				case 'process_login':
					$this->menuNav[0] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=home">Home</a>';
					$this->menuNav[1] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=my_account">Account</a>';
					$this->menuNav[2] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=leaderboard">Leaderboard</a>';
					$this->menuNav[3] = '<a href="'.$_SERVER['PHP_SELF'].'?pageID=logout">Logout</a>';
					break;
				default:
					$this->menuNav[0] = '<form class="frmLogin" method="POST" action="index.php?pageID=process_login">
	<input type="text" name="username" id="username" placeholder="Username">
	<input type="password" name="password" id="password" placeholder="Password">
	<input type="submit" name="login" class="btnLogin" value="Login">
</form><div class="clearfix"></div>';
					break;
				}
			}
	}

	public function setPanelHead_1(){
		if ($this->loggedin) {
			$this->panelHead_1 = 'Bubble Burst';
		}else{
			$this->panelHead_1 = 'Error - Please Log In';
		}
	}

	public function setStringPanel_1(){
		if ($this->loggedin) {
			switch ($this->pageID) {
				case 'home':
					$this->stringPanel_1= file_get_contents('forms/form_start_game.html');
					break;
				case 'new_game':
					//$this->stringPanel_1= file_get_contents('forms/form_game_board.html');

					break;
				default:
					# code...
					break;
			}

		}else{
			$this->stringPanel_1 = file_get_contents('forms/login_form_view_1.html');
		}
	}

	public function setPanelHead_2(){
		if ($this->loggedin) {
			$this->panelHead_2 = 'Bubble Chat';
		}else{
			$this->panelHead_2 = 'Register';
		}
	}

	public function setStringPanel_2(){
		if ($this->loggedin) {
			switch ($this->pageID) {
				case 'home':
					# code...
					break;
				case 'new_game':
					$this->stringPanel_2 = file_get_contents('forms/form_chat.html');
					break;
				default:
					# code...
					break;
			};
		}else{
			$this->stringPanel_2 = file_get_contents('forms/form_register.php');
		}
	}

	public function setSiteTitle(){
		if($this->loggedin){
			$this->siteTitle = 'Welcome to Bubble Burst';
		}else{
			$this->siteTitle = 'Welcome to Bubble Burst - Please Log In';
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
	

	public function getMenuNav(){return $this->menuNav;}
	public function getSiteTitle(){return $this->siteTitle;}
	public function getLoginContent(){return $this->loginContent;}
	public function getWelcomeTitle(){return $this->welcomeTitle;}
	public function getWelcomeString(){return $this->welcomeMessage;}
	public function getSlideShow(){return $this->urlSlideShow;}
	public function getAboutMeIcon(){return $this->urlAboutMeIcon;}
	public function getAboutMeTitle(){return $this->aboutMeTitle;}
	public function getAboutMeString() {return $this->aboutMeMessage;}

	public function getPanelHead_1(){return $this->panelHead_1;}
	public function getStringPanel_1(){return $this->stringPanel_1;}
	public function getPanelHead_2(){return $this->panelHead_2;}
	public function getStringPanel_2(){return $this->stringPanel_2;}
	
}


?>
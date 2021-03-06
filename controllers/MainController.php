<?php
/**
 * Description of Session
 *
 * @author Nazmul Hasan K00217982
 */
class MainController extends Controller{
    
        //properties
        private $pageID;  //String : containing the name of the requested page
        private $db; //MySQLi connection object
        private $data; //Array containing content data for the view
        private $session; //Session class object
        private $userAuthorisation; //Integer - 0=not authorised 1=administrator 2=lecturer 3=student

        private $panelHead_1;
        private $stringPanel_1;
        private $panelHead_2;
        private $stringPanel_2;

        private $fName;
        private $sName;

        
    
	//constructor
	function __construct($db, $session){  
           //initialise the class properties
           $this->data=[]; //initialise an empty array  [this is only accessed in debug mode] 
           $this->session=$session; 
           parent::__construct($this->session->getLoggedIn());
           $this->db=$db;
           
           //call the the main app methods 
           $this->processView();  //get the requested next page
           $this->updateView(); //a switch to load the model and update the view
           $this->debugInfo(); //if debug is turned on display the debug info
           
	}//construct the main controller object


        
          
        //methods
        public function processView(){
            //This main controller handles all page requests vis the URL - GET Methos
            //$_GET will contain the selected pageID 
            //If the page is loaded for the first time then the $_GET array is empty
            //so a default value is set for $this->pageID
            if (isset($_GET['pageID'])){  //get the value of pageID from $_GET array
                $this->pageID=$_GET['pageID'];
            }
            else{  //no value passed through URL to $_GET array
                $this->pageID='noPageSelected';  //this will execute the default
            }
        }  //get the page ID




        public function updateView(){
            //this SWITCH is the main selector of the next page to load
           if($this->loggedin){  //these page options are only available to logged in users      
            $this->userAuthorisation=$this->session->getUserAuthorisation();   
            if($this->userAuthorisation==1){
                //user is logged in as administrator
               switch ($this->pageID) { 
               case 'home':

                    $home=new Home($this->pageID,$this->session);
                    $game = new GameBoard($this->pageID, NULL, $this->db,$this->session);

                    $data=[];

                    $data['siteTitle']=$home->getSiteTitle(); 
                    $data['menuNav']=$home->getMenuNav();

                    $data['userFirstName']=$game->getUserFirstName();
                    $data['userSurName']=$game->getUserSurName();
                    $data['fullname']=$game->getUserFirstName()." ".$game->getUserSurName();

                    $data['stringPanel_1'] =$home->getStringPanel_1();
                    include_once 'views/start_game.php';
                    break;          
                case "new_game":
                    //get the model
                    $gameID=$this->session->getGameID();
                    //setcookie("GameLife",$gameID,time()+300); //cookietime is in seconds (5 minutes)

                    $home=new Home($this->pageID,$this->session);
                    $game = new GameBoard($this->pageID, NULL, $this->db,$this->session);

                    //setcookie("GameLife", "New Game",time()+10);

                    //get the content from the model - put into the $data array for the view:
                    $data=[];  //initialise an empty data array
                    $data['siteTitle']=$home->getSiteTitle(); 
                    $data['loginContent']=$home->getLoginContent();       // an array of menu items and associated URLS

                    $data['menuNav']=$home->getMenuNav(); 

                    $data['panelHead_1']=$game->getPanelHead_1(); 
                    $data['stringPanel_1'] =$game->getStringPanel_1();
                     
                    $data['panelHead_2']=$game->getUserFirstName()." ".$game->getUserSurName(); 
                    $data['stringPanel_2'] =$game->getStringPanel_2();

                    $data['userFirstName']=$game->getUserFirstName();
                    $data['userSurName']=$game->getUserSurName();
                    $data['fullname']=$game->getUserFirstName()." ".$game->getUserSurName();

                    $data['error_message']=$game->getLoginContent();

                    $data['player_lives']=$game->getPlayerLives();
                    //$data['NewGameID']=$game->createUniqueId();

                    //$date['gameValue']=$game->getGameValues();

                    $this->data=$data; //put the $data array into the class property do it can be accedded in DEBUG mode
                    
                    //display the view
                    include_once 'views/game_board.php';   
                    break;
                case 'play':
                    //get the model
                    $home=new Home($this->pageID,$this->session);
                    $game = new GameBoard($this->pageID, NULL, $this->db,$this->session);

                    //get the content from the model - put into the $data array for the view:
                    $data=[];  //initialise an empty data array
                    $data['siteTitle']=$home->getSiteTitle(); 
                    //$data['loginContent']=$home->getLoginContent();       // an array of menu items and associated URLS

                    $data['menuNav']=$home->getMenuNav(); 

                    $data['panelHead_1']=$game->getPanelHead_1(); 
                    $data['stringPanel_1'] =$game->getStringPanel_1();
                     
                    $data['panelHead_2']=$game->getUserFirstName()." ".$game->getUserSurName(); 
                    $data['stringPanel_2'] =$game->getStringPanel_2();

                    $data['userFirstName']=$game->getUserFirstName();
                    $data['userSurName']=$game->getUserSurName();
                    $data['fullname']=$game->getUserFirstName()." ".$game->getUserSurName();

                    $data['error_message']=$game->getLoginContent();
                    //$data['NewGameID']=$game->createUniqueId();

                    $data['player_lives']=$game->getPlayerLives();

                    //$date['gameValue']=$game->getGameValues();

                    $this->data=$data; //put the $data array into the class property do it can be accedded in DEBUG mode
                    
                    //display the view
                    include_once 'views/game_board.php';   
                    break;
                case "my_account":
                    $home=new Home($this->pageID,$this->session);
                    $settings = new Settings($this->pageID, NULL, $this->db,$this->session);

                    $data=[];  //initialise an empty data array
                    $data['siteTitle']=$home->getSiteTitle(); 

                    $data['menuNav']=$home->getMenuNav();

                    $data['panelHead_1']=$settings->getPanelHead_1();
                    $data['panelHead_2']=$settings->getPanelHead_2();

                    $data['full_name']=$settings->getFullName();
                    $data['description']=$settings->getDescription();
                    $data['member_since']=$settings->getMemberSince();
                    $data['games_played']=$settings->getGamesPlayed();
                    $data['games_won']=$settings->getGamesWon();

                    $this->data=$data; //put the $data array into the class property do it can be accedded in DEBUG mode
                    include_once 'views/settings.php';   
                    break;     
                case 'save_settings':
                    $home=new Home($this->pageID,$this->session);
                    $settings = new Settings($this->pageID, NULL, $this->db,$this->session);

                    $data=[];  //initialise an empty data array
                    $data['siteTitle']=$home->getSiteTitle(); 

                    $data['menuNav']=$home->getMenuNav();

                    $data['panelHead_1']=$settings->getPanelHead_1();
                    $data['panelHead_2']=$settings->getPanelHead_2();

                    $data['full_name']=$settings->getFullName();
                    $data['description']=$settings->getDescription();
                    $data['member_since']=$settings->getMemberSince();
                    $data['games_played']=$settings->getGamesPlayed();
                    $data['games_won']=$settings->getGamesWon();

                    $this->data=$data; //put the $data array into the class property do it can be accedded in DEBUG mode
                    include_once 'views/settings.php';
                    break;
                case 'delete_account':
                    # code...
                    break;
                case "leaderboard":
                    //get the model
                    $home=new Home($this->pageID,$this->session);
                    $leaderboard = new LeaderBoard($this->pageID, NULL, $this->db,$this->session);
                    $game = new GameBoard($this->pageID, NULL, $this->db,$this->session);
                    //get the content from the model - put into the $data array for the view:
                    $data=[];  //initialise an empty data array
                    $data['siteTitle']=$home->getSiteTitle(); 

                    $data['menuNav']=$home->getMenuNav(); 

                    $data['panelHead_1']=$leaderboard->getPanelHead_1(); 
                    $data['stringPanel_1'] =$leaderboard->getStringPanel_1();
                    $data['fullname']=$game->getUserFirstName()." ".$game->getUserSurName();

                    $this->data=$data; //put the $data array into the class property do it can be accedded in DEBUG mode
                    
                    //display the view
                    include_once 'views/leader_board.php';   
                    break;              
                case "logout":
                    //get the models
                    $game = new GameBoard($this->pageID, NULL, $this->db,$this->session);
                    $this->loggedin=$game->getLoggedin(); //update the status of the login variable
                    $home=new Home($this->pageID,$this->session);    
                    
                    $data['menuNav']=$home->getMenuNav(); 
                    $data['siteTitle']= $home->getSiteTitle(); 
                    $data['loginContent'] = $home->getLoginContent();
                    $data['welcomeTitle'] = $home->getWelcomeTitle();
                    $data['welcomeString'] = $home->getWelcomeString();
                    $data['slideShow'] = $home->getSlideShow();
                    $data['aboutMeIcon'] = $home->getAboutMeIcon();
                    $data['aboutMeTitle'] = $home->getAboutMeTitle();
                    $data['aboutMeString'] = $home->getAboutMeString();
                    $this->data=$data; //put the $data array into the class property do it can be accedded in DEBUG mode
                    
                    //display the view
                    include_once 'views/home.php'; //load the view
                    break;
                default:
                    $home=new Home($this->pageID,$this->session);
                    $game = new GameBoard($this->pageID, NULL, $this->db,$this->session);

                    $data=[];

                    $data['siteTitle']=$home->getSiteTitle(); 
                    $data['menuNav']=$home->getMenuNav();

                    $data['userFirstName']=$game->getUserFirstName();
                    $data['userSurName']=$game->getUserSurName();
                    $data['fullname']=$game->getUserFirstName()." ".$game->getUserSurName();

                    $data['stringPanel_1'] =$home->getStringPanel_1();
                    include_once 'views/start_game.php';
                }
            }else {
                //get the model
                    $home=new Home($this->pageID,$this->session);
                    $game = new GameBoard($this->pageID, NULL, $this->db,$this->session);
                    //get the content from the model - put into the $data array for the view:
                    $data=[];  //initialise an empty data array
                    $data['siteTitle']=$home->getSiteTitle(); 
                    $data['loginContent']=$home->getLoginContent();       // an array of menu items and associated URLS

                    $data['menuNav']=$home->getMenuNav(); 

                    $data['panelHead_1']=$game->getPanelHead_1(); 
                    $data['stringPanel_1'] =$game->getStringPanel_1();     // A string intended of the Left Hand Side of the page
                    $data['panelHead_2']=$game->getPanelHead_2(); 
                    $data['stringPanel_2'] =$game->getStringPanel_2();
                    

                    $data['userFirstName']=$game->getUserFirstName();
                    $data['userSurName']=$game->getUserSurName();

                    $this->data=$data; //put the $data array into the class property do it can be accedded in DEBUG mode
                    
                    //display the view
                    include_once 'views/game_board.php';  
            }        
           }
           else{//user is not logged in
            switch ($this->pageID) {
                case 'process_login':
                    $home=new Home($this->pageID,$this->session);
                    $game = new GameBoard($this->pageID, NULL, $this->db,$this->session);

                    $data=[];

                    $data['siteTitle']=$home->getSiteTitle(); 
                    $data['menuNav']=$home->getMenuNav();

                    $data['userFirstName']=$game->getUserFirstName();
                    $data['userSurName']=$game->getUserSurName();
                    $data['fullname']=$game->getUserFirstName()." ".$game->getUserSurName();

                    $data['stringPanel_1'] =$game->getStringPanel_1();
                    include_once 'views/start_game.php';
                    break;
                case "register": //Not modified yet, will modify later and replace the ppropriate views
                    //get the model
                    $home=new Home($this->pageID,$this->session); 
                    $lecturer = new Lecturer($this->pageID, NULL, $this->db,$this->session);
                    
                    //get the content from the model - put into the $data array for the view:
                    $data=[];  //initialise an empty data array
                    $data['pageTitle']=$home->getPageTitle(); 
                    $data['menuNav']=$home->getMenuNav();       // an array of menu items and associated URLS
                    $data['stringPanel_1'] =$lecturer->getStringPanel_1();     // A string intended of the Left Hand Side of the page
                    //$data['stringPanel_2'] =$lecturer->getStringPanel_2();     // A string intended of the Left Hand Side of the page

                    $data['panelHead_1']=$lecturer->getPanelHead_1();// A string containing the LHS panel heading/title
                    //$data['panelHead_2']=$lecturer->getPanelHead_2();// A string containing the ~MIDDLE panel heading/title 

                    $this->data=$data; //put the $data array into the class property do it can be accedded in DEBUG mode

                    //display the view
                    include_once 'views/view_1_panel.php'; //load the view
                    break;  
                case "process_registration":
                    //get the model
                    $home=new Home($this->pageID,$this->session);
                    $Register = new Register($this->pageID, NULL, $this->db,$this->session);
                    
                    //get the content from the model - put into the $data array for the view:
                    $data=[];  //initialise an empty data array
                    $data['siteTitle']=$home->getSiteTitle(); 
                    $data['menuNav']=$home->getMenuNav();       // an array of menu items and associated URLS
                    //$data['panelHead_1']=$Register->getPanelHead_1(); 
                    $data['stringPanel_1'] =$Register->getStringPanel_1();
                    $data['errorHead']=$Register->getErrorHead();
                    $data['error_message']=$Register->getErrorMessage();
                    $data['regResult']=$Register->getRegResult();
                    $this->data=$data; //put the $data array into the class property do it can be accedded in DEBUG mode
                    
                    //display the view
                    include_once 'views/register.php'; //load the view
                    break; 
                default:
                    //get the model
                    $home=new Home($this->pageID,$this->session);

                    //get the content from the model - put into the $data array for the view:
                    $data=[];  //initialise an empty data array
                    $data['siteTitle']= $home->getSiteTitle(); 
                    $data['loginContent'] = $home->getLoginContent();
                    $data['welcomeTitle'] = $home->getWelcomeTitle();
                    $data['welcomeString'] = $home->getWelcomeString();
                    $data['slideShow'] = $home->getSlideShow();
                    $data['aboutMeIcon'] = $home->getAboutMeIcon();
                    $data['aboutMeTitle'] = $home->getAboutMeTitle();
                    $data['aboutMeString'] = $home->getAboutMeString();
                    $data['menuNav']=$home->getMenuNav();
                    $this->data=$data; //put the $data array into the class property do it can be accedded in DEBUG mode
                    
                    //display the view
                    include_once 'views/home.php';  
                    break;
                
            }            
           }      
        }  //update the $data array and load the view
        private function debugInfo(){
            if(__DEBUG && $this->pageID!=='chat'){  //only display DEBUG info when __DEBUG=TRUE , also dont show DEBUG info in AJAX chat panel
                echo '<!-- The Debug SECTION -->';
                echo '<section style="background-color: #BBBBBB">';
                echo '<div class="container">';
                echo '<h2>Web Application Debug information</h2><br>';
                echo '<h3>Controller (CLASS) properties</h3>';
                echo '$loggedin ='.$this->loggedin.'<br>';
                echo '$pageID   ='.$this->pageID.'<br>';
                echo '$userAuthorisation = '.$this->userAuthorisation.'<br>';
                echo '<h3>Super Global Array</h3>';
                echo '<h4>$_GET Arrays</h4>';
                echo '<table class="table table-bordered"><thead><tr><th>KEY</th><th>VALUE</th></tr></thead>';
                foreach($_GET as $key=>$value){echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';}
                echo '</table>';

                echo '<h4>$_POST Array</h4>';
                echo '<table class="table table-bordered"><thead><tr><th>KEY</th><th>VALUE</th></tr></thead>';
                foreach($_POST as $key=>$value){echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';}
                echo '</table>';
                
                echo '<h4>$_COOKIE Array</h4>';
                echo '<table class="table table-bordered"><thead><tr><th>KEY</th><th>VALUE</th></tr></thead>';
                foreach($_COOKIE as $key=>$value){echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';}
                echo '</table>';
                
                echo '<h4>$_SESSION Array</h4>';
                echo '<table class="table table-bordered"><thead><tr><th>KEY</th><th>VALUE</th></tr></thead>';
                foreach($_SESSION as $key=>$value){echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';}
                echo '</table>';
 
                echo '<h4>$data Array (data passed to VIEW)</h4>';
                echo '<table class="table table-bordered"><thead><tr><th>KEY</th><th>VALUE</th></tr></thead>';
                foreach($this->data as $key=>$value){echo '<tr><td>'.$key.'</td><td>'.$value.'</td></tr>';}
                echo '</table>';
                
                
                echo '</div>';
                echo '</section>';
            }
        }   //if enabled in config.php - display the debug information 
}

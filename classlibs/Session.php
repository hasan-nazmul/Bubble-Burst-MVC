<?php



/**
 * Description of Session
 *
 * @author Nazmul Hasan K00217982
 */
class Session {
    //put your code here
    private $sessionID; //String : containing the PHPSESSID cookie value
    private $GameLife;
    private $loggedin; //Boolean : TRUE is logged in
    private $userAuthorisation; //Integer - 0=not authorised 1=administrator 2=lecturer 3=student
    private $userID; //String - logged on user ID
    private $GameID;
    private $PlayerLives;
    private $PlayerPoints;
    
    public function __construct(){
        //get the sessionid from the cookie array  
        if(!isset($_COOKIE['PHPSESSID'])){ //on first page load the session cookie is empty
            $this->sessionID='New Session';
            $_SESSION['PHPSESSID'] = $this->sessionID;
        }
        else{
            $this->sessionID=$_COOKIE['PHPSESSID'];
            $_SESSION['PHPSESSID'] = $this->sessionID;
        }


        /*if(!isset($_COOKIE['GameLife'])){ //on first page load the session cookie is empty
            $this->sessionID='New Game';
            $_SESSION['GameLife'] = $this->sessionID;
        }
        else{
            $this->sessionID=$_COOKIE['GameLife'];
            $_SESSION['GameLife'] = $this->sessionID;
        }*/
        

        /*if (!isset($_COOKIE['GameLife'])){
            //session is already running with a logged in user
            $this->GameLife=$_COOKIE['GameLife'];
        }
        else{
          $_COOKIE['GameLife'] = NULL;
          //$this->loggedin=NULL;
        }*/

        
        //initialise session variables
        if (isset($_SESSION['loggedin'])){
            //session is already running
            $this->loggedin=$_SESSION['loggedin'];
        }
        else{
          $_SESSION['loggedin'] = FALSE;
          $this->loggedin=$_SESSION['loggedin'];
          }
          
        if (isset($_SESSION['userID'])){
            //session is already running with a logged in user
            $this->userID=$_SESSION['userID'];
        }
        else{
          $_SESSION['userID'] = NULL;
          $this->loggedin=NULL;
        }
          

        if (isset($_SESSION['GameID'])){
            //session is already running with a logged in user
            $this->GameID=$_SESSION['GameID'];
        }
        else{
          $_SESSION['GameID'] = NULL;
          //$this->loggedin=NULL;
        }

        if (isset($_SESSION['PlayerLives'])){
            //session is already running with a logged in user
            $this->PlayerLives=$_SESSION['PlayerLives'];
        }
        else{
          $_SESSION['PlayerLives'] = NULL;
          //$this->loggedin=NULL;
        }

        if (isset($_SESSION['PlayerPoints'])){
            //session is already running with a logged in user
            $this->PlayerPoints=$_SESSION['PlayerPoints'];
        }
        else{
          $_SESSION['PlayerPoints'] = NULL;
          //$this->loggedin=NULL;
        }

        //this class can be used to manage other variables besides $_SESSION['loggedin']
        //this one keeps track of the number of times pages are viewed by the user  
        if(isset($_SESSION['views'])){
            $_SESSION['views'] = $_SESSION['views']+ 1;            
        }
        else{
             $_SESSION['views'] = 1;            
        }
        
        if (isset($_SESSION['userAuthorisation'])){
            //session is already running
            $this->userAuthorisation=$_SESSION['userAuthorisation'];
        }
        else{
          $_SESSION['userAuthorisation'] = 0;
          $this->loggedin=$_SESSION['userAuthorisation'];
          }

    }
    public function setLoggedin($loggedin){
        if($loggedin==TRUE){     
          $_SESSION['loggedin'] = TRUE;
          $this->loggedin=TRUE;  
          return '<br>SESSION CLASS Function - Logging IN<br>';  //used for diagnostics only
        }
        else{
          $_SESSION['userAuthorisation']=0; 
          $_SESSION['loggedin'] = FALSE;
          $this->loggedin=FALSE;
          // Unset all of the session variables.
            $_SESSION = array();

            // If it's desired to kill the session, also delete the session cookie.
            // Note: This will destroy the session, and not just the session data!
            if (ini_get("session.use_cookies")) {
                $params = session_get_cookie_params();
                setcookie(session_name(), '', time() - 42000,
                    $params["path"], $params["domain"],
                    $params["secure"], $params["httponly"]
                );
            }
          session_destroy();  //sets all SESSION variables to NULL

          return '<br>SESSION CLASS - Function Logging OUT<br>'; //used for diagnostics only
        }    
    }

    

    public function setUserAuthorisation($userAuthorisation){
        $this->userAuthorisation=$userAuthorisation;
        $_SESSION['userAuthorisation']=$userAuthorisation;
    }

    public function setCurrentGameCookie($gameID){
        $this->GameLife=$gameID;
        $_COOKIE['GameLife']=$gameID;
    }


    public function setPlayerPoints($value){
        $this->PlayerPoints=$value;
        $_SESSION['PlayerPoints']=$value;
    }
    public function updatePlayerPoints($award_points){
        $currentPoints = $this->getPlayerPoints();

        $currentPoints += $award_points;

        $this->PlayerPoints=$currentPoints;
        $_SESSION['PlayerPoints']=$currentPoints;
    }

    public function getPlayerPoints(){
        return $this->PlayerPoints;
    }


    public function setPlayerLives($life){
        $this->PlayerLives=$life;
        $_SESSION['PlayerLives']=$life;
    }
    public function updatePlayerLives($deduct_lives){
        $currentLives = $this->getPlayerLives();

        $currentLives -= $deduct_lives;

        $this->PlayerLives=$currentLives;
        $_SESSION['PlayerLives']=$currentLives;
    }

    public function getPlayerLives(){
        return $this->PlayerLives;
    }

    public function setGameID($gameID){
        $this->GameID=$gameID;
        $_SESSION['GameID']=$gameID;
    }

    public function getGameID(){
        return $this->GameID;
    }
    
    public function setUserID($userID){
        $this->userID=$userID;
        $_SESSION['userID']=$userID;
    }
    
    public function getUserID(){
        return $this->userID;
    }    
    
    public function getLoggedin(){
        return $this->loggedin;
    }
    public function getUserAuthorisation(){
        return $this->userAuthorisation;
    }     
    
    
}

<?php
/**
 * Description of Session
 *
 * @author Nazmul Hasan K00217982
 */
class SessionTest {
    //put your code here
    private $session;
    
    public function __construct($session){
        $this->session=&$session;
        echo '<br>SessionTest CLASS CONSTRUCTOR<br>';
    }
    
    public function setSession($loggedin){
        return '<br>SessionTest Class call to SESSION class: '.$this->session->setLoggedIn($loggedin);
    }
    
   public function getSession(){
       return $this->session->getLoggedIn();
   }
}

<?php
include 'header.php';
include 'autoLoader.php';

class SecurityService{
    
    private $password = "";
    private $username = "";
    
    function __construct($username, $password){
        
        $this->password = $password;
        $this->username = $username;
        
    }
    
    public function Authenticate(){
        if($this->password =="" || $this->username == "")
        {
            return false;
        }
        if($this->password == "pword" and $this->username == "william")
        {
            //this is where you will add the db con with the fetch
            return true;
        }
        else {
            return false;
        }
    }
    
}

?>
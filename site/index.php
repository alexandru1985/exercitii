<?php
session_start();

$username = $_POST['username'];
$password = $_POST['password'];

try {
    $login = new Login($username, $password);
} catch (Exception $exc) {
    echo $exc->getMessage();
}
echo $login->connect();
echo $login->check();

class Login
{
public $username;
public $password;
public $numrows;
public $dbusername;
public $dbpassword;

public function __construct($username, $password)
{
    $this->username = $username;
    $this->password = $password;
    
    $this->checkValidity();
}

protected function checkValidity()
{
    if (strlen($this->username) < 6 || strlen($this->username) > 12) {
        throw new Exception('Username must have 6-12 letters');
    }
}

public function connect ()
{
    if($this->username && $this->password) {
        
        $connect = mysql_connect("localhost","root","") or die ("Connection failed!");
        mysql_select_db("phplogin") or die ("Connection failed!");

        $query = mysql_query("SELECT * FROM users WHERE username ='$this->username'");
        $numrows = mysql_num_rows($query);
        

    }

}


//
//public function check (){if (($this->numrows!=0))
//  
//  {
//   while ($row = mysql_fetch_assoc($query)) 
//     {
//       $dbusername = $this->username;  
//     $dbpassword =  $this->password; 
//  }
//}}

 public function check1(){
     if ($this->username==$this->dbusername&md5($this->password)==$this->dbpassword)
     {
      echo "Welcome, ".$_SESSION['username']."!<br><a href=logout.php>Logout</a>";
     }
     else
         echo "Incorrect password!";
  
 
      die("User does not exist!");
  

    die("You have need of username and password!");
}
}


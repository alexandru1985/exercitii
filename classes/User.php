<?php
class User
{
    public function __construct() 
    {
        session_set_cookie_params(0);
        if (!isset($_SESSION)) { session_start();}
        $_SESSION['error']='';
    }
    
    public function login($username,$password) {
      $username=trim(strtolower($username));
      //verificare daca exista username si parola corecte
      if ($this->is_corect($username) && $this->is_corect($password)){
        $password=md5($password);
        //verificare daca exista username si parola in baza de date
        if ($this->check_user($username,$password)) {
          $_SESSION['user']=$username;
          return true;
        }
      }
  }
    public function register($username,$password,$email) {
      $username=trim(strtolower($username));
      $mysqli=$this->mysqli();
      if (mysqli_connect_error()) { 
         $this->fail("Eroare de conectare");
         return false;
         }
      $username=$mysqli->real_escape_string($username);
      $password=$mysqli->real_escape_string($password);
      $email=$mysqli->real_escape_string($email);
      //verificare daca exista username si parola corecte
      if ($this->is_corect($username) && $this->is_corect($password) && $this->is_email($email)) {
        if ($this->exist_user($username)) {
            $password=md5($password);
            $sql="INSERT INTO utilizatori (id,nume,parola,email) VALUES (NULL,'$username','$password','$email')";
            if ($mysqli->query($sql)===TRUE) {
                $_SESSION['user']=$username;
                $this->fail("inregistrare cu succes");
                
            } else {
                $this->fail ("eroare in baza de date");
            }
        }
      }
  }

  private function is_corect($name) {    //Verificarea lungimii numelui 
      if (strlen($name)<4|| strlen($name)>12) {
        $this->fail("Nume sau parola incorecte: trebuie sa fie intre 4 si 12 caractere.");
        return false;
      }
      //Verificarea caracterelor numelui
      if (preg_match("#[^a-z0-9]#",$name,$matches)) {
        $this->fail("Nume sau parola incorecte: trebuie sa fie doar caractere alfanumerice.");
        return false;
      }
      return true;
  }
  public function is_email($email) {
      $regex = '/^[_a-z0-9-]+(\.[_a-z0-9-]+)*@[a-z0-9-]+(\.[a-z0-9-]+)*(\.[a-z]{2,3})$/';
      if (preg_match($regex,$email)) {
          return true;
      }
      else {
          $this->fail("Email incorect.");
          return false;
      }
  }
  private function check_user($name,$pass) {   //verificare in baza de date
      $mysqli=$this->mysqli();
      if (mysqli_connect_error()) { 
         $this->fail("Eroare de conectare"); 
         return false;
         }
      $name=$mysqli->real_escape_string($name);
      if ($q=$mysqli->query("SELECT nume,parola,email FROM utilizatori WHERE nume LIKE '$name'")) {
        $exist=$q->num_rows;
        if ($exist>0) { 
          while ($row=$q->fetch_assoc()) {
            if ($pass==$row['parola']) {  
              return true;
            } else {
              $this->fail ("Parola incorecta"); 
              return false;
            }
          }
        } else {
            $this->fail ("Nume inexistent");
            return false;
        }
      }
  }
  private function exist_user($name) {
      $mysqli=$this->mysqli();
      if (mysqli_connect_error()) { 
         $this->fail("Eroare de conectare"); 
         return false;
         }
      if ($q=$mysqli->query("SELECT nume FROM utilizatori WHERE nume LIKE '$name'")){
         $exist=$q->num_rows;
         if ($exist>0) {
             $this->fail("Acest nume exista deja. Alegeti altul.");
             return false;}
         else {return true;}
      }
  }
  protected function mysqli() {
      return @new mysqli('localhost','root','','store');
  }
protected function fail($mesaj) {
      $_SESSION['error'].=$mesaj;
  }
public function logged_in() {
      if (!isset($_SESSION['user'])){
          return false;
      } else {
          return true;
      }
  }
public function logout() {
      session_unset();
      session_destroy();
  }
/*public function __destruct() {
      $mysqli=$this->mysqli();
      $user=$_SESSION['user'];
      $sql="UPDATE users SET online=0 WHERE porecla LIKE '$user'";
      if ($mysqli->query($sql)===TRUE) {}
       else { $this->fail ('Eroare in baza de date');}
      session_unset();
      session_destroy();
  }*/
}
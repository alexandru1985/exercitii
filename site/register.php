<?php
session_start();

class Register {


public  $submit;
public  $fullname;                           
public  $username; 
public  $password;                                                   
public  $repeatpassword;                                                    
public  $date;                                                     
                                                  
public function __construct(){
    $this->submit = $_POST['submit'];
    $this->fullname = strip_tags($_POST['fullname']);
    $this->username = strip_tags($_POST['username']);
    $this->password = strip_tags($_POST['password']);
    $this->repeatpassword = strip_tags($_POST['repeatpassword']);
    $this->date = date("Y-m-d");
}                                                    
                             
public function checking(){if($this->submit)
{
    // verifica existenta campurilor

 if($this->fullname&&$this->username&&$this->password&& $this->repeatpassword)
 {
  
    
    if($password==$repeatpassword)
    {
      if(strlen($username)> 30 ||strlen($fullname)> 30 )
    {
      echo "Limita maxima pentru nume si username este de 30 de caractere";  
        
    }
    else {
        // verifica numarul de caractere a parolei
        if(strlen($password)> 30 ||strlen($password)< 4 )
    {
      echo "Parola trebuie sa aiba intre 4 si 30 de caractere";
        
    }
    else {
        // intregistrare user
        // se cripteaza parola  
          $password = md5($password);  
          $repeatpassword =  md5($repeatpassword);
   
        // conectarea la baza de date
        $connect = mysql_connect("localhost","root","") or die ("Conectare nereusita");  
        mysql_select_db("phplogin") or die ("Conectare nereusita"); 
        $queryreg = mysql_query("INSERT INTO users VALUES ('','$fullname','$username','$password','$date')");

    }

        die ("Inregistrare reusita. Apasati <a href='login.php'>aici</a> pentru a va loga.");
    }

        
    }
    else 
        echo "Parolele nu sunt identice!";
    
 }
}   
   else 
     echo "Toate campurile trebuie completate!";
  
    
    
    
    
}
}

$checking = new Register;





?>

<html>
    <p>
    <form action="register.php" method="POST">   
    <table>
        <tr>
            <td>
              Your full name:     
            </td>
            <td>
               <input type="text" name="fullname" value="<?php echo $fullname; ?>">    
            </td>
        </tr>
     <tr>
            <td>
              Username:     
            </td>
            <td>
               <input type="text" name="username" value="<?php echo $username; ?>">    
            </td>
        </tr>
     <tr>
            <td>
              Password:     
            </td>
            <td>
                <input type="password" name="password">    
            </td>
        </tr>
     <tr>
            <td>
              Repeat Password:     
            </td>
            <td>
               <input type="password" name="repeatpassword">    
            </td>
        </tr>
    </table>
        <p>
         <input type="submit" name="submit" value="Register">
 </form>   
</html>
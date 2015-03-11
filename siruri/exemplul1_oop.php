<?php

class BankAccount {
  public $balance = 5;  
  
  public function DisplayBalance() {
   return 'Balance:'.$this->balance;   
  }
}
$banca = new BankAccount;
echo $banca->DisplayBalance();

?>


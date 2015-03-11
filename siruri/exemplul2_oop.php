<?php

class BankAccount {
  public $balance = 5;  
  
  public function DisplayBalance() {
   return 'Balance:'.$this->balance;   
  }
  public function Withdraw($amount) {
      if(($this->balance)<$amount){
       echo 'Not enough founds.';  
      }
      else{
  $this->balance = $this->balance - $amount;   
  }
  
  }
}
// noua instanta a clasei BankAccount;
$banca = new BankAccount;
// retragere 3
$banca->Withdraw(3);
// afiseaza balanta
echo $banca->DisplayBalance();

?>

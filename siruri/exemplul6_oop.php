<?php

class BankAccount {
  public $balance = 0;  
  
  public function DisplayBalance() {
   return 'Balance:'.$this->balance;   
  }
  public function Withdraw($amount) {
      if(($this->balance)<$amount){
       echo 'Not enough founds.<br>';  
      }
      else{
  $this->balance = $this->balance - $amount;   
  }
 }
 public function Deposit($amount) {
  $this->balance = $this->balance + $amount;     
 }
 
}

$banca = new BankAccount;
$banca->Deposit(500);
$banca->Withdraw(100);
$banca1 = new BankAccount;
$banca1->Deposit(700);
$banca1->Withdraw(500);
echo $banca->DisplayBalance().'<br>';
echo $banca1->DisplayBalance();
?>
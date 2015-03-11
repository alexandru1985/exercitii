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

class SavingsAccount extends BankAccount{
 public $type='18';
}
$banca = new BankAccount;
$banca->Deposit(500);
$banca_savings = new SavingsAccount;
$banca_savings->Deposit(300);
echo $banca->DisplayBalance().'<br>';
echo $banca_savings->DisplayBalance();
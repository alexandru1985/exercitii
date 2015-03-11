<?php

class BankAccount {
  private $balance = 3500;  
  
  public function DisplayBalance() {
   return $this->balance;   
  }
}
$banca = new BankAccount;
echo $banca->DisplayBalance();

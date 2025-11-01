<?php

class BankAccount {
  public $owner;
  private $balance;

  public function __construct($owner, $balance) {
    $this->owner = $owner;
    $this->balance = $balance;
  }

  public function deposit($amount) {
    $this->balance += $amount;
  }

  public function showBalance() {
    echo "{$this->owner}の残高は{$this->balance}円です。\n";
  }
}

$bankaccount1 = new BankAccount("冴島大河", 100000000000);

$bankaccount1->deposit(7000000);
$bankaccount1->showBalance();

?>


<?php

class BankAccount {
  public $owner;
  private $balance;

  public function __construct($owner, $balance) {
    $this->owner = $owner;
    $this->balance = $balance;
  }

  public function deposit($amount) {
    $this->balance += $amount;
  }

  public function showBalance1() {
    echo "{$this->owner}の残高は{$this->balance}円です。\n";
  }

  public function withdraw($amount) {
    if($this->balance < $amount){
      echo "残高不足です\n";
    } else {
      $this->balance -= $amount;
      echo "{$amount}円引き出しました。\n";
    }
  }

  public function showBalance2() {
    echo "{$this->owner}の残高は{$this->balance}円です。\n";
  }
}

$bankaccount1 = new BankAccount("冴島大河", 100000000000);

$bankaccount1->deposit(7000000);
$bankaccount1->showBalance1();
$bankaccount1->withdraw(90000000000);
$bankaccount1->showBalance2();

?>

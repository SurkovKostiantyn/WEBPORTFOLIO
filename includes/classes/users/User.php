<?php

class User{
    public string $name;
    private int $balance;

    public function __construct(string $name = 'new_user', int $balance = 0){
        $this->name = $name;
        $this->balance = $balance;
    }
    public function printStatus():void{
        echo $this->name.' has '.$this->balance." Shekels\n";
    }
    public function giveMoney (int $amount, User $receiver): bool{
        if($amount > $this->getBalance()){
            echo "Not enough Shekels ($this->balance)\n";
            return false;
        }else{
            $this->balance -= $amount;
            $receiver->balance += $amount;
            echo $this->name.' send '.$amount.' Shekels to '.$receiver->name."\n";
            return true;
        }
    }
    public function getBalance(): int{
        return $this->balance;
    }
}
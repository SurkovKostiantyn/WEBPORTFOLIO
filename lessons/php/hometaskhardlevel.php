<?php
const ai = 0;
const dp = 1;
const gaz = 2;
const cost = 50.0;

class Zapravka{ // $ANP = new Zapravka() - создать заправку.
    private array $bunkersMax = array( // вместительность бункера по типу топлива
        ai => 10,
        dp => 10,
        gaz => 20
    );
    private array $bunkersAmount = array( // сколько топлива в наличии по типу топлива.
        ai => 0,
        dp => 0,
        gaz => 0
    );

    public function getFuel(int $volume, int $type): void{ // залить топливо в бункер
        $this->bunkersAmount[$type] += $volume;
    }

    public function takeFuel(int $volume, int $type): float{  // отнять топливо залитое в машину
        if($this->bunkersAmount[$type] > $volume) {
            $this->bunkersAmount[$type] -= $volume;
            return true;
        }else return false;
    }

    public function getBunkerMax():int{ // какой объём бункера общий
        return array_sum($this->bunkersMax);
    }

    public function getBunkerTypeMax(int $type): int { // какой объём бункера по типу топлива
        return $this->bunkersMax[$type];
    }

    public function getAmount(int $type):int{
        return $this->bunkersAmount[$type];
    }

}

class Client{
    public int $id;
    public int $fuelType;
    private int $balance;
    public int $remaining;  //остаток топлива
    public int $fuelMax;    //размер бака

    public function __construct($id, $fuelType, $balance, $remaining, $fuelMax){
        $this->id = $id;
        $this->fuelType = $fuelType;
        $this->balance = $balance;
        $this->remaining = $remaining;
        $this->fuelMax = $fuelMax;
    }

    public function getId(): int    {
        return $this->id;
    }
    public function getFuelType(): int    {
        return $this->fuelType;
    }
    public function getBalance(): int    {
        return $this->balance;
    }
    public function setBalance($cost): void    {
        $this->balance -= $cost;
    }
    public function getRemaining():int{
        return $this->remaining;
    }
    public function setRemaining($volume):void{
        $this->remaining += $volume;
    }
    public function getFuelMax():int{
        return $this->fuelMax;
    }
}

// чё то такое:
$ANP = new Zapravka(); // создали заправку, теперь надо залить топливо в хранилища:

// у нас 3 колонки

for($type = 0;$type < 3; $type++) {// заливаем бенз dp gaz  в хранилища
    $volumeNeeded = $ANP->getBunkerTypeMax($type); // how much
    $ANP->getFuel($volumeNeeded, $type);
}

// теперь у нас заправка с полными хранилищами.

// создали 100 клиентов с различным видом топлива и балансом.
for($i = 1; $i < 100; $i++){
    $id = 'client'.$id;
    ${$id} = new Client($i, rand(0,2), rand(100,10000), rand(2, 20), rand(30, 300));
}

// заправляем полный бак $Client1
$howMuchFuelNeed = $Client1->getFuelMax() - $Client1->getRemaining();
$ClientFuelType = $Client1->getFuelType();
$ClientBalance = $Client1->getBalance();
$cost = $howMuchFuelNeed * 40.0; // допустим всё по 40

if($cost <= $ClientBalance){
    if($Zapravka->takeFuel($howMuchFuelNeed, $ClientFuelType)){
        $Client1->setRemaining($howMuchFuelNeed);
        $Client1->setBalance($cost); // отнимаем у клиента баланс
    }else echo 'нет топлива';
}else echo 'не хватает денег';



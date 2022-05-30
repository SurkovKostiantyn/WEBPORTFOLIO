<?php


const ai = 0;
const dp = 1;
const gaz = 2;

$ANP = new Zapravka();


class Zapravka{ // $ANP = new Zapravka() - создать заправку.
    private static int $TotalCars = 0;

    public array $cost = array (
        ai => 22.50,
        dp => 20.0,
        gaz => 13.0
    );
    public array $soldVolume = array(
        ai => 0,
        dp => 0,
        gaz => 0
    );
    public array $soldMoney = array(
        ai => 0.0,
        dp => 0.0,
        gaz => 0.0
    );

    private array $bunkersMax = array( // вместительность бункера по типу топлива
        ai => 20000,
        dp => 20000,
        gaz => 10000
    );
    public array $bunkersAmount = array( // сколько топлива в наличии по типу топлива.
        ai => 13000,
        dp => 17023,
        gaz => 6500
    );

    public function getSoldVolume(int $type): float
    {
        return $this->soldVolume[$type];
    }
    public function getSoldMoney(int $type): float
    {
        return $this->soldMoney[$type];
    }

    public function getFuel(int $volume, int $type): void{ // залить топливо в бункер
        $this->bunkersAmount[$type] += $volume;
    }

    public function takeFuel(int $volume, int $type): int{  // отнять топливо залитое в машину
        var_dump($volume);
        var_dump($type);
        var_dump($this->bunkersAmount[$type]);
        if($this->bunkersAmount[$type] > $volume) {
            $this->bunkersAmount[$type] -= $volume;
            $this->soldVolume[$type] += $volume;
            $this->soldMoney[$type] += ($this->cost[$type] * $volume);
            self::$TotalCars++;
            return 1;
        }return 0;
    }

    public function getCarsNum():int {
        return self::$TotalCars;
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
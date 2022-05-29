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

    public function __construct(){ //
        new Kolonka(ai);
        new Kolonka(dp);
        new Kolonka(gaz);
        new Personal('Galya');
        new Personal('Vasya');
    }

    public function getFuel(int $volume, int $type): bool{ // залить топливо в бункер
        if($volume + $this->bunkersAmount[$type] > $this->bunkersMax[$type]){
            return false;
        } else{
            $this->bunkersAmount[$type] += $volume;
            return true;
        }
    }

    public function takeFuel(int $volume, int $type): float{  // отнять топливо залитое в машину и вернуть стоимость топлива.
        if($this->bunkersAmount[$type] > $volume) {
            $this->bunkersAmount[$type] -= $volume;
            return $volume * cost;
        }else return 0.0;
    }

    public function getBunkerMax():int{ // какой объём бункера общий
        return array_sum($this->bunkersMax);
    }

    public function getBunkerTypeMax(int $type): int { // какой объём бункера по типу топлива
        return $this->bunkersMax[$type];
    }
}

class Kolonka{ // создаётся колонка с типом топлива.
    public int $type;

    public function __construct($type){
        $this->type = $type;
    }

    public function getKolonkaType():int{
        return $this->type;
    }
}

class Personal{
    public string $name;

}

class Operator extends Personal{

}

class GalyaNaKasse extends Personal{

}

class Client{
    public int $id;
    public int $fuelType;
    private int $balance;

    public function __construct($id, $fuelType){
        $this->id = $id;
        $this->fuelType = $fuelType;
    }
}
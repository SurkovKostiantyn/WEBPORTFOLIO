<?php


const ai = 0;
const dp = 1;
const gaz = 2;

$ANP = new Zapravka();

use JetBrains\PhpStorm\Pure;

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
        ai => 0,
        dp => 0,
        gaz => 0
    );

    private Connect $Connect;

    #[Pure] public function __construct(){
        $this->Connect = new Connect;
    }

    public function getSoldVolume(int $type): float    {
        return $this->soldVolume[$type];
    }
    public function getSoldMoney(int $type): float    {
        return $this->soldMoney[$type];
    }

    public function getFuel(int $volume, int $type): void{ // залить топливо в бункер
        $this->bunkersAmount[$type] += $volume;
    }

    public function loadData():void{
        if($link = $this->Connect->getConnection()){
            $query = "SELECT    `0_amount`,
                                `1_amount`,
                                `2_amount`,
                                `0_sell_volume`,
                                `1_sell_volume`,
                                `2_sell_volume`,
                                `0_sell_money`,
                                `1_sell_money`,
                                `2_sell_money`,
                                `total_cars` 
                        FROM `zapravka`";
            $result = mysqli_query($link, $query);
            if($result) {
                $data = mysqli_fetch_array($result);

                $this->soldMoney[0] = $data['0_sell_money'];
                $this->soldMoney[1] = $data['1_sell_money'];
                $this->soldMoney[2] = $data['2_sell_money'];

                $this->soldVolume[0] = $data['0_sell_volume'];
                $this->soldVolume[1] = $data['1_sell_volume'];
                $this->soldVolume[2] = $data['2_sell_volume'];

                $this->bunkersAmount[0] = $data['0_amount'];
                $this->bunkersAmount[1] = $data['1_amount'];
                $this->bunkersAmount[2] = $data['2_amount'];

                self::$TotalCars = $data['total_cars'];
            };
        }
    }

    public function takeFuel(int $volume, int $type, string $name = null): int{  // отнять топливо залитое в машину
        if($this->bunkersAmount[$type] > $volume && $link = $this->Connect->getConnection()){
            $this->bunkersAmount[$type] -= $volume;
            $this->soldVolume[$type] += $volume;
            $this->soldMoney[$type] += ($this->cost[$type] * $volume);
            self::$TotalCars++;

            $query = "UPDATE `zapravka` SET `zapravka`.`".$type."_amount` = `zapravka`.`".$type."_amount` - ".$volume.";";
            $query .= "UPDATE `zapravka` SET `zapravka`.`".$type."_sell_volume` = `zapravka`.`".$type."_sell_volume` + ".$volume.";";
            $query .= "UPDATE `zapravka` SET `zapravka`.`".$type."_sell_money` = `zapravka`.`".$type."_sell_money` + ".$this->cost[$type] * $volume.";";
            $query .= "UPDATE `zapravka` SET `zapravka`.`total_cars` = ".self::$TotalCars.";";
            $result = mysqli_multi_query($link, $query);
            if(!$result) {
                return -1;
            }
            mysqli_close($link);

            if(!is_null($name)){

                $link = $this->Connect->getConnection();

                $query2 = "SELECT `clients`.`id` FROM `clients` WHERE `clients`.`client_name` = '".$name."';";
                $result2 = mysqli_query($link, $query2);

                if(!$result2){ // если нет такого имени, то создаём объект, а в объекте уже сейвится в БД
                    var_dump('if');
                    new Client(floatval($this->cost[$type] * $volume) * 0.05,$type, $name);
                }else{
                    var_dump('else');
                    $query = "UPDATE    `clients`
                              SET       `clients`.`bonuses` = `clients`.`bonuses` + ".(floatval($this->cost[$type] * $volume) * 0.05)."
                              WHERE     `clients`.`client_name` = '".$name."';";
                    mysqli_query($link, $query);
                }
                mysqli_close($link);
            }
            return 1;
        }
        else return -2;
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

class Client{
    //private int $id;
    private float $bonuses;
    public string $clientName;
    public string $fuelType;



    private Connect $Connect;

    public function __construct(float $bonuses, int $fuelType, string $clientName){
        $this->Connect = new Connect;
        $this->fuelType = $fuelType;
        $this->clientName = $clientName;
        $this->bonuses = $bonuses;

        if ($link = $this->Connect->getConnection()) {

            $query  = "INSERT into `clients` (client_name, bonuses, fuel_type)
                         VALUES ('$clientName', '$bonuses', '$fuelType')";
            mysqli_query($link, $query);
        }
        mysqli_close($link);
    }

    public function updateClient( ):void{

    }

    public function getClientData(string $data ): int|float|string{
        return match ($data) {
            //'id' => $this->id,
            'bonuses' => $this->bonuses,
            'name' => $this->clientName,
            'type' => $this->fuelType,
            default => -1
        };
    }
//    public function loadClients():void{
//        if ($link = $this->Connect->getConnection()) {
//            $query = "SELECT `id`, `bonuses`, `client_name`, `fuel_type`, FROM `clients`";
//            $result = mysqli_query($link, $query);
//            if ($result) {
//                while ($data = mysqli_fetch_array($result)) {
//                    $this->id = $data['id'];
//                    $this->bonuses = $data['bonuses'];
//                    $this->clientName = $data['client_name'];
//                    $this->fuelType = $data['fuel_type'];
//                }
//            }
//        }
//    }
}
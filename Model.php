<?php

class Model
{
//     sukuriami kintamieji kurie bus panaudojami userio kurimui (bjektui)
    public $name;
    public $age;
    public $sex;

//     Aprasom __construct kokie parametrai bus jam paduodami norin sukurti objekta
    public function __construct($name, $age, $sex){
//     priskiriamos reiksmes
        $this->name = $name;
        $this->age = $age;
        $this->sex =$sex;
    }
}

?>
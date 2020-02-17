<?php

// Modelis dazniausiai apraso kas bus atliekama, kaip atliekama.

class Model
{
// sukuriamas viesas kintamasis, jis pasiekiamas ir uz funkcijos/klases ribu jei yra sukurtas
    public $string;

// funkcija __construct priskiria kintamaji string kai tik sukuriamas sios klases objektas
    public function __construct(){
        $this->string = "MVC + PHP = Awesome!";
    }
}

?>
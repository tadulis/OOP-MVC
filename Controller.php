<?php

// Kontroleris dazniausiai nekuria nieko naujo, apjungia esamas klases ir metodus ir perduoda toliau
class Controller
{
//     sukuriamas privatus kintamasis
    private $model;

// sukuriamas __construct metodas kuris tik sukurus objekta panaudojus sia klase igyja sias savybes
    public function __construct($model) {
        $this->model = $model;
    }
}
?>
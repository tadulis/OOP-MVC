<?php
// Klase View sukuriam atvaizdavima ekrane, tai ka mes norime atvaizduoti
class View
{
//  Kintamuju aprasymas nurodanta ar jie bus pasiekiami tik funkcijos viduje ar ir uz jos ribu
    private $model;
    private $controller;

// Konstruktorius atlieka automatiskai jo viduje aprasyta koda kai sukuriamas objektas naudojantis sia klase
    public function __construct($controller,$model) {
        $this->controller = $controller;
        $this->model = $model;
    }

//     Sukuriamas metodas kuris atlieka tam tikra veiksma, siuo atveju i p taga iterpia musu stringa
    public function output(){
        return "<p>" . $this->model->string . "</p>";
    }
}

?>
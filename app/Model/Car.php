<?php

use Frame\Controller;

class Car extends Controller
{
    public function carsFilter()
    {
        if (isset($_POST['select'])) {
            var_dump($_POST);
            $carColor = $_POST['color'];
            $carFuel = $_POST['fuel'];
            return $this->db->select("SELECT * FROM car WHERE `color` = '$carColor' AND `fuel` = '$carFuel'");
        } else {
            return $this->db->select("SELECT * FROM car");
        }

        if (isset($_POST['allCars'])) {
            return $this->db->select("SELECT * FROM car");
        }
    }
}

?>
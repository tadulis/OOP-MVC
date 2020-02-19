<?php

include_once '../Database.php';

class Menu extends Database
{
    public function getMenu(){
        $param = [];
        $sql = "SELECT `name`, `link` FROM `menu`";

        print '<nav>';
        foreach($this->select($sql) as $button){
            print '<a class="menu-link" name="' . $button['name'] .  '" href="' . $button['link'] . '">' . $button['name'] . '</a>';
        }
        print '</nav>';
    }
}

?>
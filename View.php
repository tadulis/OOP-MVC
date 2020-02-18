<?php

class View
{
    private $model;
    private $controller;

    public function __construct($model, $controller){
        $this->model = $model;
        $this->controller = $controller;
    }

    public function printUserData($arrayObj){
        print '<table style="border:3px solid black; border-collapse: collapse; margin:30px;">';
            foreach($arrayObj as $userObj){
                print '<tr>';
                 foreach($userObj as $userData){
                    print '<td style="border:3px solid black; border-collapse: collapse">' . $userData . '</td>';
                 }
                 print '</tr>';
            }
        print '</table>';
    }

    public function printOneUserdata($obj){
        print '<table style="border:3px solid black; border-collapse: collapse; margin:30px;">';
            foreach($obj[0] as $userData){
                 print '<td style="border:3px solid black; border-collapse: collapse">' . $userData . '</td>';
            }
        print '</table>';
    }
}

?>
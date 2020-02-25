<?php

namespace Frame;

class Controller
{
    public $db;

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function model($model)
    {
		require_once "app/Model/" . $model . ".php";
		return new $model($this->db);
	}

	public function view($view, $data)
    {
        require_once "app/View/defaultUser/head.php";
        require_once "app/View/defaultUser/header.php";
        require_once "app/View/" . $view . ".php";
        require_once "app/View/defaultUser/footer.php";
    }

    public function viewLoginRegister($view, $data)
    {
        require_once "app/View/defaultUser/head.php";
        require_once "app/View/defaultUser/header.php";
        require_once "app/View/login/" . $view . ".php";
        require_once "app/View/defaultUser/footer.php";
    }
}
?>
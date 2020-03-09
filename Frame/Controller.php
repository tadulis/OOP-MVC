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
    require_once "app/View/" . $view . ".php";
    }

    public function viewLoginRegister($view, $data)
    {
        require_once "app/View/regLog/" . $view . ".php";
    }

    public function viewAdmin($view, $data)
    {
        require_once "app/View/admin/" . $view . ".php";
    }
}
?>
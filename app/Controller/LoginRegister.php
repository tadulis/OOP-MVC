<?php

use Frame\Controller;

class LoginRegister extends Controller
{
    public function register(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinksLoginRegister();
        $check = $this->model('LoginRegisterModel');
        $usersObjArray = $check->checkRegister();

        if(isset($_POST['register'])){
            foreach($usersObjArray as $userObj){
                if($_POST['email'] === $userObj->email){
                    $data['err'] = 'Toks vartotojas jau egzistuoja';
                    break;
                }elseif(!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirmation'])){
                    if($_POST['password'] === $_POST['password_confirmation']){
                        $check->insertRegister($_POST['name'], $_POST['email'], $_POST['password']);
                        return print 'irase';
                    }else{
                        $data['err'] = 'Slaptazodziai nesutampa.';
                    }
                }else{
                    $data['err'] = 'Uzpildykite visus laukelius.';
                }
            }
        }
        $this->viewLoginRegister('register', $data);
    }

    public function login(){
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinksLoginRegister();

        $login = $this->model('LoginRegisterModel');
        if(isset($_POST['login'])){
            var_dump($_POST);
            var_dump($login->pswByEmail($_POST['email']));
        }

        $this->viewLoginRegister('login', $data);
    }

    public function admin(){
        $data = [];
        $this->viewAdmin('admin', $data);
    }
}
?>
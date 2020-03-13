<?php

use Frame\Controller;

class LoginRegister extends Controller
{
    public function register()
    {
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinksLoginRegister();
        $check = $this->model('LoginRegisterModel');
        $usersObjArray = $check->checkRegister();

        if (isset($_POST['register'])) {
            foreach ($usersObjArray as $userObj) {
                if ($_POST['email'] === $userObj->email) {
                    $data['err'] = 'Toks vartotojas jau egzistuoja';
                    break;
                } elseif (!empty($_POST['name']) && !empty($_POST['email']) && !empty($_POST['password']) && !empty($_POST['password_confirmation'])) {
                    if ($_POST['password'] === $_POST['password_confirmation']) {
                        $check->insertRegister($_POST['name'], $_POST['email'], $_POST['password']);
                        $this->redirect('LoginRegister', 'login');
                    } else {
                        $data['err'] = 'Slaptazodziai nesutampa.';
                    }
                } else {
                    $data['err'] = 'Uzpildykite visus laukelius.';
                }
            }
        }
        $this->viewLoginRegister('register', $data);
    }

    public function login()
    {
        $menu = $this->model('Menu');
        $data['menu'] = $menu->getLinksLoginRegister();

        $login = $this->model('LoginRegisterModel');
        if (isset($_POST['login'])) {
            $userData = $login->pswByEmail($_POST['email'])[0];
            $_SESSION['email'] = $userData->email;
            $_SESSION['role'] = $userData->role;
        }

        if (isset($_SESSION['role']) && $_SESSION['role'] === 'admin') {
            $this->redirect('LoginRegister', 'admin');
        } elseif (isset($_SESSION['role']) && $_SESSION['role'] === 'user') {
            $this->redirect('Page', 'home');
        }
        $this->viewLoginRegister('login', $data);
    }

    public function admin()
    {
        $admin = $this->model('AdminModel');
        $data['fiveUsersData'] = $admin->fiveUsersData();
        $data['allUsersdata'] = $admin->allUsersdata();
        $this->viewAdmin('admin', $data);
    }

    public function createUser()
    {
        $admin = $this->model('AdminModel');
        $data['fiveUsersData'] = $admin->fiveUsersData();
        $data['allUsersdata'] = $admin->allUsersdata();
        $data['err'] = '';

        if (isset($_POST['createUser']) && !empty($_POST['userName']) && !empty($_POST['userEmail']) && !empty($_POST['userPassword']) && !empty($_POST['userRole'])) {
            $admin->insertUser($_POST['userName'], $_POST['userEmail'], $_POST['userPassword'], $_POST['userRole']);
            $data['err'] = 'Vartotojas issaugotas';
            $data['allUsersdata'] = $admin->allUsersdata();
        } elseif (isset($_POST['createUser']) || !empty($_POST['userName']) || !empty($_POST['userEmail']) || !empty($_POST['userPassword']) || !empty($_POST['userRole'])) {
            $data['err'] = 'Vartotojas nesukurtas, yra tusciu laukeliu';
        }
        $this->viewAdmin('createUser', $data);
    }

    public function logout()
    {
//             session_destroy();
        $this->redirect('LoginRegister', 'login');
    }
}

?>
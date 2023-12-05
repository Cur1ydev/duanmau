<?php

namespace App\Controllers;

use App\Models\User;

class UserController extends Controller
{
    private $model;
    public function  __construct()
    {
        $this->model = new User();
    }
    public function getUser(){
        $user = $this->model->getUser($_SESSION['id']);
        return $this->view('myaccount',compact('user'));
    }
    public function login(){
        $errors = [];
        $email = getRequest()->email ?? null;
        if(getRequest()->isMethod('post')){
            if (empty(getRequest()->email)) {
                $errors[] = 'Email phải được nhập';
            }
            if (empty(getRequest()->password)) {
                $errors[] = 'Mật khẩu phải được nhập';
            }
            if (count($errors) == 0) {
                $users = $this->model->list();
                foreach ($users as $user) {
                    if ($user->email == getRequest()->email && password_verify(getRequest()->password, $user->password)) {
                        if ($user->role_id == 1) {
                            $_SESSION['username'] = $user->username;
                            $_SESSION['id'] = $user->id;
                            redirect('/');
                        } else if ($user->role_id == 0) {
                            $_SESSION['admin'] = $user->username;
                            $_SESSION['id_admin'] = $user->id;
                            redirect('/admin');
                        }

                    }
                }
                if (!$_SESSION['usename']) {
                    $msg = "Thông tin đăng nhập không chính xác !";
                    return $this->view('login', compact('msg', 'errors'));
                }
            }

        }
        return $this->view('login', compact('errors', 'email'));
    }

    public function register()
    {
        $errors = [];
        $username = getRequest()->username ?? null;
        $email = getRequest()->email ?? null;
        if (getRequest()->isMethod('post')) {
            if (empty(getRequest()->username)) {
                $errors[] = 'Tên người dùng phải được nhập';
            }
            if (empty(getRequest()->email)) {
                $errors[] = 'Email phải được nhập';
            }
            if (empty(getRequest()->password)) {
                $errors[] = 'Mật khẩu phải được nhập';
            }
            if (empty(getRequest()->re_password)) {
                $errors[] = 'Vui lòng nhập lại mật khẩu';
            }
            if (getRequest()->password !== getRequest()->re_password) {
                $errors[] = '2 mật khẩu không khớp nhau, vui lòng thử lại';
            }
            $users = $this->model->list();
            foreach ($users as $user) {
                if ($user->email === getRequest()->email) {
                    $errors[] = 'Email đã tồn tại';
                }
            }
            if (count($errors) == 0) {
                $this->model->store(getRequest()->username, getRequest()->email, password_hash(getRequest()->password, PASSWORD_DEFAULT));
                redirect('/login');
            }
        }
        return $this->view('register', compact('errors', 'username', 'email'));
    }
}
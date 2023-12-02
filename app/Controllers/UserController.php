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
        $user = $this->model->getUser(1);
        return $this->view('myaccount',compact('user'));
    }
    public function login(){
        if(getRequest()->isMethod('post')){
            $users = $this->model->list();
            foreach ($users as $user){
                if($user->email == getRequest()->email && password_verify(getRequest()->password, $user->password)){
                    $_SESSION['username'] = $user->username;
                    $_SESSION['id'] = $user->id;
                    redirect('/');
                }
            }
            if(!$_SESSION['usename']){
                $msg = "Thông tin đăng nhập không chính xác !";
                return $this->view('login',compact('msg'));
            }
        }
        return $this->view('login');
    }
    public function logout(){
        unset($_SESSION['username']);
        unset($_SESSION['id']);
        redirect('/');
    }
}
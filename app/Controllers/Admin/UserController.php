<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\User;
use App\Traits\Middleware;

class UserController extends Controller
{
    use Middleware;

    private $model;

    public function __construct()
    {
        static::checkLogin();
        $this->model = new User();
    }

    public function list()
    {
        $users = $this->model->list();
        return $this->view('admin.users.list', compact('users'));
    }

    public function store()
    {
        $name = getRequest()->name ?? null;
        $email = getRequest()->email ?? null;
        $role = getRequest()->role_id ?? null;
        $password = getRequest()->password ?? null;
        $errors = [];
        if (getRequest()->isMethod('post')) {
            if (empty($name)) $errors[] = "Tên phải được nhập";
            if (empty($email)) $errors[] = "Email phải được nhập";
            if (empty($password)) $errors[] = "Mật khẩu phải được nhập";
            if (empty($role)) $errors[] = "Quyền phải được chọn";
            $users = $this->model->list();
            foreach ($users as $user) {
                if ($user->email === getRequest()->email) {
                    $errors[] = 'Email đã tồn tại';
                }
            }
            if (count($errors) == 0) {
                $this->model->store($name, $email, password_hash($password, PASSWORD_DEFAULT), $role);
                redirect('/admin/user');
            }
        }
        return $this->view('admin.users.add', compact('name', 'email', 'role', 'errors'));
    }

    public function update($id)
    {
        $user = $this->model->getUser($id);
        $name = $user->username ?? null;
        $email = $user->email ?? null;
        $role = $user->role_id ?? null;
        $password = $user->password ?? null;
        $errors = [];
        if (getRequest()->isMethod('post')) {
            $name = getRequest()->name ?? null;
            $email = getRequest()->email ?? null;
            $role = getRequest()->role ?? null;
            $password = getRequest()->password ?? null;
            if (empty($name)) $errors[] = "Tên phải được nhập";
            if (empty($email)) $errors[] = "Email phải được nhập";
            if (empty($password)) $errors[] = "Mật khẩu phải được nhập";
            if (empty($role) && $role < 0) $errors[] = "Quyền phải được chọn";
            if (count($errors) == 0) {
                $this->model->update($name, $email, password_hash($password, PASSWORD_DEFAULT), $role, $id);
                redirect('/admin/user');
            }
        }
        return $this->view('admin.users.update', compact('name', 'email', 'role', 'errors'));
    }
    public function delete($id)
    {
        $this->model->delete($id);
        redirect('/admin/user');
    }


}

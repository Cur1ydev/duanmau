<?php

namespace App\Controllers\Admin;

use App\Controllers\Controller;
use App\Models\Comment;
use App\Traits\Middleware;

class CommentController extends Controller
{
    use Middleware;

    private $model;

    public function __construct()
    {
        static::checkLogin();
        $this->model = new Comment();
    }

    public function list()
    {
        $comments = $this->model->commentWithProduct();
        return $this->view('admin.comments.list', compact('comments'));
    }
    public function delete($id){
        $this->model->delete($id);
        redirect('/admin/comment');
    }

}
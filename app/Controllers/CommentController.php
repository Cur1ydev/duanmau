<?php

namespace App\Controllers;

use App\Models\Comment;

class CommentController extends Controller
{
    private $model;

    public function __construct()
    {
        $this->model = new Comment();
    }

    public function comment()
    {
        if (!getRequest()->comment) return back();
        else {
            $this->model->store(getRequest()->comment, getRequest()->user_id, getRequest()->product_id);
            return back();
        }
    }
}
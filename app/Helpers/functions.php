<?php

use App\Models\Category;
use Illuminate\Http\Request;

if (!function_exists('getRequest')) {
    function getRequest()
    {
        return Request::capture();
    }
}
if (!function_exists('getAll')) {
    function getAll($sql, $model)
    {
        $model->setQuery($sql);
        return $model->loadAllRows();
    }
}
if (!function_exists('getOne')) {
    function getOne($sql, $model, $value = null)
    {
        $model->setQuery($sql);
        return $model->loadRow($value);
    }
}
if (!function_exists('insertTable')) {
    function insertTable($sql, $model, $value)
    {
        $model->setQuery($sql);
        return $model->execute($value);
    }
}
if (!function_exists('updateTable')) {
    function updateTable($sql, $model, $value)
    {
        $model->setQuery($sql);
        return $model->execute($value);
    }
}
if (!function_exists('deleteTable')) {
    function deleteTable($sql, $model, $id)
    {
        $model->setQuery($sql);
        return $model->execute([$id]);
    }
}
if (!function_exists('getCategory')) {
    function getCategory()
    {
        $category = new Category();
        return $category->list();
    }
}
if (!function_exists('redirect')) {
    function redirect($url)
    {
        header('Location:' . $url);
    }
}
if (!function_exists('getSession')) {
    function getSession()
    {
        return $_SESSION['username'] ?? false;
    }
}
if (!function_exists('back')) {
    function back()
    {
        header("Location: " . $_SERVER['HTTP_REFERER']);
        exit();
    }
}

<?php

namespace App\Controllers;
use eftec\bladeone\BladeOne;

class Controller
{
    public function view($viewFile, $data = [])
    {
        $viewDir = "resources/view";
        $storageDir = "./storage";
        $blade = new BladeOne($viewDir, $storageDir, BladeOne::MODE_DEBUG);
        return $blade->run($viewFile, $data);
    }
}
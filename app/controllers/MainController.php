<?php 

namespace app\controllers;

use app\core\Controller;
use app\database\DB;

class MainController extends Controller
{
    public function index()
    {
        $this->view->layout = 'layouts.default';
        $this->view->render(['content' => 'main.index'], ['count' => 10]);
    }
}
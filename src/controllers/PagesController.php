<?php
require_once __DIR__ . '/../models/SearchModel.php';

class PagesController
{
    public function home()
    {
        require_once(__DIR__ . '/../views/pages/home.php');
    }

    public function error()
    {
        require_once(__DIR__ . '/../views/pages/error.php');
    }
}

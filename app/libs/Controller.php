<?php

class Controller
{
    public function view($view, $params = [])
    {
        if (file_exists(URL_APP . "/views/" . $view . ".php")) {
            require_once URL_APP . "/views/" . $view . ".php";
        } else {
            echo "The view doesn't exist";
        }
    }

    public function model($model)
    {
        require_once URL_APP . "/models/" . $model . ".php";
        return new $model;
    }
}

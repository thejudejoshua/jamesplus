<?php

class Controller{

    
    
    protected function model($model){
        require_once './app/models/' . $model . '.model.php';
        return new $model;
    }

    protected function view($view, $data = []){
        if(!file_exists('./app/views/' . $view . '.php')){
            $controller = 'errors';
            $method = 'not_found';
            require_once './app/controllers/'. $controller . '.contr.php';
            $params = [];

            call_user_func_array([$controller, $method], $params);
    
            return false;
        }else{
            require_once './app/views/' . $view . '.php';
        }
    }
    
}
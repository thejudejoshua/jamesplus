<?php

class Home extends Controller
{
    public function index()
    {
        $projectClass = $this->model('Project');

        $projectList = $projectClass->getHomeProjectList();

        $this->view('home/index', [

            'projectList' => $projectList

        ]);
    }
    
}
<?php

class Blog extends Controller
{
    public function index()
    {
        $projectClass = $this->model('Project');

        $projectList = $projectClass->getProjectList();
        
        $ui_ux = 0;
        $web = 0;
        foreach ($projectList as $key => $project)
        {
            if($project['project_type'] == 'UI/UX'){
                $ui_ux++;
            }else{
                $web++;
            }
        }
        
        $this->view('blog/index', [
            
            'projectList' => $projectList,
            'web' => $web,
            'ui_ux' => $ui_ux

        ]);
    }

}
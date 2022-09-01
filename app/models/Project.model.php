<?php

class Project extends Db
{
	public function getProjectList()
    {
        try {
            $query = "SELECT `unique_id`, `project_type`, `project_data`, `project_cover_img`, `project_img_directory` FROM `projects` ORDER BY RAND()";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([]);
            $data = $stmt->fetchAll();
            return $data;
        } catch(PDOException $e){
            return "error=Failed! <br>" . $e->getMessage();
        }
    }
    
    public function getHomeProjectList()
    {
        try {
            $query = "SELECT `unique_id`, `project_type`, `project_data`, `project_cover_img`, `project_img_directory` FROM `projects` WHERE `project_type` = 'UI/UX' OR  `project_type` = 'UI/UX, Web design' ORDER BY RAND()";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([]);
            $data = $stmt->fetchAll();
            return $data;
        } catch(PDOException $e){
            return "error=Failed! <br>" . $e->getMessage();
        }
    }

    public function getProjectData($project_unique_id)
    {
        try {
            $query = "SELECT * FROM `projects` WHERE `unique_id` = :project_unique_id";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([
            	':project_unique_id' => $project_unique_id
            ]);
            $data = $stmt->fetchAll();
            return $data;
        } catch(PDOException $e){
            return "error=Failed! <br>" . $e->getMessage();
        }
    }

    public function addProjectData($project_unique_id, $project_type, $project_cover_img, $project_img_directory, $project_data, $project_duration)
    {
        try {
            $query = "INSERT INTO `projects`(`unique_id`, `project_type`, `project_cover_img`, `project_img_directory`, `project_data`, `project_duration`) VALUES (:project_unique_id,:project_type,:project_cover_img,:project_img_directory,:project_data,:project_duration)";
            $stmt = $this->connect()->prepare($query);
            $stmt->execute([
            	':project_unique_id' => $project_unique_id,
            	':project_type' => $project_type,
            	':project_cover_img' => $project_cover_img,
            	':project_img_directory' => $project_img_directory,
            	':project_data' => $project_data,
            	':project_duration' => $project_duration
            ]);
            return true;
        } catch(PDOException $e){
            return "error=Failed! <br>" . $e->getMessage();
        }
    }

}
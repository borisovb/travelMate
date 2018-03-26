<?php

class storyClass
{
    public function GetAllStories()
    {
        try {
            $db = getDB();
            $getStories = $db->prepare("SELECT * FROM stories");
            $getStories->execute();
            $result = $getStories->fetchAll();
            return $result;

        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }

    public function GetStory($id)
    {
        try {
            $db = getDB();
            $getStory = $db->prepare("SELECT * FROM stories WHERE id=:id");
            $getStory->bindParam("id", $id, PDO::PARAM_STR);
            $getStory->execute();
            $result = $getStory->fetchAll();
            return $result;
            
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }

}

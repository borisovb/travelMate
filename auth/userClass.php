<?php

class userClass
{
    public function userLogin($usernameEmail, $password)
    {
        try {
            $db = getDB();
            $hash_password = hash('sha256', $password);
            $stmt = $db->prepare("SELECT id FROM users WHERE (username=:usernameEmail or email=:usernameEmail) AND password=:hash_password");
            $stmt->bindParam("usernameEmail", $usernameEmail, PDO::PARAM_STR);
            $stmt->bindParam("hash_password", $hash_password, PDO::PARAM_STR);
            $stmt->execute();
            $count = $stmt->rowCount();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            $db = null;

            if ($count) {
                $_SESSION['id'] = $data->id;
                return true;
            } else {
                return false;
            }
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }

    }

    public function userRegistration($username, $password, $email)
    {
        try {
            $db = getDB();
            $st = $db->prepare("SELECT id FROM users WHERE username=:username OR email=:email");
            $st->bindParam("username", $username, PDO::PARAM_STR);
            $st->bindParam("email", $email, PDO::PARAM_STR);
            $st->execute();
            $count = $st->rowCount();

            if ($count < 1) {
                $stmt = $db->prepare("INSERT INTO users(username,password,email) VALUES (:username,:hash_password,:email)");
                $stmt->bindParam("username", $username, PDO::PARAM_STR);
                $hash_password = hash('sha256', $password);
                $stmt->bindParam("hash_password", $hash_password, PDO::PARAM_STR);
                $stmt->bindParam("email", $email, PDO::PARAM_STR);
                $stmt->execute();
                $id = $db->lastInsertId();
                $db = null;
                $_SESSION['id'] = $id;
                return true;
            } else {
                $db = null;
                return false;
            }

        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }

    public function userDetails($id)
    {
        try {
            $db = getDB();
            $stmt = $db->prepare("SELECT email,username FROM users WHERE id=:id");
            $stmt->bindParam("id", $id, PDO::PARAM_INT);
            $stmt->execute();
            $data = $stmt->fetch(PDO::FETCH_OBJ);
            return $data;
        } catch (PDOException $e) {
            echo '{"error":{"text":' . $e->getMessage() . '}}';
        }
    }
}

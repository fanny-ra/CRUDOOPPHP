<?php

include("DB.php");

class User extends DB {
    public function getAll()
    {
        return $this->connect->query("SELECT * FRom users")->fetch_all(MYSQLI_ASSOC);
    }

    public function getUserById($id)
    {
        return $this->connect->query("SELECT * FROM users WHERE id='$id'")->fetch_assoc();
    }

    public function create($name, $username, $password)
    {
        return $this->connect->query("INSERT INTO users (name, username, password) VALUES ('$name', '$username', '$password')");
    }

    public function update($name, $username, $password) 
    {
       return $this->connect->query("UPDATE users SET name = '$name', username = '$username', password = '$password'");
    }

    public function delete($id)
    {
        return $this->connect->query("DELETE FROM users WHERE id = '$id'");
    }
}

?>
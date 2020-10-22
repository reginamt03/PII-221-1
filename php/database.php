<?php

class Database
{

    #Atributos
    public $hostname;
    public $username;
    public $password;
    public $database;

    #Constructor
    public function __construct($hostname, $username, $password, $database)
    {
        $this->hostname = $hostname;
        $this->username = $username;
        $this->password = $password;
        $this->database = $database;
    }

    #method
    public function testconnect()
    {
        $connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

        if ($connection->connect_error) {
            die("connection failed: " . $connection->connect_error);
        }

        echo "Connected successfully";
    }

    #Create method
    public function create($table, $email, $password)
    {
        $connection = new mysqli($this->hostname, $this->username, $this->password, $this->database);

        if ($connection->connect_error) {
            die("connection failed: " . $connection->connect_error);
        }
        $query = "INSERT INTO $table (email, password) VALUES('$email','$password');";
        if ($connection->query($query) === TRUE) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $query . "<br>" . $connection->error;
        }
        $connection->close();
    }
}

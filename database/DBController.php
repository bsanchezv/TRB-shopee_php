<?php

/*
class DBController
{
    // Database Connection Properties
    protected $host = 'remotemysql.com';
    protected $user = 'ZUCZxBxbsp';
    protected $password = 'GwmhNXBD0J';
    protected $database = "ZUCZxBxbsp";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Error " . $this->con->connect_error;
        }
    }
    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
*/

class DBController
{
    // Database Connection Properties
    protected $host = 'remotemysql.com';
    protected $user = 'ZUCZxBxbsp';
    protected $password = 'GwmhNXBD0J';
    protected $database = "ZUCZxBxbsp";

    // connection property
    public $con = null;

    // call constructor
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error) {
            echo "Error " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection
    protected function closeConnection()
    {
        if ($this->con != null) {
            $this->con->close();
            $this->con = null;
        }
    }
}

<?php

    class DB
    {
        var $conn;
        var $sql;

        function __construct()
        {
            $this->conn = mysqli_connect("localhost", "root", "", "cms");
            if (!$this->conn)
            {
                die("Connection failed: " . mysqli_connect_error());
            }
        }
    }

    class pages extends DB
    {
        function __construct()
        {
            $this->sql = mysqli_query($this->conn, "SELECT * FROM pages");
        }
    }
?>
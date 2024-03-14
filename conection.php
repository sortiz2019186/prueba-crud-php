<?php
    function connection(){
        $host = "localhost";
        $user = "roor";
        $pass = "";

        $bd = "dbcrudusuarios";

        $connect = mysqli_connect($host, $user, $pass);

        mysqli_select_db($connect, $db);

        return connect;
    };
?>
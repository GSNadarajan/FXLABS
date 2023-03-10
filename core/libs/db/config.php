<?php
$path = $_SERVER['DOCUMENT_ROOT']."/FX-LABS/core/";
define("GLOBAL_PATH", $path);

class Database
{
    public static $conn = null;
    /**
     * get the connection 
     *
     * @return connection
     */
    public static function getConnection()
    { 
        if (Database::$conn == null) {

            $servername = get_config('db_servername');
            $username = get_config('db_username');
            $password = get_config('db_password');
            $dbname = get_config('db_name');

            // Create connection
            $connection = new mysqli($servername, $username, $password, $dbname);
            // Check connection
            if ($connection->connect_error) {
                // echo "connection failed";
                die("Connection failed: " . $connection->connect_error); //TODO: Replace this with exception handling
            } else {
                // printf("New connection establishing...");
                // echo $servername;
                // echo "connection success";
                Database::$conn = $connection; //replacing null with actual connection
                return Database::$conn;
            }
        } else {
            // echo "connection success";

            // printf("Returning existing establishing...");
            return Database::$conn;
        }
    }
}

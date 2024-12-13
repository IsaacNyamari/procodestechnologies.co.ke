<?php

class Dbh
{
    protected $hostname = "localhost";
    protected $username = "root";
    protected $password = "";
    protected $database = "procodestechnologies";

    protected function connect()
    {
        $conn = new mysqli($this->hostname, $this->username, $this->password, $this->database);
        return $conn;
    }
}

class GetCourses extends Dbh
{
    function getCourses(string $course = null,string $token=null)
    {
        switch ($course) {
            case 'all':
                $sql = "SELECT * FROM courses";
                break;

            default:
                $sql = "SELECT * FROM courses where `course_id`='$token'";
                break;
        }
        $conn = $this->connect();

        $results = $conn->query($sql);
        if (mysqli_num_rows($results) > 0) {
            $rows =  mysqli_fetch_all($results, 1);
            return $rows;
        }
    }
}


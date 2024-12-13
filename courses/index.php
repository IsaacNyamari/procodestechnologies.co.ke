<?php
include("../includes/db.php");
$courses = new GetCourses();
if (isset($_GET['course']) && $_GET['course'] !== "") {
    $course =  $_GET['course']; 
    $title = ucfirst($_GET['course']) . " Development";
    $coursesResult = $courses->getCourses("$course");
    var_dump($coursesResult);
} else {
    $title = 'Courses ';
    $course =  "all"; 
    $coursesResult = $courses->getCourses("$course");
    var_dump($coursesResult);
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/uploads/logo.jpg" type="image/x">
    <title>
        <?php echo $title ?> - Pro Codes Technologies</title>
    <?php include_once("../kw.php") ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
</head>

<body>
    <?php
    include("../nav.php")
    ?>

    <?php

    echo bin2hex(random_bytes(30));

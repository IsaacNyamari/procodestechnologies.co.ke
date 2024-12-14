<?php
include("../includes/db.php");
$coursesResult = "";
$courses = new GetCourses();
if (isset($_GET['course']) && $_GET['course'] !== "" && isset($_GET['token'])) {
    $course =  $_GET['course'];
    $token =  $_GET['token'];
    $title = ucfirst($_GET['course']);
    $coursesResult = $courses->getCourses("$course", "$token");
} else {
    $title = 'Courses ';
    $course =  "all";
    $coursesResult = $courses->getCourses("$course");
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
    <div class="loader-container" id="loader-container">
        <div class="loader"></div>
    </div>

    <?php
    include("../nav.php")
    ?>
    <section>
        <div class="container mb-5">
            <div
                class="row justify-content-between align-items-center m-1 g-1">
                <h2 class="text-danger mb-5"><?php echo $title ?></h2>
                <div class="container  py-4">
                    <div class="row g-4">
                        <?php if ($coursesResult) {
                            foreach ($coursesResult as $course) { ?>

                                <div class="text-dark bg-light course-item shadow-sm rounded mb-4 d-flex">
                                    <div class="course w-50" style="width: 30%;">
                                        <img src="<?php echo $course['poster'] ?>" alt="<?php echo $course['name'] ?>" class="img-fluid rounded-top">
                                    </div>
                                    <div class=" w-50 course course-desc p-4" style="width: 50%;">
                                        <h4 class="text-start">What`s included in <?php echo $course['name'] ?></h4>
                                        <ul><?php echo $course['includes'] ?></ul>
                                        <span class="price mb-2 d-block text-danger fw-bold">Kshs. <?php echo $course['course_fee'] ?>/=</span>
                                        <a href="/courses/?course=<?php echo $course['name'] ?>&token=<?php echo $course['course_id'] ?>" class="btn btn-danger btn-lg">Enroll</a>
                                    </div>
                                </div>
                            <?php }
                        } else { ?>
                            <div class="" style="height: 50vh; align-content:center;justify-content:center; align-items:center; display:flex;flex-direction:column">
                                <h1 class="text-center text-danger" style="font-size: 200px;font-weight:900">404</h1>
                                <p class="text-center" style="font-size: 30px;">Oops! The page you're looking for doesn't exist.</p>
                                <a href="/" class="btn btn-danger text-center">Go Back to Homepage</a>
                            </div>
                        <?php  } ?>
                        <!-- Add more course items here -->
                    </div>
                </div>

            </div>

        </div>
    </section>
    <!-- Footer -->
    <footer class="footer">
        <div class="container text-center">
            <p>&copy; 2024 Pro Codes Technologies. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
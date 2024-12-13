<?php
include("./includes/db.php");
$courses = new GetCourses();
$get =  "all";
$coursesResult = $courses->getCourses("$get");
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="/uploads/logo.jpg" type="image/x">
    <title>Home - Pro Codes Technologies</title>
    <?php include_once("kw.php") ?>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/lazysizes/5.3.2/lazysizes.min.js" async></script>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="/uploads/logo.jpg" alt="nav-logo" class="nav-logo"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about/">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/services/">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact/">Contact</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/terms/">Terms</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/privacy/">Privacy Policy</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div id="toast"></div>
    <div class="loader-container" id="loader-container">
        <div class="loader"></div>
    </div>
    <!-- Hero Section -->
    <section class="hero-section" style="background:url('/uploads/banner1.jpg')">
        <div class="container text-center">
            <h1 class="animate__animated animate__fadeInDown">Welcome to Pro Codes Technologies</h1>
            <p class="animate__animated animate__fadeInUp">Innovative Solutions for Your Digital Success.</p>
            <a href="#about" class="btn btn-custom mt-3 animate__animated animate__zoomIn">Learn More</a>
        </div>
    </section>

    <!-- About Section -->
    <!-- Isaac Nyamari Section -->
    <section class="team-section py-5 animate__animated animate__fadeInDown mt-3" id="founder">
        <div class="container-fluid text-center">
            <h2 class="text-uppercase text-danger mb-4">Meet Our Founder</h2>
            <div class="row justify-content-center bg-light">
                <div class="col-sm-6">
                    <img src="/uploads/IMG_0131.jpg" alt="Isaac Nyamari" class="card-img-top img-fluid mx-auto mt-4" style="width: 70%; height: 70%; border: 2px solid #ff0000;">
                    <h4 class="text-center text-danger">FOUNDER </h4>
                    <p class="text-center text-dark text-start">Isaac Nyamari<sup><img src="/uploads/checklist_10629607.png" alt="" width="18px"></sup></p>
                </div>
                <div class="col-sm-6">
                    <div class="card mt-4 mb-2" style="border:none">
                        <div class="card-body">
                            <p class="card-text text-dark text-start">Founder & Senior Developer at Pro Codes Technologies</p>
                            <p class="card-text text-dark text-start">
                                <strong>Founder and Visionary Leader:</strong> Isaac Nyamari is the driving force behind <strong>Pro Codes Technologies</strong>, specializing in cutting-edge tech solutions tailored to meet business needs.
                            </p>
                            <p class="card-text text-dark text-start">
                                <strong>Expert Developer:</strong> Isaac’s expertise spans programming languages like <strong>PHP</strong> and <strong>JavaScript</strong>, as well as platforms and tools like <strong>WordPress</strong>, <strong>Divi</strong>, and <strong>Elementor</strong>, ensuring innovative and scalable solutions.
                            </p>
                            <p class="card-text text-dark text-start">
                                <strong>Experience:</strong> Isaac has successfully led projects such as:
                            <ul class="text-dark text-start">
                                <li>Cryptocurrency platforms</li>
                                <li>E-commerce web applications</li>
                                <li>API development and integration</li>
                            </ul>
                            </p>
                            <p class="card-text text-dark text-start">
                                <strong>Leadership Philosophy:</strong> Creativity and functionality define Isaac’s approach, positioning <strong>Pro Codes Technologies</strong> as a trusted leader in web and software development.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>



    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            <h2 class="mb-5">Our Services</h2>
            <div id="servicesCarousel" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img data-src="/uploads/webdevelopment.jpg" class="lazyload img-fluid rounded" alt="Service 1">
                            </div>
                            <div class="col-md-6 desc">
                                <h3>Web Development</h3>
                                <p>Building responsive and functional websites to bring your ideas to life.</p>
                            </div>
                        </div>
                    </div>

                    <div class="carousel-item">
                        <div class="row align-items-center">
                            <div class="col-md-6">
                                <img data-src="uploads/digital-marketing.jpg" class="lazyload img-fluid rounded" alt="Service 3">
                            </div>
                            <div class="col-md-6 desc">
                                <h3>Digital Marketing</h3>
                                <p>Enhancing your online presence with effective marketing strategies.</p>
                            </div>
                        </div>
                    </div>

                </div>
                <button class="carousel-control-prev" type="button" data-bs-target="#servicesCarousel" data-bs-slide="prev">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next" type="button" data-bs-target="#servicesCarousel" data-bs-slide="next">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
    <!-- Courses Section -->
    <section>
        <div class="container mb-5">
            <div
                class="row justify-content-between align-items-center m-1 g-1">
                <h2 class="text-danger mb-5">Courses</h2>
                <div class="container py-4">
                    <div class="row g-4">
                        <?php foreach ($coursesResult as $course) { ?>
                            <div class="col-md-6 col-lg-4">
                                <div class="bg-light text-dark course-item shadow-sm rounded">
                                    <div class="course course-img">
                                        <img src="<?php echo $course['poster'] ?>" alt="<?php echo $course['name'] ?>" class="img-fluid rounded-top">
                                    </div>
                                    <div class="course course-desc p-4">
                                        <h4 class="text-center"><?php echo $course['name'] ?></h4>
                                        <ul><?php echo $course['includes'] ?></ul>
                                        <span class="price mb-2 d-block text-danger fw-bold">Kshs. <?php echo $course['course_fee'] ?>/=</span>
                                        <a href="/courses/?course=<?php echo $course['name'] ?>&token=<?php echo $course['course_id'] ?>" class="btn btn-danger btn-lg">Enroll</a>
                                    </div>
                                </div>
                            </div>
                        <?php } ?>
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

    <script src="script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
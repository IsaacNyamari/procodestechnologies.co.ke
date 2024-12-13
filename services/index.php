<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <?php include_once("../kw.php")?>
    <link rel="shortcut icon" href="../uploads/logo.jpg" type="image/x">
    <title>Services - Pro Codes Technologies</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="../style.css">
</head>
<body>
    <!-- Navbar -->
    <?php include_once("../nav.php")?>
<div class="hero-section" style="background: url('data:image/jpeg;base64,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') no-repeat; background-size:cover">
<h1 class="text-center mb-5" style="color: #ff0000;">Our Services</h1>
</div>
    <!-- Services Section -->
    <section class="services-section">
        <div class="container">
            
            
            <!-- Service 1 -->
            <div class="service-block">
                <img src="../uploads/webdevelopment.jpg" alt="Web Development">
                <div>
                    <h5>Web Development</h5>
                    <p>Our team builds responsive, fast, and visually stunning websites tailored to your specific business needs. We utilize the latest technologies to create user-friendly experiences for your customers.</p>
                    <p>Whether you need a corporate website, e-commerce platform, or a custom web solution, we've got you covered.</p>
                </div>
            </div>

          
            <!-- Service 3 -->
            <div class="service-block">
                <img src="../uploads/digital-marketing.jpg" alt="Digital Marketing">
                <div>
                    <h5>Digital Marketing</h5>
                    <p>Our digital marketing services include SEO, social media management, content marketing, and pay-per-click campaigns. We help you reach your target audience and grow your online presence effectively.</p>
                    <p>Let us craft a strategy that drives measurable results for your business.</p>
                </div>
            </div>

            <!-- Service 4 -->
            <div class="service-block">
                <img src="../uploads/seo.jpg" alt="SEO Optimization">
                <div>
                    <h5>SEO Optimization</h5>
                    <p>Our SEO services ensure your website ranks higher in search engine results, driving organic traffic and increasing visibility. We focus on both on-page and off-page SEO strategies.</p>
                    <p>Let us improve your search engine rankings and help your business grow.</p>
                </div>
            </div>

            <!-- Service 5 -->
            <div class="service-block">
                <img src="../uploads/cloud.jpg" alt="Cloud Solutions">
                <div>
                    <h5>Cloud Solutions</h5>
                    <p>We provide cloud integration services to help your business transition to modern, scalable, and efficient cloud platforms. Our services include cloud migration, storage, and computing solutions.</p>
                    <p>Embrace the power of the cloud and improve your operational efficiency.</p>
                </div>
            </div>

            <!-- Service 6 -->
            <div class="service-block">
                <img src="../uploads/support.jpg" alt="Technical Support">
                <div>
                    <h5>Technical Support</h5>
                    <p>Our 24/7 technical support team ensures your systems remain operational without any interruptions. We provide troubleshooting, maintenance, and IT consulting services.</p>
                    <p>Rest easy knowing our experts are just a call away.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Pro Codes Technologies. All Rights Reserved.</p>
        </div>
    </footer>
    <script src="../script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

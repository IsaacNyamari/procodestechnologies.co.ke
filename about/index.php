<?php
// include($_SERVER['DOCUMENT_ROOT'] . '/nav.php');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <?php include_once("../kw.php")?>
    <link rel="shortcut icon" href="../uploads/logo.jpg" type="image/x">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - Pro Codes Technologies</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>

<body>
<!-- NavBar -->
    <?php include_once("../nav.php") ?>


    <!-- Hero Section -->
    <section class="hero-section text-center" style="background: url('data:image/jpeg;base64,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') no-repeat; background-size:cover">
        <div class="container">
        <h2>About Us</h2>
            <p>Your partner in tech innovation, delivering cutting-edge solutions that drive success.</p>
        </div>
    </section>

    <!-- About Us Section -->
    <section class="about-section py-5">
        <div class="container text-center">
        <h2>About Us</h2>
            <p>At Pro Codes Technologies, we are committed to providing top-notch IT solutions that empower businesses to grow. We specialize in web development, software solutions, mobile app development, and IT consulting.</p>
            <p>Founded by a group of passionate tech enthusiasts, we aim to make technology work for everyone, offering innovative solutions that are both accessible and scalable.</p>
        </div>
    </section>

    <!-- Our Team Section -->
    <section class="team-section py-5">
        <div class="container text-center">
            <h2>Meet Our Team</h2>
            <p>Our talented and dedicated team members are the heart of our success.</p>
            <div class="row">
                <div class="col-md-4 team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 1">
                    <h4>John Doe</h4>
                    <p>CEO & Founder</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 2">
                    <h4>Jane Smith</h4>
                    <p>Lead Developer</p>
                </div>
                <div class="col-md-4 team-member">
                    <img src="https://via.placeholder.com/150" alt="Team Member 3">
                    <h4>Michael Brown</h4>
                    <p>Head of Design</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section class="contact-section text-center">
        <div class="container">
            <h2>Get in Touch</h2>
            <p>Have a question or want to discuss a project? Reach out to us!</p>
            <div class="row justify-content-center">
                <div class="col-md-8">
                    <form class="contact-form">
                        <div class="form-row">
                            <div class="form-group col-md-12">
                                <input type="text" id="names" name="names" class="form-control" placeholder="Your Name" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Your Email" required>
                            </div>
                            <div class="form-group col-md-12">
                                <input type="text" id="subject" name="subject" class="form-control" placeholder="Your Subject" required>
                            </div>
                        </div>
                        <div class="form-group">
                            <textarea class="form-control" id="message" name="message" rows="4" placeholder="Your Message" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-custom">Send Message</button>
                    </form>
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

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        let contactForm = document.querySelector(".contact-form")
        let xhr = new XMLHttpRequest();
        contactForm.addEventListener("submit", (e) => {
            e.preventDefault();
            xhr.open("POST", "../mailer.php", true);
            let formData = new FormData(contactForm);
            formData.append("contact", "contact")
            xhr.onload = function() {
                console.log(this.response);

            }
            xhr.send(formData)
        })

        function showToast(message) {
            const toast = document.getElementById("toast");
            toast.textContent = message;
            toast.classList.add("show");

            setTimeout(() => {
                toast.classList.remove("show");
            }, 3000); // Toast will disappear after 3 seconds
        }
        // showToast()
    </script>
    <script src="../script.js"></script>
</body>

</html>
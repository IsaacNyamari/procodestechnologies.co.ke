<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="../uploads/logo.jpg" type="image/x">
    <?php include_once("../kw.php") ?>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Pro Codes Technologies</title>
    <link rel="stylesheet" href="../awesome/css/font-awesome.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../style.css">
</head>

<body>

    <?php include_once("../nav.php") ?>
    <div class="hero-section" style="background: url('data:image/png;base64,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') no-repeat; background-size:cover">
        <div class="container">
            <h1 class="text-white text-center py-5">Get in touch with us </h1>
        </div>
    </div>

    <!-- Contact Section -->
    <section class="contact-section text-center">
        <div class="container">
            <h2>Contact Us</h2>
            <p>Have a question or want to discuss a project? Reach out to us!</p>
            <div class="row justify-content-center">
                <div class="col-md-6">
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
                <div class="col-md-6 mt-3">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7977.522327856938!2d36.892465099999995!3d-1.3189862999999986!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1sen!2ske!4v1733954316832!5m2!1sen!2ske" width="100%" height="100%" style="border:0; border-radius:15px" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
            </div>
        </div>

    </section>

    <div class="container">
        <div class="row m-3 cta">
            <h2 class="text-center">Contact Information</h2>
            <div class="col">
                <div>
                    <h5>Location:</h5>
                    <i class="fa fa-map"></i>
                    <span>Pipeline Embakasi, Opp Kenya Builders</span>
                </div>
                <div>
                    <h5>Email:</h5>
                    <i class="fa fa-envelope"></i>
                    <span><a href="mailto:admin@procodestechnologies.co.ke">admin@procodestechnologies.co.ke</a></span>
                </div>
            </div>
            <div class="col">
                <div>
                <h5>Phone:</h5>
                <i class="fa fa-phone" aria-hidden="true"></i>
                <span><a href="tel:+254759900802">+254759900802</a></span>
            </div>
            <div>
                    <h5>Support:</h5>
                    <i class="fa fa-users" aria-hidden="true"></i>
                    <span><a href="mailto:support@procodestechnologies.co.ke">support@procodestechnologies.co.ke</a></span>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Pro Codes Technologies. All Rights Reserved.</p>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="../script.js"></script>
    <script>
        let contactForm = document.querySelector(".contact-form");
        let xhr = new XMLHttpRequest();
        contactForm.addEventListener("submit", (e) => {
            e.preventDefault();
            xhr.open("POST", "../mailer.php", true);
            let formData = new FormData(contactForm);
            formData.append("contact", "contact");
            xhr.onload = function() {
                if (this.status === 200) {
                    showToast("Message sent successfully!");
                    contactForm.reset(); // Clear the form after successful submission
                } else {
                    showToast("Error sending message. Please try again.");
                }
            };
            xhr.onerror = function() {
                showToast("Network error. Please check your connection.");
            };
            xhr.send(formData);
        });

        function showToast(message) {
            const toast = document.getElementById("toast");
            toast.textContent = message;
            toast.classList.add("show");

            setTimeout(() => {
                toast.classList.remove("show");
            }, 3000);
        }
    </script>


</body>

</html>
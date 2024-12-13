<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toast Notification</title>
    <style>
        /* Toast container */
        #toast {
            visibility: hidden;
            min-width: 250px;
            margin-left: -125px;
            background-color: #333;
            color: #fff;
            text-align: center;
            border-radius: 4px;
            padding: 16px;
            position: fixed;
            z-index: 1;
            left: 50%;
            bottom: 30px;
            font-size: 17px;
            opacity: 0;
            transition: opacity 0.3s ease-in-out, visibility 0.3s ease-in-out;
        }

        /* Show the toast */
        #toast.show {
            visibility: visible;
            opacity: 1;
        }
    </style>
</head>
<body>
    <!-- Contact Form -->
    <form class="contact-form">
        <input type="text" name="name" placeholder="Your Name" required />
        <input type="email" name="email" placeholder="Your Email" required />
        <textarea name="message" placeholder="Your Message" required></textarea>
        <button type="submit">Send</button>
    </form>

    <!-- Toast Notification -->
    <div id="toast"></div>

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

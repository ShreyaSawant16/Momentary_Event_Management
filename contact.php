<?php include_once('config.php'); ?>
<html>
<head>
    <title>Contac-Us</title>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>

<section class="contact-section py-5">
    <div class="container">
        <form>
        <h2 class="text-center mb-5">Contact Us<hr></h2>
        <div class="row align-items-stretch">
            <div class="col-md-6 mb-4">
                <div class="contact-left h-100">
                    <h3>Momentary Event Management</h3>
                    <p>We would love to hear from you. Reach out for weddings, birthdays, corporate events, or any special celebration.</p>

                    <ul class="contact-details">
                        <li><strong>Address:</strong> MKG Street, Mumbai, India</li>
                        <li><strong>Phone:</strong> +91 98765 43210</li>
                        <li><strong>Email:</strong> momentaryevent@gmail.com</li>
                    </ul>

                    <div class="map-box mt-3">
                <iframe src="https://www.google.com/maps?q=college&output=embed" width="100%" height="300" style="border:0;" loading="lazy">
                </iframe>
                    </div>
                </div>
            </div>

           
            <div class="col-md-6 mb-4">
                <div class="contact-right h-100">
                    <h3>Send Us a Message</h3>

                <form method="post">
                <div class="form-group">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                </div>

                <div class="form-group">
                <input type="email" name="email" class="form-control" placeholder="Your Email" required>
                </div>

                <div class="form-group">
                <input type="text" name="event" class="form-control" placeholder="Event Type">
                </div>

                <div class="form-group">
              <textarea name="message" class="form-control" rows="5" placeholder="Your Message"></textarea>
                </div>

                <button type="submit" name="submit" class="btn-contact-btn">Submit</button>
                </form>

                </div>
            </div>

        </div>
        </form>
    </div>
</section>
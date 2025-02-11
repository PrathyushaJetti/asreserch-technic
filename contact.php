<?php
$meta = [
    'title' => "",
    'description' => "",
    'keywords' => "",


];
include('includes/header.php');

?>
<!-- Page Header Start -->
<div class="page-header light-bg-section">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <!-- Page Header Box Start -->
                <div class="page-header-box">
                    <h1 class="text-anime-style-3">Contact us</h1>
                    <nav class="wow fadeInUp" data-wow-delay="0.25s">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a href="index.php">home</a></li>
                            <li class="breadcrumb-item active" aria-current="page">contact us</li>
                        </ol>
                    </nav>
                </div>
                <!-- Page Header Box End -->
            </div>
        </div>
    </div>
</div>
<!-- Page Header End -->

<!-- Contact Information Section Start -->
<div class="contact-information">
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <!-- Contact Info Item Start -->
                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.25s">
                    <!-- Contact Image Start -->
                    <div class="contact-image">
                        <figure class="image-anime">
                            <img src="image/location-img.webp" alt="location">
                        </figure>
                    </div>
                    <!-- Contact Image End -->

                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <img src="images/icon-location.svg" alt="location">
                        </div>
                        <div class="contact-info-content">
                            <a href="https://maps.app.goo.gl/6XtWa3XRAr2W16tMA"
                                target="_blank" rel="noopener noreferrer">
                                <p>No. 8, 2-350/5/A/24/1B, Road No. 2, Panchavati Society Colony, Devera Konda Basti,
                                    Green Valley, Banjara Hills, Hyderabad, Telangana 500034</p>
                            </a>
                        </div>
                    </div>

                    <!-- Contact Info Box End -->
                </div>
                <!-- Contact Info Item End -->
            </div>

            <div class="col-md-4">
                <!-- Contact Info Item Start -->
                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.5s">
                    <!-- Contact Image Start -->
                    <div class="contact-image">
                        <figure class="image-anime">
                            <img src="image/email-img.webp" alt="mail">
                        </figure>
                    </div>
                    <!-- Contact Image End -->

                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <img src="images/icon-email.svg" alt="mail">
                        </div>
                        <div class="contact-info-content">
                        <p><a href="mailto:asreserchtechnic@gmail.com">asreserchtechnic@gmail.com</a></p>


                        </div>
                    </div>
                    <!-- Contact Info Box End -->
                </div>
                <!-- Contact Info Item End -->
            </div>

            <div class="col-md-4">
                <!-- Contact Info Item Start -->
                <div class="contact-info-item wow fadeInUp" data-wow-delay="0.75s">
                    <!-- Contact Image Start -->
                    <div class="contact-image">
                        <figure class="image-anime">
                            <img src="image/contact-img.webp" alt="contact us">
                        </figure>
                    </div>
                    <!-- Contact Image End -->

                    <!-- Contact Info Box Start -->
                    <div class="contact-info-box">
                        <div class="icon-box">
                            <img src="images/icon-phone.svg" alt="phone">
                        </div>
                        <div class="contact-info-content">
                        <p><a href="tel:8125043337">8125043337</a></p>


                        </div>
                    </div>
                    <!-- Contact Info Box End -->
                </div>
                <!-- Contact Info Item End -->
            </div>
        </div>
    </div>
</div>
<!-- Contact Information Section End -->

<!-- Contact Us Section Start -->
<div class="contact-us light-bg-section">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">get in touch</h3>
                    <h2 class="text-anime-style-3">Needs help? let's get in touch</h2>
                </div>
                <!-- Section Title End -->
            </div>


        </div>

        <div class="row">
    <div class="col-lg-12">
        <!-- Contact Form Start -->
        <div class="contact-form wow fadeInUp" data-wow-delay="0.25s">
            <form id="contactForm" action="#" method="POST" data-toggle="validator">
                <div class="row">
                    <!-- First Name -->
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" name="fname" class="form-control" id="fname" placeholder="First Name"
                            required="" pattern="[A-Za-z\s]{1,50}" title="Only letters and spaces are allowed.">
                        <div class="help-block with-errors"></div>
                    </div>

                    <!-- Last Name -->
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" name="lname" class="form-control" id="lname" placeholder="Last Name"
                            required="" pattern="[A-Za-z\s]{1,50}" title="Only letters and spaces are allowed.">
                        <div class="help-block with-errors"></div>
                    </div>

                    <!-- Email -->
                    <div class="form-group col-md-6 mb-4">
                        <input type="email" name="email" class="form-control" id="email" placeholder="Email"
                            required="" pattern="[a-z0-9._%+-]+@[a-z0-9.-]+\.[a-z]{2,}" 
                            title="Enter a valid email address (e.g., example@example.com).">
                        <div class="help-block with-errors"></div>
                    </div>

                    <!-- Phone -->
                    <div class="form-group col-md-6 mb-4">
                        <input type="text" name="phone" class="form-control" id="phone" placeholder="Phone"
                            required="" pattern="^\d{10}$" title="Enter a 10-digit phone number.">
                        <div class="help-block with-errors"></div>
                    </div>

                    <!-- Message -->
                    <div class="form-group col-md-12 mb-4">
                        <textarea name="msg" class="form-control" id="msg" rows="7" placeholder="Write a message"
                            required="" pattern=".{10,500}" title="Message must be between 10 and 500 characters."></textarea>
                        <div class="help-block with-errors"></div>
                    </div>

                    <!-- Submit Button -->
                    <div class="col-md-12">
                        <button type="submit" class="btn-default">Submit Now</button>
                        <div id="msgSubmit" class="h3 hidden"></div>
                    </div>
                </div>
            </form>
        </div>
        <!-- Contact Form End -->
    </div>
</div>

    </div>
</div>
<!-- Contact Us Section End -->

<!-- Location Map Section Start -->
<div class="location-map">
    <div class="container">
        <div class="row section-row align-items-center">
            <div class="col-lg-12">
                <!-- Section Title Start -->
                <div class="section-title">
                    <h3 class="wow fadeInUp">location</h3>
                    <h2 class="text-anime-style-3">How to reach our location</h2>
                </div>
                <!-- Section Title End -->
            </div>

            <div class="col-lg-6">
                <!-- Section Title Content Start -->

                <!-- Section Title Content End -->
            </div>
        </div>

        <div class="row">
            <div class="col-lg-12">
                <!-- Google Map Start -->
                <div class="google-map">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d4037.7333024714794!2d78.44075712931442!3d17.42557601995737!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bcb9913ac58d5c1%3A0xdce7367164789ca4!2sASWGroupIndia-%20Banjara%20hills%20Branch%20Office.!5e0!3m2!1sen!2sin!4v1720604301735!5m2!1sen!2sin"
                        width="250" height="250" style="border:0;" allowfullscreen="" loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"></iframe>
                </div>
                <!-- Google Map End -->
            </div>
        </div>
    </div>
</div>
<!-- Location Map Section End -->

<?php ;

include('includes/footer.php');

?>

</html>
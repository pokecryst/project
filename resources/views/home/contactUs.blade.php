<!-- Contact Start -->
<div class="container-xxl py-6" id="nav-contacts">
    <div class="container">
        <div class="section-header text-center mx-auto mb-5 wow fadeInUp" data-wow-delay="0.1s" style="max-width: 500px;">
            <h1 class="display-5 mb-3">Contact Us</h1>
            <p>Tempor ut dolore lorem kasd vero ipsum sit eirmod sit. Ipsum diam justo sed rebum vero dolor duo.</p>
        </div>

        <!-- Display success message -->
        @if (session('msg'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('msg') }}
            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
            </button>
        </div>
        @endif

        <div class="row g-5 justify-content-center">
            <div class="col-lg-5 col-md-12 wow fadeInUp" data-wow-delay="0.1s">
                <div class="bg-primary text-white d-flex flex-column justify-content-center h-100 p-5">
                    <h5 class="text-white">Call Us</h5>
                    <p class="mb-5"><i class="fa fa-phone-alt me-3"></i>+012 345 67890</p>
                    <h5 class="text-white">Email Us</h5>
                    <p class="mb-5"><i class="fa fa-envelope me-3"></i>info@example.com</p>
                    <h5 class="text-white">Office Address</h5>
                    <p class="mb-5"><i class="fa fa-map-marker-alt me-3"></i>123 Street, New York, USA</p>
                    <h5 class="text-white">Follow Us</h5>
                    <div class="d-flex pt-2">
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-twitter"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-facebook-f"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-1" href=""><i class="fab fa-youtube"></i></a>
                        <a class="btn btn-square btn-outline-light rounded-circle me-0" href=""><i class="fab fa-linkedin-in"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-12 wow fadeInUp" data-wow-delay="0.5s">
                <form method="post" action="{{ url('/contact-us') }}">
                    @csrf
                    <div class="row g-3">
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="text" class="form-control" name="name" id="name" placeholder="Your Name" required>
                                <label for="name">Your Name</label>
                                <div class="invalid-feedback">Please input your name</div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-floating">
                                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
                                <label for="email">Your Email</label>
                                <div class="invalid-feedback">Please input a valid email</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <div class="form-floating">
                                <textarea class="form-control" placeholder="Leave a message here" name="message" id="message" style="height: 200px" required></textarea>
                                <label for="message">Message</label>
                                <div class="invalid-feedback">Please input your message</div>
                            </div>
                        </div>
                        <div class="col-12">
                            <!-- Add hCaptcha here -->
                            <div class="h-captcha" data-sitekey="a876ab20-1544-4c54-8e78-f002b90e7024"></div>
                            <div class="invalid-feedback">Please complete the CAPTCHA.</div>
                        </div>
                        <div class="col-12">
                            <button class="btn btn-primary rounded-pill py-3 px-5" type="submit">Send Message</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Contact End -->

<!-- Google Map Start -->
<div class="container-xxl px-0 wow fadeIn" data-wow-delay="0.1s" style="margin-bottom: -6px;">
    <iframe class="w-100" style="height: 450px;"
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3001156.4288297426!2d-78.01371936852176!3d42.72876761954724!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x4ccc4bf0f123a5a9%3A0xddcfc6c1de189567!2sNew%20York%2C%20USA!5e0!3m2!1sen!2sbd!4v1603794290143!5m2!1sen!2sbd"
        frameborder="0" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
</div>
<!-- Google Map End -->

<!-- Include hCaptcha Script -->
<script src="https://js.hcaptcha.com/1/api.js" async defer></script>

<!-- Include Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

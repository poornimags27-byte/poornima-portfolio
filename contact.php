<?php include 'includes/header.php'; ?>

<section class="page-banner">

    <div class="container">

        <p class="section-tag">CONTACT ME</p>

        <h1>Let's Work Together</h1>

        <p>
            Have a project idea or looking for a web developer?
            Feel free to get in touch.
        </p>

    </div>

</section>


<section class="contact-section">

    <div class="container">

        <div class="contact-grid">


            <!-- CONTACT INFORMATION -->

            <div class="contact-info">

                <p class="section-tag">GET IN TOUCH</p>

                <h2>Let's Discuss Your Project</h2>

                <p>
                    Whether you need a website, web application,
                    Moodle solution or improvements to an existing
                    project, I'd be happy to discuss your requirements.
                </p>


                <div class="contact-details">

                    <div class="contact-item">

                        <h3>Email</h3>

                        <p>poornimagsr77@gmail.com</p>

                    </div>


                    <div class="contact-item">

                        <h3>Location</h3>

                        <p>India</p>

                    </div>


                    <div class="contact-item">

                        <h3>Availability</h3>

                        <p>Available for Freelance & Remote Opportunities</p>

                    </div>

                </div>

            </div>


            <!-- CONTACT FORM -->

            <div class="contact-form-container">

                <?php if (isset($_GET['success'])) { ?>

                    <div class="success-message">
                        Thank you! Your message has been sent successfully.
                        I will get back to you soon.
                    </div>

                <?php } ?>


                <?php if (isset($_GET['error'])) { ?>

                    <div class="error-message">

                        <?php

                        if ($_GET['error'] == 'required') {
                            echo "Please fill in all required fields.";
                        }

                        elseif ($_GET['error'] == 'email') {
                            echo "Please enter a valid email address.";
                        }

                        elseif ($_GET['error'] == 'length') {
                            echo "Please make sure your message is within the allowed length.";
                        }

                        else {
                            echo "Something went wrong. Please try again.";
                        }

                        ?>

                    </div>

                <?php } ?>

                <form action="submit-contact.php" method="POST" autocomplete="on">

                    <div class="form-group">

                        <label>Your Name *</label>

                        <input type="text"
                               name="name"
                               maxlength="100"
                               required>

                    </div>


                    <div class="form-group">

                        <label>Email Address *</label>

                        <input type="email"
                               name="email"
                               maxlength="150"
                               required>

                    </div>


                    <div class="form-group">

                        <label>Phone Number</label>

                        <input type="text"
                               name="phone"
                               maxlength="20">

                    </div>


                    <div class="form-group">

                        <label>Project Type</label>

                        <select name="project_type">

                            <option value="">Select Project Type</option>

                            <option value="Website Development">
                                Website Development
                            </option>

                            <option value="PHP Web Application">
                                PHP Web Application
                            </option>

                            <option value="Moodle Solution">
                                Moodle Solution
                            </option>

                            <option value="Website Maintenance">
                                Website Maintenance
                            </option>

                            <option value="Other">
                                Other
                            </option>

                        </select>

                    </div>


                    <div class="form-group">

                        <label>Tell Me About Your Project *</label>

                        <textarea name="message"
                                  rows="6"
                                  maxlength="2000"
                                  required></textarea>

                    </div>


                    <button type="submit"
                            class="btn primary-btn submit-btn">

                        Send Message

                    </button>

                </form>

            </div>

        </div>

    </div>

</section>


<?php include 'includes/footer.php'; ?>
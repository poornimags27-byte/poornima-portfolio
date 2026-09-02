<?php include 'includes/header.php'; ?>

<section class="page-banner">

    <div class="container">

        <p class="section-tag">MY PORTFOLIO</p>

        <h1>Featured Projects</h1>

        <p>
            A selection of web applications and solutions I have developed
            using PHP, MySQL, JavaScript and Moodle.
        </p>

    </div>

</section>


<section class="projects-section">

    <div class="container">

        <!-- PROJECT 1 -->

        <div class="project-card">

            <div class="project-image">

                <img src="images/wip-project.png"
                     alt="WIP Traceability System">

            </div>


            <div class="project-content">

                <p class="project-category">
                    PHP • MySQL • JavaScript
                </p>

                <h2>WIP Traceability System</h2>

                <p>
                    A web-based system developed to track Work In Progress
                    items through different production stages. The system
                    helps users manage item transactions, search records,
                    track stages and monitor workflow efficiently.
                </p>


                <div class="project-features">

                    <span>Item Management</span>
                    <span>Transaction Tracking</span>
                    <span>Search & Filter</span>
                    <span>Stage Tracking</span>

                </div>


                <a href="wip-traceability.php" class="project-btn">
                    View Project Details →
                </a>

            </div>

        </div>


        <!-- PROJECT 2 -->

        <div class="project-card reverse">

            <div class="project-image">

                <div class="project-placeholder">

                    <span>🎓</span>

                    <h3>Moodle</h3>

                    <p>Training Management System</p>

                </div>

            </div>


            <div class="project-content">

                <p class="project-category">
                    Moodle • PHP • Training Management
                </p>

                <h2>Moodle Training Management</h2>

                <p>
                    A learning and training management solution developed
                    using Moodle. The system supports course management,
                    attendance tracking, video-based learning and training
                    performance monitoring.
                </p>


                <div class="project-features">

                    <span>Course Management</span>
                    <span>Attendance Tracking</span>
                    <span>Video Learning</span>
                    <span>Training KPI</span>

                </div>


                <a href="moodle-training.php" class="project-btn">
                    View Project Details →
                </a>

            </div>

        </div>

    </div>

</section>


<section class="project-cta">

    <div class="container">

        <h2>Have a Project in Mind?</h2>

        <p>
            Let's discuss how I can help bring your idea to life.
        </p>

        <a href="contact.php" class="btn primary-btn">
            Contact Me
        </a>

    </div>

</section>


<?php include 'includes/footer.php'; ?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <meta name="description" content="Start your development with Meyawo landing page.">
        <meta name="author" content="Devcrud">
        <title>Nattu 1.0</title>
        <!-- font icons -->
        <link rel="stylesheet" href="assets/vendors/themify-icons/css/themify-icons.css">
        <!-- Bootstrap + Meyawo main styles -->
        <link rel="stylesheet" href="assets/css/meyawo.css">
    </head>
    <body
        data-spy="scroll"
        data-target=".navbar"
        data-offset="40"
        id="home"
    >
        <!-- Model start-->
        <div
            class="modal fade"
            id="successModal"
            tabindex="-1"
            role="dialog"
            aria-labelledby="successModalLabel"
            aria-hidden="true"
        >
            <div class="modal-dialog modal-dialog-centered" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="successModalLabel">Message Sent Successfully!</h5>
                        <button
                            type="button"
                            class="close"
                            data-dismiss="modal"
                            aria-label="Close"
                        >
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <!-- <div class="modal-body">
                    Your message has been sent successfully. I'll get back to you soon!
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                </div> -->
                </div>
            </div>
        </div>
        <!-- Model end-->
        <!-- Page Navbar -->
        <nav class="custom-navbar" data-spy="affix" data-offset-top="20">
            <div class="container">
                <a class="logo" href="">Nattu</a>
                <ul class="nav">
                    <li class="item">
                        <a class="link" href="#home">Home</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#about">About</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#portfolio">Portfolio</a>
                    </li>
                    <!-- <li class="item">
                    <a class="link" href="#testmonial">Testmonial</a>
                </li> -->
                    <li class="item">
                        <a class="link" href="#blog">Blog</a>
                    </li>
                    <li class="item">
                        <a class="link" href="#contact">Contact</a>
                    </li>
                    <!-- <li class="item ml-md-3">
                    <a href="components.html" class="btn btn-primary">Components</a>
                </li> -->
                </ul>
                <a href="javascript:void(0)" id="nav-toggle" class="hamburger hamburger--elastic">
                    <div class="hamburger-box">
                        <div class="hamburger-inner"></div>
                    </div>
                </a>
            </div>
        </nav>
        <!-- End of Page Navbar -->
        <!-- page header -->
        <header id="home" class="header">
            <div class="overlay"></div>
            <div class="header-content container">
                <h1 class="header-title">
                    <span class="up">HI!</span>
                    <span class="down">I am Nattu</span>
                </h1>
                <p class="header-subtitle">Software Engineer</p>
                <a class="btn btn-primary" href="#portfolio">Portfolio</a>
            </div>
        </header>
        <!-- end of page header -->
        <!-- about section -->
        <section class="section pt-0" id="about">
            <!-- container -->
            <div class="container text-center">
                <!-- about wrapper -->
                <div class="about">
                    <div class="about-img-holder">
                        <img src="assets/imgs/man.png" class="about-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="about-caption">
                        <h2 class="section-title mb-3">About Me</h2>
                        <p class="">
                            Hello! I'm Nadarajan.G.S, a final-year Computer Science student with a passion for turning innovative ideas into functional, user-centric software solutions. Currently, I'm honing my skills as a software developer during my internship at Skillrank.
                        </p>
                        <br>
                        <h2 class=" mb-3">Why Choose Me</h2>
                        <p>
                            My journey in the world of technology began as a front-end developer, crafting visually appealing and responsive user interfaces. Evolving with the industry, I delved into the intricacies of API development, enabling seamless communication between different software components.
                        </p>
                        <p>
                            Currently interning as a software developer at Skillrank, I am honing my skills in creating end-to-end web applications. My passion for learning led me to explore cloud computing on AWS, adding a layer of scalability and efficiency to my projects.
                        </p>
                        <p>Let's collaborate to transform your ideas into impactful digital solutions!</p>
                    </p>
                    <button class="btn-rounded btn btn-outline-primary mt-4" onclick="downloadResume()">Download CV</button>
                </div>
            </div>
            <!-- end of about wrapper -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of about section -->
    <!-- service section -->
    <section class="section" id="service">
        <div class="container text-center">
            <p class="section-subtitle">What I Do ?</p>
            <h6 class="section-title mb-6">Service</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/pencil-case.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">Responsive Web Development</h6>
                            <!-- <p class="subtitle">Crafting visually appealing and responsive front-end interfaces, ensuring an optimal user experience.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/responsive.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">Full-Stack Web Application Development</h6>
                            <!-- <p class="subtitle">From concept to deployment, I am adept at building end-to-end web applications. Leveraging my skills in front-end development, backend logic, and database management, I create robust and scalable solutions. Your ideas become functional, dynamic web applications that stand out in the digital landscape.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/toolbox.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">API Integration</h6>
                            <!-- <p class="subtitle">I excel in integrating Application Programming Interfaces (APIs) to enhance the functionality and connectivity of your applications. Whether it's integrating third-party services or creating custom APIs, I ensure seamless communication between different components, leading to a more powerful and feature-rich application.</p> -->
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-3">
                    <div class="service-card">
                        <div class="body">
                            <img src="assets/imgs/analytics.svg" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page" class="icon">
                            <h6 class="title">Cloud Solutions with AWS</h6>
                            <!-- <p class="subtitle">With expertise in Amazon Web Services (AWS), I offer cloud solutions that optimize performance, scalability, and security. Whether it's deploying applications, managing databases, or implementing serverless architecture, I leverage AWS services to elevate your project to new heights in the digital realm.</p> -->
                        </div>
                    </div>
                </div>
            </div>
            <!-- end of row -->
        </div>
    </section>
    <!-- end of service section -->
    <!-- portfolio section -->
    <section class="section" id="portfolio">
        <div class="container text-center">
            <h6 class="section-title mb-6">Projects</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img src="assets/imgs/folio-1.jpg" class="portfolio-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>
                                    Web Designing
                                </h5>
                                <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img
                            class="portfolio-card-img"
                            src="assets/imgs/folio-2.jpg"
                            class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                        >
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>
                                    Web Designing
                                </h5>
                                <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>
                <div class="col-md-4">
                    <a href="#" class="portfolio-card">
                        <img
                            class="portfolio-card-img"
                            src="assets/imgs/folio-3.jpg"
                            class="img-responsive rounded"
                            alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page"
                        >
                        <span class="portfolio-card-overlay">
                            <span class="portfolio-card-caption">
                                <h4>
                                    Web Designing
                                </h5>
                                <p class="font-weight-normal">Category: Web Templates</p>
                            </span>
                        </span>
                    </a>
                </div>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of portfolio section -->
    <!-- section -->
    <section class="section-sm bg-primary">
        <!-- container -->
        <div class="container text-center text-sm-left">
            <!-- row -->
            <div class="row align-items-center">
                <div class="col-sm offset-md-1 mb-4 mb-md-0">
                    <h6 class="title text-light">Want to work with me?</h6>
                    <p class="m-0 text-light">Always feel Free to Contact & Hire me</p>
                </div>
                <div class="col-sm offset-sm-2 offset-md-3">
                    <!-- <a href="https://mail.google.com/mail/?view=cm&fs=1&to=nadarajangs31@gmail.com" target="_blank" class="btn btn-lg my-font btn-light rounded">Hire Me</a>
                     -->
                    <a
                        href="https://mail.google.com/mail/?view=cm&fs=1&to=nadarajangs31@gmail.com"
                        target="_blank"
                        class="btn btn-lg my-font btn-light rounded"
                        onclick="showSuccessModal()"
                    >Hire Me</a>
                </div>
            </div>
            <!-- end of row -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of section -->
    <!-- testimonial section -->
    <section class="section" id="testmonial">
        <div class="container text-center">
            <p class="section-subtitle">What Think Client About Me ?</p>
            <h6 class="section-title mb-6">Testmonial</h6>
            <!-- row -->
            <div class="row">
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="assets/imgs/avatar2.jpg" class="testimonial-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis
                                adipisci nihil.
                            </p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="testimonial-card">
                        <div class="testimonial-card-img-holder">
                            <img src="assets/imgs/avatar3.jpg" class="testimonial-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                        </div>
                        <div class="testimonial-card-body">
                            <p class="testimonial-card-subtitle">
                                Lorem ipsum dolor sit amet, consectetur adipisicing
                                elit. Eaque doloribus autem aperiam earum nostrum omnis blanditiis corporis perspiciatis
                                adipisci nihil.
                            </p>
                            <h6 class="testimonial-card-title">Emily Reb</h6>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end of container -->
    </section>
    <!-- end of testimonial section -->
    <!-- blog section -->
    <section class="section" id="blog">
        <!-- container -->
        <div class="container text-center">
            <h6 class="section-title mb-6">My Blog</h6>
            <!-- blog-wrapper -->
            <div class="blog-card">
                <div class="blog-card-content">
                    <div class="blog-card-header">
                        <img src="assets/imgs/blog.png" class="blog-card-img" alt="Download free bootstrap 4 landing page, free boootstrap 4 templates, Download free bootstrap 4.1 landing page, free boootstrap 4.1.1 templates, meyawo Landing page">
                    </div>
                    <div class="blog-card-line"></div>
                    <div class="blog-card-body">
                        <h5 class="blog-card-title">
                            Path-Based Routing in AWS CloudFront
                        </h5>
                        <p class="blog-card-caption"></p>
                        <p>Explore the seamless integration of multiple Angular applications with AWS Amplify and CloudFront through path-based routing in this engaging blog post.</p>
                        <p class="mt-4">Achieve clear and concise URLs for your Angular applications with Amplify and CloudFront's path-based routing.</p>
                
                        <a href="https://medium.com/@nadarajangs31/achieving-path-based-routing-with-amplify-url-and-cloudfront-for-multiple-angular-applications-a31095fced8b" class="blog-card-link font-weight-bold" target="_blank">
                            Read the full blog post
                            <i class="ti-angle-double-right"></i>
                        </a>
                    </div>
                </div>
            </div>
            
            
            <!-- end of blog wrapper -->
            <!-- blog-wrapper -->
            <!-- end of blog wrapper -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of blog section -->
    <!-- contact section -->
    <section class="section" id="contact">
        <div class="container text-center">
            <p class="section-subtitle">How can you communicate?</p>
            <h6 class="section-title mb-5">Contact Me</h6>
            <!-- contact form -->
            <form action="" class="contact-form col-md-10 col-lg-8 m-auto">
                <div class="form-row">
                    <div class="form-group col-sm-6">
                        <input
                            type="text"
                            size="50"
                            class="form-control"
                            placeholder="Your Name"
                            required
                        >
                    </div>
                    <div class="form-group col-sm-6">
                        <input
                            type="email"
                            class="form-control"
                            placeholder="Enter Email"
                            requried
                        >
                    </div>
                    <div class="form-group col-sm-12">
                        <textarea
                            name="comment"
                            id="comment"
                            rows="6"
                            class="form-control"
                            placeholder="Write Something"
                        ></textarea>
                    </div>
                    <div class="form-group col-sm-12 mt-3">
                        <input type="submit" value="Send Message" class="btn btn-outline-primary rounded">
                    </div>
                </div>
            </form>
            <!-- end of contact form -->
        </div>
        <!-- end of container -->
    </section>
    <!-- end of contact section -->
    <!-- footer -->
    <div class="container">
        <footer class="footer">
            <p class="mb-0">
                Copyright
                <script>document.write(new Date().getFullYear())</script>
                &copy;
                <a href="http://www.devcrud.com">DevCRUD</a>
                Distribution
                <a href="https://themewagon.com">ThemeWagon</a>
            </p>
            <div class="social-links text-right m-auto ml-sm-auto">
                <a href="javascript:void(0)" class="link">
                    <i class="ti-facebook"></i>
                </a>
                <a href="javascript:void(0)" class="link">
                    <i class="ti-twitter-alt"></i>
                </a>
                <a href="javascript:void(0)" class="link">
                    <i class="ti-google"></i>
                </a>
                <a href="javascript:void(0)" class="link">
                    <i class="ti-pinterest-alt"></i>
                </a>
                <a href="javascript:void(0)" class="link">
                    <i class="ti-instagram"></i>
                </a>
                <a href="javascript:void(0)" class="link">
                    <i class="ti-rss"></i>
                </a>
            </div>
        </footer>
    </div>
    <!-- end of page footer -->
    <!-- core  -->
    <script src="assets/vendors/jquery/jquery-3.4.1.js"></script>
    <script src="assets/vendors/bootstrap/bootstrap.bundle.js"></script>
    <!-- bootstrap 3 affix -->
    <script src="assets/vendors/bootstrap/bootstrap.affix.js"></script>
    <!-- Meyawo js -->
    <script src="assets/js/meyawo.js"></script>
    <script>
        function showSuccessModal() {
            $('#successModal').modal('show');
        }
    </script>
    <script>
        function downloadResume() {
            // Replace 'path/to/your/resume.pdf' with the actual path to your resume file
            var resumePath = './Resume.pdf';
            
            // Creating a temporary anchor element to trigger the download
            var link = document.createElement('a');
            link.href = resumePath;
            link.download = 'YourResume.pdf'; // You can customize the downloaded file name
            document.body.appendChild(link);
            link.click();
            document.body.removeChild(link);
        }
    </script>
</body>
</html>

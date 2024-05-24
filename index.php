<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>My awesome portfolio</title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:400,600&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&display=swap" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
    <link rel="stylesheet" href="./css/style.css">
</head>

<body>
    <div class="site-main-wrapper">
        <button class="hamberger">
            <img src="./images/hamberger.svg" alt="">
        </button>

        <div class="mobile-nav">
            <button class="times"><img src="./images/times.svg" alt=""></button>
            <ul>
                <li><a href="#">Home</a></li>
                <li><a href="#">About</a></li>
                <li><a href="#">Services</a></li>
                <li><a href="#">Work Experience</a></li>
            </ul>
        </div>
        <header>
            <div class="container">
                <nav id="main-nav" class="flex items-center justify-between">
                    <div class="left flex items-center">
                        <div class="branding" style="float: left;">
                            <img src="./images/PRABHAT-removebg-preview (2).png" alt="" style="width: 150px; height: auto;">
                        </div>
                        
                        <div>
                            <a href="#">Home</a>
                            <a href="#about">About</a>
                            <a href="#services">Services</a>
                            <a href="#work_experience">Work Experience</a>
                        </div>
                    </div>
                    <div class="right">
                        <a href="#contact" style="text-decoration: none;">
                            <button class="btn btn-primary">Contact</button>
                        </a>
                    </div>
                </nav>
                <div class="hero flex items-center justify-between">
                    <div class="left flex-1 flex justify-center" style="margin-bottom: 20px; position: relative;">
                        <img src="./images/ass.png" alt="Prabhat Ojha" style="width: 100%; max-width: 100%; height: auto; margin-bottom: 20px; border-radius: 10px; box-shadow: 0px 10px 30px rgba(0, 0, 0, 0.3); transition: transform 0.3s;">
                        <div class="image-overlay" style="position: absolute; top: 0; left: 0; width: 100%; height: 100%; background-color: rgba(0, 0, 0, 0.5); opacity: 0; transition: opacity 0.3s;"></div>
                    </div>
                    <div class="right flex-1" style="max-width: 100%;">
                        <h6 style="font-size: 16px;">Prabhat Ojha</h6>
                        <h1 style="font-size: 24px;">I’m a <span>Full Stack Developer</span></h1>
                        <p style="font-size: 14px; margin-bottom: 20px;">As a <strong>Full Stack Developer</strong>, I craft digital experiences from end to end, seamlessly blending creativity with functionality. With expertise in both front-end and back-end technologies, I sculpt intuitive user interfaces and architect robust backend systems. From conceptualization to deployment, I thrive in turning innovative ideas into reality, ensuring every line of code resonates with excellence and efficiency. Let's build something extraordinary together.</p>
                        <div>
                            <a href="responsive-portfolio-website-master/images/Prabhatcv.pdf (3).pdf" download="Your_CV_Name.pdf">
                                <button class="btn btn-secondary" style="font-size: 14px;">DOWNLOAD CV</button>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
            <style>
                .image-overlay {
                    border-radius: 10px;
                    transition: opacity 0.3s;
                }
            
                .left:hover img {
                    transform: scale(1.05);
                }
            
                .left:hover .image-overlay {
                    opacity: 1;
                }
        
                @media screen and (max-width: 768px) {
                    .hero {
                        flex-direction: column;
                    }
                    .left,
                    .right {
                        max-width: 100%;
                    }
                    .left img {
                        border-radius: 0;
                    }
                }
            </style>
        </header>
        
        <section id="about" class="about" style="background-color: #1abc9c; padding: 80px 0;">
            <div class="container flex items-center about-inner-wrap">
                <div class="flex-1">
                    <img class="about-me-img" src="images/prabhat.jpg" alt="Prabhat Ojha" style="border-radius: 50%; max-width: 100%; height: auto; border: 8px solid #fff; box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.5);">
                </div>
                <div class="flex-1 right" style="padding-left: 40px;">
                    <h1 style="color: #fff; font-size: 48px; margin-bottom: 20px; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.2);">About <span style="color: #e74c3c;">Me</span></h1>
                    <h3 style="color: #fff; font-size: 28px; margin-bottom: 20px;">Hello! I'm Prabhat Ojha.</h3>
                    <p style="color: #f1f1f1; font-size: 20px; line-height: 1.6;">
                        Hi there! I'm Prabhat Ojha, a dedicated Full stack Developer with a passion for crafting meaningful digital experiences. With a background in Information Technology(IT), I blend creativity with technical expertise to deliver innovative solutions.
                        Driven by curiosity and a thirst for learning, I thrive on challenges that push the boundaries of what's possible. Whether it's designing sleek user interfaces or building scalable backend systems, I'm committed to excellence in every project.
                        Beyond work, you'll find me traveling to new destinations and experiencing different cultures, exploring the great outdoors through hiking, camping, or photography. <br><br>
                        I believe in the power of collaboration and am always eager to connect with like-minded individuals. <br>
                        Let's collaborate and create something extraordinary together!
                    </p>
                    <!-- <div class="social" style="margin-top: 20px;">
                        <a href="#" style="text-decoration: none; color: #fff; margin-right: 15px; font-size: 24px;"><i class="fas fa-globe"></i></a>
                        <a href="https://www.facebook.com/codersgyan" style="text-decoration: none; color: #fff; margin-right: 15px; font-size: 24px;"><i class="fab fa-facebook"></i></a>
                        <a href="https://twitter.com/CoderGyan" style="text-decoration: none; color: #fff; margin-right: 15px; font-size: 24px;"><i class="fab fa-twitter"></i></a>
                        <a href="#" style="text-decoration: none; color: #fff; margin-right: 15px; font-size: 24px;"><i class="fab fa-pinterest"></i></a>
                    </div> -->
                </div>
            </div>
        </section>
        
        <section id="services" class="services">
            <div class="container">
                <h1 class="section-heading"><span>My </span>Services</h1>
                <p>I provide high standar clean website for your business solutions</p>
                <div class="card-wrapper">
                    <div class="card">
                        <div style="text-align: center;">
                            <img src="./images/frob.png" alt="" style="width: 200px; height: auto;">
                        </div>
                        
                        <h2>Frontend Development Services
                        </h2>
                        <p>Elevate your online presence with my frontend development expertise. I specialize in creating visually stunning and user-friendly websites that leave a lasting impression. From responsive design to seamless user experiences, I bring your digital vision to life with precision and creativity. Let's build something remarkable together!

                            Feel free to adjust the language and details to suit your style and preferences
                        </p>
                    </div>
                    <div class="card">
                        <div style="text-align: center;">
                            <img src="./images/frob.png" alt="" style="width: 200px; height: auto;">
                        </div>
                        <h2>Backend Development Services
                        </h2>
                        <p>Empower your digital presence with my Backend Development expertise. I specialize in crafting scalable and secure server-side solutions that drive your online success. From database management to API development, I deliver efficient backend architectures tailored to your needs. Let's build a resilient backend foundation for your digital journey!
<br><br>
                            Feel free to adjust the language and details to match your style and preferences!
                        </p>
                    </div>
                    <div class="card">
                        <div style="text-align: center;">
                            <img src="./images/frob.png" alt="" style="width: 200px; height: auto;">
                        </div>
                        <h2>E-commerce Solutions
                        </h2>
                        <p>Boost your online sales and streamline operations with my E-commerce Solutions. I specialize in developing customized e-commerce platforms that drive revenue and customer satisfaction. From shopping cart optimization to secure payment gateways, I create seamless buying experiences that keep customers coming back. Let's build an e-commerce solution that sets your brand apart and drives growth!
                        </p>
                    </div>
                    <div class="card">
                        <div style="text-align: center;">
                            <img src="./images/frob.png" alt="" style="width: 200px; height: auto;">
                        </div>                        <h2>Mobile App Development Services
                        </h2>
                        <p>Transform your ideas into powerful mobile experiences with my Mobile App Development services. I specialize in building native and cross-platform apps that seamlessly integrate with users' lives. From concept to launch, I deliver innovative solutions that meet your business goals and exceed user expectations. Let's turn your vision into a standout app that shines in the crowded mobile landscape!
                        </p>
                    </div>
                    <div class="card">
                        <div style="text-align: center;">
                            <img src="./images/frob.png" alt="" style="width: 200px; height: auto;">
                        </div>                        <h2>Graphics Design Services
                        </h2>
                        <p>Elevate your brand's visual identity with my Graphics Design services. I specialize in creating captivating designs that communicate your message and resonate with your audience. From logos and branding to marketing materials and digital assets, I bring your vision to life with creativity and precision. Let's create stunning visuals that leave a lasting impression and set your brand apart from the competition!
                        </p>
                    </div>
                  
                </div>
            </div>
        </section>



        <section id="work_experience" class="work-experience">

<section style="max-width: 800px; margin: 50px auto; padding: 20px; background-color: #f5f5f5; border-radius: 20px; box-shadow: 0px 8px 15px rgba(0, 0, 0, 0.1);">
    <h1 style="text-align: center; margin-bottom: 30px; color: #333;">Work Experience</h1>
    
    <div style="display: flex; justify-content: center; margin-bottom: 20px;">
        <img src="images/Daraz-Logo.jpg" alt="Daraz Online Shopping" style="max-width: 150px;">
    </div>
    
    <div style="text-align: center; margin-bottom: 30px;">
        <h2 style="margin-bottom: 10px; color: #555;">Daraz Online Shopping</h2>
        <p style="margin: 0; color: #777;"><strong>Position:</strong> Returns Operation Associate (Quality Check)</p>
        <p style="margin: 0; color: #777;"><strong>Duration:</strong> 2 Years (From 2022 to Present)</p>
    </div>
    
    <div style="display: flex; justify-content: center; margin-bottom: 20px;">
        <img src="images/sww.jfif" alt="Sagarmatha College" style="max-width: 150px;">
    </div>
    
    <div style="text-align: center;">
        <h2 style="margin-bottom: 10px; color: #555;">Sagarmath Student Welfare Council</h2>
        <p style="margin: 0; color: #777;"><strong>Position:</strong> Active Member</p>
        <p style="margin: 0; color: #777;"><strong>Organization:</strong> Sagarmatha College of Science and Technology</p>
    </div>
    
</section>
<section id="contact" class="contact" style="padding: 60px 0;">
    <div class="container" style="max-width: 100%; margin: auto; padding: 0 10px;">
        <h1 class="section-heading" style="font-size: 30px; text-align: center; margin-bottom: 20px; color: #333;">
            Contact <span style="color: #ff6b6b;">Us</span>
        </h1>
        <p style="text-align: center; margin-bottom: 30px; font-size: 16px; color: #666;">
            We provide high standard clean website for your business solutions
        </p>
        <div class="card-wrapper" style="display: flex; flex-direction: column; margin-bottom: 30px;">
            <div class="card" style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); text-align: center; margin-bottom: 20px;">
                <i class="fas fa-phone-alt" style="font-size: 30px; color: #ff6b6b; margin-bottom: 10px;"></i>
                <h2 style="font-size: 20px; margin-bottom: 10px; color: #333;">Call Me On</h2>
                <h6 style="font-size: 16px; color: #777;">+977-9819853254</h6>
            </div>
            <div class="card" style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1); text-align: center; margin-bottom: 20px;">
                <i class="fas fa-envelope" style="font-size: 30px; color: #ff6b6b; margin-bottom: 10px;"></i>
                <h2 style="font-size: 20px; margin-bottom: 10px; color: #333;">Email Me At</h2>
                <h6 style="font-size: 16px; color: #777;">hyperprabhat@gmail.com.com</h6>
            </div>
        </div>
        <form action="contact_form.php" method="POST" style="background: #fff; padding: 20px; border-radius: 8px; box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);">
    <div class="input-wrap" style="margin-bottom: 20px;">
        <input type="text" name="name" placeholder="Your Name *" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
    </div>
    <div class="input-wrap" style="margin-bottom: 20px;">
        <input type="email" name="email" placeholder="Your Email *" style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
    </div>
    <div class="input-wrap" style="margin-bottom: 20px;">
        <input type="text" name="subject" placeholder="Your Subject..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px;">
    </div>
    <div class="input-wrap" style="margin-bottom: 20px;">
        <textarea name="message" cols="30" rows="6" placeholder="Your Message..." style="width: 100%; padding: 10px; border: 1px solid #ccc; border-radius: 4px; font-size: 16px; resize: none;"></textarea>
    </div>
    <div class="btn-wrapper" style="text-align: center;">
        <button type="submit" class="btn btn-primary" style="background-color: #ff6b6b; color: #fff; padding: 12px 24px; border: none; border-radius: 4px; font-size: 16px; cursor: pointer; transition: background-color 0.3s;">
            Send Message
        </button>
    </div>
</form>

    </div>
</section>

        
        <!-- Font Awesome for Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
        <footer style="text-align: center; background-color: #333; padding: 60px 0; border-top: 1px solid #444; color: #fff;">
            <img class="footer-logo" src="./images/PRABHAT-removebg-preview (2).png" alt="Company Logo" style="max-width: 150px; margin-bottom: 20px;">
            <div class="footer-socials" style="margin-bottom: 20px;">
                <a href="https://www.facebook.com/hyperlord2223/" style="text-decoration: none; color: #fff; margin: 0 10px; font-size: 24px; transition: color 0.3s;">
                    <i class="fab fa-facebook" style="padding: 10px; border-radius: 50%; background: #3b5998;"></i>
                </a>
                <a href="https://twitter.com" style="text-decoration: none; color: #fff; margin: 0 10px; font-size: 24px; transition: color 0.3s;">
                    <i class="fab fa-twitter" style="padding: 10px; border-radius: 50%; background: #1da1f2;"></i>
                </a>
                <a href="#" style="text-decoration: none; color: #fff; margin: 0 10px; font-size: 24px; transition: color 0.3s;">
                    <i class="fab fa-pinterest" style="padding: 10px; border-radius: 50%; background: #bd081c;"></i>
                </a>
                <a href="https://www.instagram.com/prabhat_dgaf/" style="text-decoration: none; color: #fff; margin: 0 10px; font-size: 24px; transition: color 0.3s;">
                    <i class="fab fa-instagram" style="padding: 10px; border-radius: 50%; background: #e1306c;"></i>
                </a>
            </div>
            <div style="font-size: 14px; color: #ccc; margin-bottom: 20px;">
                <p>Contact Me at <a href="mailto:hyperprabhat@gmail.com" style="color: #ff6b6b; text-decoration: none;">hyperprabhat@gmail.com.com</a></p>
                <p>Call Me: +977-9819853254</p>
                <!-- <p>Visit us: 99 S.t Jomblo Park Pekanbaru 28292, Indonesia</p> -->
            </div>
            <!-- <div class="newsletter" style="margin-bottom: 20px;">
                <p style="font-size: 16px; color: #ccc; margin-bottom: 10px;">Subscribe to our newsletter</p>
                <form action="" style="display: flex; justify-content: center; align-items: center;">
                    <input type="email" placeholder="Your Email" style="padding: 10px 20px; border: none; border-radius: 4px 0 0 4px; font-size: 16px;">
                    <button style="padding: 10px 20px; border: none; background: #ff6b6b; color: #fff; font-size: 16px; cursor: pointer; border-radius: 0 4px 4px 0; transition: background 0.3s;">Subscribe</button>
                </form>
            </div> -->
            <div class="copyright" style="font-size: 14px; color: #777;">
                Copyright 2024 © Prabhat Ojha
            </div>
        </footer>
        
        <!-- Font Awesome for Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
        
        <!-- Font Awesome for Icons -->
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css">
        
        
    </div>

    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.0.min.js"></script>
    <script type="text/javascript" src="https://code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
    <script src="./js/app.js"></script>
</body>

</html>
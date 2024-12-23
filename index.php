<?php
session_start(); // Start the session
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Rubik+Scribble&display=swap" rel="stylesheet">
    <link
        href="https://fonts.googleapis.com/css2?family=Doto&family=Poppins:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
    
    <script>
        // Auto-hide notification after 5 seconds
        const notification = document.querySelector('.notification');
        if (notification) {
            setTimeout(() => {
                notification.style.display = 'none';
            }, 5000);
        }
        </script>
</head>

<body>
    <div id="ghost-swallow"></div>
    <header class="glass">
        <nav class="navigation">
            <ul>
                <img src="Images/logo.png" alt="LOGO" style="width: 80px; height: 80px; margin-bottom: 10px;"
                    class="imgandbtn">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#projects">Projects</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#contact">Contact</a></li>
                <li>
                    <label class="switch">
                        <input id="theme" class="input__check" type="checkbox" role="switch" name="theme" value="dark">
                        <span class="slider"></span>
                    </label>
                </li>
            </ul>
        </nav>
    </header>
    <div id="progress-bar"></div>
    <div class="horizontal-scroll" style="overflow-y: hidden;" loading="lazy">
        <section id="home" class="hero" style="display: inline-block; width: 100vw;">
            <h1 class="font-sans font-bold text-sm sm:text-2xl md:text-3xl lg:text-4xl" style="font-family: 'Poppins'">
                Hi, I'm</h1>
            <h1 id="changingText" class="font-bold text-2xl sm:text-3xl md:text-4xl lg:text-5xl xl:text-6xl"
                style="font-family: 'Doto', sans-serif;">
                M P Behan Ravishka Perera
            </h1>
            <h1 class="font-mono font-bold text-sm sm:text-2xl md:text-3xl lg:text-4xl" style="font-family: 'Poppins'">
                Welcome to My Portfolio!</h1>
            <canvas id="matrix"></canvas>
            <img src="Images/hanthana.jpg" alt="Intro">
            <div class="arrow-container">
                <div class="arrow"></div>
                <div class="arrow"></div>
                <div class="arrow"></div>
            </div>
        </section>
        <section id="about" class="about_img" style="display: inline-block; width: 100vw; padding: 20px;">
            <div class="content-wrapper-about">
                <span class="relative flex justify-center">
                    <div
                        class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-100">
                    </div>
                    <span class="relative z-10 bg-white glass px-6">
                        <h2>About Me</h2>
                    </span>
                </span>
                <div class="profile-container">
                    <div class="circular-frame">
                        <img src="Images/behan.jpg" alt="Your Photo">
                    </div>
                    <div class="text-container">
                        <p style="color: black;">
                            Hi, I'm Behan Ravishka Perera. I'm an undergraduate with many professional skills and a
                            strong personality.
                            I'm passionate about learning new things and growing my knowledge base.
                            I'm always looking for ways to challenge myself and to better myself as an individual.
                            I aim to use the opportunities available to me and ensure that I am making the most out of
                            my life experiences.
                        </p>
                        <div class="cv-download-container"
                            style="display: flex; justify-content: center; margin-top: 20px;">
                            <a href="CV/Profile.pdf" download
                                style="display: flex; align-items: center; text-decoration: none; background-color: #007BFF; color: white; padding: 10px 15px; border-radius: 5px; transition: background-color 0.3s;">
                                <i class="fas fa-file-download" style="margin-right: 8px;"></i>
                                <!-- FontAwesome Icon -->
                                Download CV
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section id="projects" class="projects-section">
    <div class="content-wrapper-about">
        <span class="relative flex justify-center">
            <div class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75"></div>
            <span class="relative z-10 bg-white glass px-6">
                <h2>Projects</h2>
            </span>
        </span>

        <div class="projects-grid">
            <div class="card-3d">
                <img src="Images/travelease.png" alt="TravelEase" loading="lazy" class="project_img">
                <h3>TravelEase</h3>
                <p>TravelEase is a modern and fully responsive travel booking website</p>
                <a href="https://behan-ravishka.github.io/TravelEase/" class="project-link"  target="_blank">View Project</a>
            </div>
            <div class="card-3d">
                <img src="Images/PlantGuardian.jpeg" alt="Project 2" loading="lazy">
                <h3>PlantGuardian</h3>
                <p>Our Intelligent Plant Watering System is designed to help farmers and plant enthusiasts effectively manage their watering needs using advanced sensors and real-time data tracking.</p>
                <a href="https://behan-ravishka.github.io/Intelligent-Plant-Watering-System-Web-Application/" class="project-link" target="_blank">View Project</a>
            </div>
        </div>
    </div>
</section>

        <section id="skills" style="padding: 20px;">
            <div class="content-wrapper-about">
                <span class="relative flex justify-center">
                    <div
                        class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75">
                    </div>
                    <span class="relative z-10 glass px-6">
                        <h2>Skills</h2>
                    </span>
                </span>
                <div class="tabs">
                    <button class="tab-button active" onclick="openTab(event, 'hard-skills')">Hard Skills</button>
                    <button class="tab-button" onclick="openTab(event, 'soft-skills')">Soft Skills</button>
                </div>

                <div id="hard-skills" class="tab-content active">
                    <div class="sub-tabs">
                        <button class="sub-tab-button active"
                            onclick="openSubTab(event, 'programming')">Programming</button>
                        <button class="sub-tab-button" onclick="openSubTab(event, 'graphic-design')">Graphic
                            Design</button>
                    </div>

                    <div id="programming" class="sub-tab-content active">
                        <div class="wrapper">
                            <div class="container">
                                <input type="radio" name="slide" id="c1" checked>
                                <label for="c1" class="card">
                                    <div class="row">
                                        <div class="icon"><img src="Images/python.gif" alt="Python"></div>
                                        <div class="overlay"></div>
                                        <div class="description">
                                            <h4>Python</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 70%;" data-tooltip="70%"></div>
                                        <div class="percentage-value">70%</div>
                                    </div>
                                </label>

                                <input type="radio" name="slide" id="c2">
                                <label for="c2" class="card">
                                    <div class="row">
                                        <div class="icon"><img src="Images/c++.png" alt="C++"></div>
                                        <div class="description">
                                            <h4>C++</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 75%;" data-tooltip="75%"></div>
                                        <div class="percentage-value">75%</div>
                                    </div>
                                </label>

                                <input type="radio" name="slide" id="c3">
                                <label for="c3" class="card">
                                    <div class="row">
                                        <div class="icon"><img src="Images/java.gif" alt="Java"></div>
                                        <div class="description">
                                            <h4>Java</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 65%;" data-tooltip="65%"></div>
                                        <div class="percentage-value">65%</div>
                                    </div>
                                </label>

                                <input type="radio" name="slide" id="c4">
                                <label for="c4" class="card">
                                    <div class="row">
                                        <div class="icon"><img src="Images/html.gif" alt="HTML"></div>
                                        <div class="description">
                                            <h4>HTML</h4>
                                            <p></p>
                                        </div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 85%;" data-tooltip="85%"></div>
                                        <div class="percentage-value">85%</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>

                    <div id="graphic-design" class="sub-tab-content">
                        <div class="wrapper">
                            <div class="container">
                                <input type="radio" name="slide-gd" id="gd1" checked>
                                <label for="gd1" class="card">
                                    <div class="row">
                                        <div class="icon"><img src="Images/photoshop.gif" alt="Photoshop"></div>
                                        <div class="description">
                                            <h4>Adobe Photoshop</h4>
                                            <p>Image editing software for creatives.</p>
                                        </div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 85%;" data-tooltip="85%"></div>
                                        <div class="percentage-value">85%</div>
                                    </div>
                                </label>

                                <input type="radio" name="slide-gd" id="gd2">
                                <label for="gd2" class="card">
                                    <div class="row">
                                        <div class="icon"><img src="Images/ai.gif" alt="Illustrator"></div>
                                        <div class="description">
                                            <h4>Adobe Illustrator</h4>
                                            <p>Vector graphics software for creation.</p>
                                        </div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 70%;" data-tooltip="70%"></div>
                                        <div class="percentage-value">70%</div>
                                    </div>
                                </label>

                                <input type="radio" name="slide-gd" id="gd3">
                                <label for="gd3" class="card">
                                    <div class="row">
                                        <div class="icon"><img src="Images/figma.gif" alt="Figma"></div>
                                        <div class="description">
                                            <h4>Figma</h4>
                                            <p>The modern interface design tool for UI/UX projects.</p>
                                        </div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 60%;" data-tooltip="60%"></div>
                                        <div class="percentage-value">60%</div>
                                    </div>
                                </label>

                                <input type="radio" name="slide-gd" id="gd4">
                                <label for="gd4" class="card">
                                    <div class="row">
                                        <div class="icon"><img src="Images/canva.png" alt="Canva"></div>
                                        <div class="description">
                                            <h4>Canva</h4>
                                            <p>The design tool for creating various visual content.</p>
                                        </div>
                                    </div>
                                    <div class="progress-container">
                                        <div class="progress-bar" style="width: 90%;" data-tooltip="90%"></div>
                                        <div class="percentage-value">90%</div>
                                    </div>
                                </label>
                            </div>
                        </div>
                    </div>
                </div>

                <div id="soft-skills" class="tab-content">
                    <div class="wrapper">
                        <div class="container">
                            <input type="radio" name="slide-soft" id="soft1" checked>
                            <label for="soft1" class="card">
                                <div class="row">
                                    <div class="icon"><img src="Images/teamwork_bg.gif" alt="Teamwork"></div>
                                    <div class="description">
                                        <h4>Teamwork</h4>
                                        <p>Collaborate effectively to achieve goals.</p>
                                    </div>
                                </div>
                                <div class="progress-container">
                                    <div class="progress-bar" style="width: 90%;" data-tooltip="90%"></div>
                                    <div class="percentage-value">90%</div>
                                </div>
                            </label>

                            <input type="radio" name="slide-soft" id="soft2">
                            <label for="soft2" class="card">
                                <div class="row">
                                    <div class="icon"><img src="Images/communication.gif" alt="Communication"></div>
                                    <div class="description">
                                        <h4>Communication</h4>
                                        <p>Clearly convey ideas and actively listen.</p>
                                    </div>
                                </div>
                                <div class="progress-container">
                                    <div class="progress-bar" style="width: 85%;" data-tooltip="85%"></div>
                                    <div class="percentage-value">85%</div>
                                </div>
                            </label>

                            <input type="radio" name="slide-soft" id="soft3">
                            <label for="soft3" class="card">
                                <div class="row">
                                    <div class="icon"><img src="Images/problem_solving.png" alt="Problem Solving"></div>
                                    <div class="description">
                                        <h4>Problem Solving</h4>
                                        <p>Analyze and resolve issues efficiently.</p>
                                    </div>
                                </div>
                                <div class="progress-container">
                                    <div class="progress-bar" style="width: 80%;" data-tooltip="80%"></div>
                                    <div class="percentage-value">80%</div>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="contact" style="display: inline-block; width: 100vw; margin-left: 50px;">
            <span class="relative flex justify-center">
                <div
                    class="absolute inset-x-0 top-1/2 h-px -translate-y-1/2 bg-transparent bg-gradient-to-r from-transparent via-gray-500 to-transparent opacity-75">
                </div>
                <span class="relative z-10 bg-white glass px-6">
                    <h2>Contact Me</h2>
                </span>
            </span>

            <p class="contact_p" style="text-align: center;">If you would like to get in touch, feel free to reach out
                via email or through my social media channels.</p>

            <!-- Social Media Links -->
            <div class="social-media-links">
                <a href="https://taplink.cc/behanravishka" target="_blank" class="social-icon" aria-label="Taplink">
                    <img src="Images/taplink.png" alt="Taplink Icon">
                </a>
                <a href="https://www.linkedin.com/in/behanravishkaperera" target="_blank" class="social-icon" aria-label="LinkedIn">
                    <img src="Images/linkedin.gif" alt="LinkedIn Icon">
                </a>
                <a href="https://github.com/Behan-Ravishka" target="_blank" class="social-icon" aria-label="GitHub">
                    <img src="Images/github.gif" alt="GitHub Icon">
                </a>
                <a href="https://www.hackerrank.com/profile/behanravishka03" target="_blank" class="social-icon" aria-label="HackerRank">
                    <img src="Images/hackerrank.png" alt="HackerRank Icon">
                </a>
                <a href="https://www.facebook.com/behanravishkaperera" target="_blank" class="social-icon" aria-label="Facebook">
                    <img src="Images/facebook.gif" alt="Facebook Icon">
                </a>
                <a href="https://www.instagram.com/_behan.ravishka_/" target="_blank" class="social-icon" aria-label="Instagram">
                    <img src="Images/instagram.gif" alt="Instagram Icon">
                </a>
                <a href="https://open.spotify.com/user/315eljotqtzdtk3de4bi6ddv7ma4?si=zAFTJ9SHSqG4xGrgmxuDFg&utm_source=copy-link&nd=1&dlsi=02964d1fed0b4c1b" target="_blank" class="social-icon" aria-label="Spotify">
                    <img src="Images/spotify.gif" alt="Spotify Icon">
                </a>
                <a href="mailto:behanravishka03@gmail.com" target="_blank" class="social-icon" aria-label="Email">
                    <img src="Images/email.gif" alt="Email Icon">
                </a>
            </div>
            
            <!-- Contact Form Wrapper -->
            <div class="form-wrapper">
            <?php if (isset($_SESSION['message'])): ?>
            <div class="notification <?php echo $_SESSION['msg_type']; ?>">
                <?php 
                echo $_SESSION['message']; 
                unset($_SESSION['message']); // Clear the message after displaying
                unset($_SESSION['msg_type']); // Clear the message type
                ?>
                <span class="close-btn" onclick="this.parentElement.style.display='none';">&times;</span>
            </div>
        <?php endif; ?>
                <!-- Contact Form -->
                <form id="contactForm" action="contact.php" method="POST" class="contact-form">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>

                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>

                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="4" required></textarea>

                    <button type="submit">Send Message</button>

                </form>
            </div>
        </section>

    </div>
    <div id="chatbot">
    <span class="chatbot-icon">
        <img href="https://wa.me/+94763354538" src="Images/chatbot.gif" alt="Chatbot Icon">
    </span>
</div>
    <script src="script.js"></script>
</body>

</html>
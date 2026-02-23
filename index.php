<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Grace Community Church | Welcome</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:wght@400;700&family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar">
        <div class="nav-container">
            <div class="logo">
                <i class="fas fa-church"></i>
                <span>Grace Church</span>
            </div>
            <ul class="nav-menu">
                <li><a href="#home" class="nav-link">Home</a></li>
                <li><a href="#about" class="nav-link">About</a></li>
                <li><a href="#services" class="nav-link">Services</a></li>
                <li><a href="#events" class="nav-link">Events</a></li>
                <li><a href="#contact" class="nav-link">Contact</a></li>
            </ul>
            <div class="hamburger">
                <span></span>
                <span></span>
                <span></span>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero">
        <div class="hero-content">
            <h1 class="animate-text">Welcome to Grace Community Church</h1>
            <p class="animate-text-delay">A place of love, hope, and spiritual growth</p>
            <a href="#about" class="btn btn-primary animate-btn">Learn More</a>
        </div>
        <div class="hero-overlay"></div>
    </section>

    <!-- About Section -->
    <section id="about" class="about">
        <div class="container">
            <h2 class="section-title">About Us</h2>
            <div class="about-content">
                <div class="about-text fade-in">
                    <p>We are a vibrant community of believers dedicated to spreading God's love and serving our community. Our doors are open to everyone seeking faith, hope, and fellowship.</p>
                    <p>Join us as we grow together in faith and make a difference in the world around us.</p>
                </div>
                <div class="about-stats slide-in">
                    <div class="stat-item">
                        <i class="fas fa-users"></i>
                        <span class="stat-number">500+</span>
                        <span>Members</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-clock"></i>
                        <span class="stat-number">10+</span>
                        <span>Weekly Services</span>
                    </div>
                    <div class="stat-item">
                        <i class="fas fa-heart"></i>
                        <span class="stat-number">15+</span>
                        <span>Ministries</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Services Section -->
    <section id="services" class="services">
        <div class="container">
            <h2 class="section-title">Our Services</h2>
            <div class="services-grid">
                <div class="service-card card-hover">
                    <i class="fas fa-sun"></i>
                    <h3>Sunday Worship</h3>
                    <p>9:00 AM & 11:00 AM</p>
                    <p>Main Sanctuary</p>
                </div>
                <div class="service-card card-hover">
                    <i class="fas fa-bible"></i>
                    <h3>Bible Study</h3>
                    <p>Wednesdays 7:00 PM</p>
                    <p>Fellowship Hall</p>
                </div>
                <div class="service-card card-hover">
                    <i class="fas fa-pray"></i>
                    <h3>Prayer Meeting</h3>
                    <p>Fridays 6:00 AM</p>
                    <p>Prayer Room</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Events Section -->
    <section id="events" class="events">
        <div class="container">
            <h2 class="section-title">Upcoming Events</h2>
            <div class="events-timeline">
                <div class="event-item bounce-in">
                    <div class="event-date">
                        <span class="day">25</span>
                        <span class="month">DEC</span>
                    </div>
                    <div class="event-details">
                        <h3>Christmas Eve Service</h3>
                        <p>Join us for a special candlelight service celebrating the birth of our Savior.</p>
                    </div>
                </div>
                <div class="event-item bounce-in">
                    <div class="event-date">
                        <span class="day">31</span>
                        <span class="month">DEC</span>
                    </div>
                    <div class="event-details">
                        <h3>Watch Night Service</h3>
                        <p>Welcome the New Year with prayer and worship.</p>
                    </div>
                </div>
                <div class="event-item bounce-in">
                    <div class="event-date">
                        <span class="day">15</span>
                        <span class="month">JAN</span>
                    </div>
                    <div class="event-details">
                        <h3>Community Outreach</h3>
                        <p>Serving our local community with love and compassion.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Section -->
    <section id="contact" class="contact">
        <div class="container">
            <h2 class="section-title">Contact Us</h2>
            <div class="contact-container">
                <div class="contact-info slide-in-left">
                    <div class="info-item">
                        <i class="fas fa-map-marker-alt"></i>
                        <div>
                            <h3>Address</h3>
                            <p>123 Faith Avenue<br>Grace City, ST 12345</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-phone"></i>
                        <div>
                            <h3>Phone</h3>
                            <p>(555) 123-4567</p>
                        </div>
                    </div>
                    <div class="info-item">
                        <i class="fas fa-envelope"></i>
                        <div>
                            <h3>Email</h3>
                            <p>info@gracechurch.org</p>
                        </div>
                    </div>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-facebook"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-twitter"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-youtube"></i></a>
                    </div>
                </div>
                <div class="contact-form slide-in-right">
                    <form id="contactForm" method="POST">
                        <div class="form-group">
                            <input type="text" name="name" placeholder="Your Name" required>
                        </div>
                        <div class="form-group">
                            <input type="email" name="email" placeholder="Your Email" required>
                        </div>
                        <div class="form-group">
                            <input type="tel" name="phone" placeholder="Your Phone">
                        </div>
                        <div class="form-group">
                            <textarea name="message" placeholder="Your Message" rows="5" required></textarea>
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary">Send Message</button>
                    </form>
                    <div id="formMessage" class="form-message"></div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <p>&copy; 2024 Grace Community Church. All rights reserved.</p>
        </div>
    </footer>

    <script src="script.js"></script>
</body>
</html>

<?php
// Handle form submission
if (isset($_POST['submit'])) {
    $servername = "localhost";
    $username = "root";
    $password = "";
    $dbname = "church_website";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    // Get form data
    $name = $conn->real_escape_string($_POST['name']);
    $email = $conn->real_escape_string($_POST['email']);
    $phone = $conn->real_escape_string($_POST['phone']);
    $message = $conn->real_escape_string($_POST['message']);
    
    // Insert data
    $sql = "INSERT INTO contact_messages (name, email, phone, message) 
            VALUES ('$name', '$email', '$phone', '$message')";
    
    if ($conn->query($sql) === TRUE) {
        echo "<script>document.getElementById('formMessage').innerHTML = '<div class=\"success-message\">Message sent successfully!</div>';</script>";
    } else {
        echo "<script>document.getElementById('formMessage').innerHTML = '<div class=\"error-message\">Error: " . $conn->error . "</div>';</script>";
    }
    
    $conn->close();
}
?>
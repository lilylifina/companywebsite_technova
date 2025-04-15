<?php
require_once './classes/Page.php';

$page = new Page("Welcome to TechNova");
$page->renderHeader();
?>

<section class="hero">
    <div class="hero-overlay">
        <h1>Innovate. Transform. Lead.</h1>
        <p>Empowering businesses with tailor-made tech solutions that drive success in the digital era.</p>
        <a href="#services" class="btn-hero">Explore Our Services</a>
        <a href="contact.php" class="btn-hero btn-secondary">Get a Free Consultation</a>
    </div>
</section>


<!-- SERVICES SECTION -->
<!-- SERVICES SECTION -->
<section class="services" id="services">
    <div class="container">
        <h2 class="section-title">🛠️ Our Services</h2>
        <p class="section-subtitle">Discover how we help your business grow with our wide range of digital solutions.</p>

        <div class="service-list">
            <div class="service-item">
                <img src="assets/img/software.jpeg" alt="Custom Software">
                <h3>Custom Software Development</h3>
                <p>We craft tailored software solutions to improve your workflow and efficiency.</p>
            </div>
            <div class="service-item">
                <img src="assets/img/mobile.jpeg" alt="Mobile App">
                <h3>Mobile App Solutions</h3>
                <p>Modern mobile apps to enhance your customer experience and engagement.</p>
            </div>
            <div class="service-item">
                <img src="assets/img/web.jpeg" alt="Web Design">
                <h3>Web Design & Development</h3>
                <p>Stunning and responsive websites that reflect your brand identity.</p>
            </div>
            <div class="service-item">
                <img src="assets/img/security.jpeg" alt="IT Security">
                <h3>IT Security Consultation</h3>
                <p>Protect your business with expert cybersecurity strategies and tools.</p>
            </div>
        </div>
    </div>
</section>

<!-- QUICK FACTS SECTION -->
<section class="quick-facts">
    <div class="container facts-grid">
        <div class="fact-card">
            <h3 class="fact-number">+120</h3>
            <p class="fact-label">Clients Collaborated</p>
        </div>
        <div class="fact-card">
            <h3 class="fact-number">85+</h3>
            <p class="fact-label">Projects Delivered</p>
        </div>
        <div class="fact-card">
            <h3 class="fact-number">15</h3>
            <p class="fact-label">Years in Operation</p>
        </div>
        <div class="fact-card">
            <h3 class="fact-number">5</h3>
            <p class="fact-label">Offices Worldwide</p>
        </div>
    </div>
</section>


<?php $page->renderFooter(); ?>

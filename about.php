<?php
require_once './classes/Page.php';

$page = new Page("About Us - TechNova");
$page->renderHeader();
?>

<section class="about-us">
    <div class="container about-grid">
        <div class="about-text">
            <h4 class="about-subtitle">MORE ABOUT US</h4>
            <h2 class="about-title">Innovating with Purpose, Leading with Tech</h2>
            <p class="about-description">
                At TechNova, we believe in harnessing the power of technology to create transformative business solutions. 
                Our mission is to deliver custom-built, future-ready systems that help organizations thrive in the digital age.
            </p>

            <div class="about-features">
                <div class="feature-column">
                    <p><span class="check-icon">✔️</span> Scalable custom tech solutions</p>
                    <p><span class="check-icon">✔️</span> Human-centered product design</p>
                    <p><span class="check-icon">✔️</span> Agile project implementation</p>
                </div>
                <div class="feature-column">
                    <p><span class="check-icon">✔️</span> Transparent collaboration</p>
                    <p><span class="check-icon">✔️</span> Industry-grade cybersecurity</p>
                    <p><span class="check-icon">✔️</span> Proven innovation track record</p>
                </div>
            </div>
        </div>

        <div class="about-images">
            <div class="image-overlay">
                <img src="assets/img/hero-bg.jpeg" alt="Office environment" class="office-image">
                <div class="experience-badge">
                    <h3>15+ <span>Years</span></h3>
                    <p>Of experience in business service</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Meet Our Team Section -->
<section class="meet-our-team">
    <h2 class="team-title">Meet Our Team</h2>
    <p class="team-subtitle">Driven by passion, united by innovation.</p>
    <div class="team-grid">
        <div class="team-member">
            <img src="assets/img/founder1.jpeg" alt="Team Member 1" class="team-photo">
            <h4 class="team-name">Ari Nugroho</h4>
            <p class="team-role">Founder & CEO</p>
        </div>
        <div class="team-member">
            <img src="assets/img/founder2.jpeg" alt="Team Member 2" class="team-photo">
            <h4 class="team-name">Sinta Dewi</h4>
            <p class="team-role">CTO</p>
        </div>
        <div class="team-member">
            <img src="assets/img/founder3.jpeg" alt="Team Member 3" class="team-photo">
            <h4 class="team-name">Raka Prasetya</h4>
            <p class="team-role">Lead Product Designer</p>
        </div>
    </div>
</section>

<!-- Our Projects Section -->
<section class="our-projects">
    <div class="container">
        <h2 class="projects-title">Our Projects</h2>
        <p class="projects-subtitle">We deliver impactful solutions across various industries.</p>
        
        <div class="projects-grid">
            <div class="project-card">
                <img src="assets/img/city.jpeg" alt="Project 1" class="project-image">
                <h4 class="project-name">SmartCity Dashboard</h4>
                <p class="project-desc">An integrated platform for urban data visualization and real-time monitoring.</p>
            </div>

            <div class="project-card">
                <img src="assets/img/pr2.jpeg" alt="Project 2" class="project-image">
                <h4 class="project-name">GreenTrack App</h4>
                <p class="project-desc">A sustainability-focused app helping users monitor resource usage and eco-impact.</p>
            </div>

            <div class="project-card">
                <img src="assets/img/pr3.jpeg" alt="Project 3" class="project-image">
                <h4 class="project-name">NovaSecure IoT</h4>
                <p class="project-desc">An IoT-based smart home security system for real-time threat response.</p>
            </div>

            <div class="project-card">
                <img src="assets/img/pr4.jpeg" alt="Project 4" class="project-image">
                <h4 class="project-name">Retail AI Insight</h4>
                <p class="project-desc">Machine learning-powered customer behavior analytics for retail businesses.</p>
            </div>

            <div class="project-card">
                <img src="assets/img/pr5.jpeg" alt="Project 5" class="project-image">
                <h4 class="project-name">EduTech Platform</h4>
                <p class="project-desc">A smart education suite with virtual classes, scheduling, and learning analytics.</p>
            </div>

            <div class="project-card">
                <img src="assets/img/pr6.jpeg" alt="Project 6" class="project-image">
                <h4 class="project-name">AgroData System</h4>
                <p class="project-desc">A digital agriculture tool for monitoring crop health and optimizing yield.</p>
            </div>
        </div>
    </div>
</section>

<?php $page->renderFooter(); ?>

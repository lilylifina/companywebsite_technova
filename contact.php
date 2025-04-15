<?php
require_once './classes/Page.php';

$page = new Page("Contact - TechNova");
$page->renderHeader();
?>

<link rel="stylesheet" href="assets/css/contact.css">

<section class="contact-hero">
    <div class="contact-hero-overlay fade-in">
        <h1>Contact TechNova</h1>
        <p>Reach out to us anytime — we're here to help you grow with technology.</p>
    </div>
</section>

<main class="contact-section">
    <div class="contact-content fade-in">
        <section class="contact-details">
            <h2>Contact Information</h2>
            <p>📧 <strong>Email:</strong> <a href="mailto:contact@technova.com">contact@technova.com</a></p>
            <p>📞 <strong>Phone:</strong> <a href="tel:+6281234567890">+62 812 3456 7890</a></p>
            <p>📍 <strong>Address:</strong> Jl. Inovasi No. 123, Jakarta, Indonesia</p>
        </section>

        <section class="contact-form">
            <h2>Send Us a Message</h2>
            <form action="#" method="post">
                <input type="text" name="name" placeholder="Your Name" required>
                <input type="email" name="email" placeholder="Your Email" required>
                <textarea name="message" placeholder="Your Message" rows="6" required></textarea>
                <button type="submit">Send Message</button>
            </form>
        </section>
    </div>
</main>

<?php
$page->renderFooter();
?>

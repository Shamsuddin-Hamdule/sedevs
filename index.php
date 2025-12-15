<?php
include 'navbar.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SE Software & Web Developers</title>
    <link rel="icon" type="image/png" href="S.png">
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Additional inline styles specific to index.php */
        .greeting-section {
            background: linear-gradient(135deg, #1E88E5 0%, #0D47A1 100%);
            padding: 40px 20px;
            border-radius: 10px;
            margin: 30px 0;
            text-align: center;
            color: white;
        }
        
        .greeting-section h3 {
            font-size: 2.5em;
            margin: 10px 0;
            color: #fff;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.3);
        }
        
        .services-grid, .portfolio-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 30px;
            margin: 40px 0;
        }
        
        .service-card, .portfolio-card {
            background: #1F1F1F;
            border-radius: 10px;
            padding: 25px;
            transition: all 0.3s ease;
            border: 2px solid transparent;
        }
        
        .service-card:hover, .portfolio-card:hover {
            transform: translateY(-10px);
            border-color: #76FF03;
            box-shadow: 0 10px 30px rgba(118, 255, 3, 0.2);
        }
        
        .service-card h3, .portfolio-card h3 {
            color: #76FF03;
            margin-bottom: 15px;
        }
        
        .section-header {
            text-align: center;
            margin: 50px 0 30px 0;
            position: relative;
        }
        
        .section-header h2 {
            display: inline-block;
            padding-bottom: 10px;
            position: relative;
        }
        
        .section-header h2::after {
            content: '';
            position: absolute;
            width: 50%;
            height: 3px;
            background: #76FF03;
            bottom: 0;
            left: 25%;
        }
        
        .portfolio-card a {
            color: #76FF03;
            text-decoration: none;
            font-weight: bold;
            display: inline-block;
            margin-top: 15px;
        }
        
        .portfolio-card a:hover {
            text-decoration: underline;
        }
        
        .badge {
            background: #76FF03;
            color: #000;
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8em;
            margin-left: 10px;
        }
    </style>
</head>
<body>

<div class="container main-content">
    <div class="greeting-section">
        <h2>Welcome to SE Software & Web Developers</h2>
        <?php
            date_default_timezone_set('Asia/Kolkata'); // Changed to Indian timezone
            $hour = date('H');
            
            if ($hour < 12) {
                $greeting = "Good Morning!";
                $icon = "☀️";
            } elseif ($hour < 18) {
                $greeting = "Good Afternoon!";
                $icon = "⛅";
            } else {
                $greeting = "Good Evening!";
                $icon = "🌙";
            }
            
            echo "<h3>$icon $greeting</h3>";
            echo "<p>Current time: " . date('h:i A') . "</p>";
        ?>
        <p>Your trusted partner for digital solutions</p>
    </div>

    <div class="section-header">
        <h2>Our Services</h2>
        <p class="subtitle">Comprehensive solutions for your digital needs</p>
    </div>
    
    <div class="services-grid">
        <div class="service-card">
            <div class="service-icon">💻</div>
            <h3>Web Development <span class="badge">Popular</span></h3>
            <p>We build responsive, SEO-friendly websites with modern frameworks like React, Vue.js, and Laravel.</p>
            <ul class="service-features">
                <li>Custom WordPress Development</li>
                <li>E-commerce Solutions</li>
                <li>CMS Development</li>
                <li>API Integration</li>
            </ul>
        </div>
        
        <div class="service-card">
            <div class="service-icon">📱</div>
            <h3>Mobile App Development</h3>
            <p>Native and cross-platform mobile applications for iOS and Android using Flutter and React Native.</p>
            <ul class="service-features">
                <li>iOS App Development</li>
                <li>Android App Development</li>
                <li>Hybrid Applications</li>
                <li>App Store Deployment</li>
            </ul>
        </div>
        
        <div class="service-card">
            <div class="service-icon">🛒</div>
            <h3>E-commerce Solutions</h3>
            <p>Complete online store setup with payment integration, inventory management, and analytics.</p>
            <ul class="service-features">
                <li>Shopify/WooCommerce</li>
                <li>Payment Gateway Setup</li>
                <li>Inventory Management</li>
                <li>Order Tracking System</li>
            </ul>
        </div>
    </div>

    <div class="section-header">
        <h2>Featured Projects</h2>
        <p class="subtitle">Our recent successful implementations</p>
    </div>
    
    <div class="portfolio-grid">
        <div class="portfolio-card">
            <h3><a href="https://hamdulefrozenfoods.wordpress.com" target="_blank">Hamdule Frozen Foods</a></h3>
            <p class="tech-stack"><strong>Tech:</strong> WordPress, WooCommerce, PHP</p>
            <p>A dynamic e-commerce website for frozen foods with online ordering and delivery tracking.</p>
            <a href="https://hamdulefrozenfoods.wordpress.com" target="_blank">Visit Live Site →</a>
        </div>
        
        <div class="portfolio-card">
            <h3><a href="http://softlinetravelservices.co.in" target="_blank">Softline Travel Services</a></h3>
            <p class="tech-stack"><strong>Tech:</strong> HTML5, CSS3, JavaScript, PHP</p>
            <p>Comprehensive travel booking portal with real-time availability and online payments.</p>
            <a href="http://softlinetravelservices.co.in" target="_blank">Visit Live Site →</a>
        </div>
        
        <div class="portfolio-card">
            <h3><a href="parkareyeclinics/index.php">Parkar Eye Clinics</a></h3>
            <p class="tech-stack"><strong>Tech:</strong> Bootstrap, PHP, MySQL</p>
            <p>Healthcare portal with appointment booking, doctor profiles, and patient management.</p>
            <a href="parkareyeclinics/index.php">View Project →</a>
        </div>
    </div>

    <div class="cta-section">
        <h2>Ready to Start Your Project?</h2>
        <p>Contact us today for a free consultation and quote.</p>
        <a href="contact.php" class="cta-button">Get in Touch</a>
    </div>
</div>

</body>
</html>

<?php
include 'footer.php';
?>

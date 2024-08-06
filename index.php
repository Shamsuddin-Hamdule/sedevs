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
    </head>
<body>



<div class="container">
    <h2>Welcome to Our Website</h2>
    <?php
        date_default_timezone_set('UTC');
        $hour = date('H');

        if ($hour < 12) {
            $greeting = "Good Morning!";
        } elseif ($hour < 18) {
            $greeting = "Good Afternoon!";
        } else {
            $greeting = "Good Evening!";
        }

        echo "<h3>$greeting</h3>";
    ?>

    <h2>Our Services</h2>
    <div class="services">
        <div class="service">
            <h3>Web Development</h3>
            <p>We build responsive and dynamic websites.</p>
        </div>
        <div class="service">
            <h3>Mobile App Development</h3>
            <p>Custom mobile apps for iOS and Android.</p>
        </div>
        <div class="service">
            <h3>E-commerce Solutions</h3>
            <p>Complete solutions for your online store.</p>
        </div>
    </div>

    <h2>Our Work</h2>
    <div class="portfolio">
        <div class="portfolio-item">
            <h3><a href="https://hamdulefrozenfoods.wordpress.com" style="color: #76FF03;">Hamdule Frozen Foods</a></h3>
            <p>A dynamic website for a frozen foods company.</p>
        </div>
        <div class="portfolio-item">
            <h3><a href="http://softlinetravelservices.co.in" style="color: #76FF03;">Softline Travel Services</a></h3>
            <p>A comprehensive travel service website.</p>
        </div>
        <div class="portfolio-item">
            <h3><a href="https://kokan-kirana-and-general-stores.jimdosite.com/" style="color: #76FF03;">Kokan Kirana and General Stores</a></h3>
            <p>An online store for groceries and general items.</p>
        </div>
        <div class="portfolio-item">
            <h3><a href="https://foodsboxdelivery.com" style="color: #76FF03;">Foods Box Delivery</a></h3>
            <p>A food delivery service portal.</p>
        </div>
        <div class="portfolio-item">
            <h3><a href="parkareyeclinics/index.php" style="color: #76FF03;">Parkar Eye Clinics</a></h3>
            <p>A website for a chain of eye clinics.</p>
        </div>
    </div>

    <h2>Software Developed by Us</h2>
    <div class="portfolio">
        <div class="portfolio-item">
            <h3>Fast Food Management Software</h3>
        </div>
        <div class="portfolio-item">
            <h3>Weighbridge Management Software</h3>
        </div>
        <div class="portfolio-item">
            <h3>Food Ordering Portal</h3>
        </div>
    </div>

    <h2>Android Apps</h2>
    <div class="portfolio">
        <div class="portfolio-item">
            <h3>Foods Box Delivery</h3>
        </div>
        <div class="portfolio-item">
            <h3>Parkar Eye Clinics</h3>
        </div>
    </div>
</div>

</body>
</html>

<?php
include 'footer.php';
?>
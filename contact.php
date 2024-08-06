<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - SE Software & Web Developers</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="icon" type="image/png" href="S.png">
</head>
<body>
    <?php include 'navbar.php'; ?>

    <main>
        <section class="contact-us">
            <div class="container">
                <h1>Contact Us</h1>
                <p>If you have any questions or would like to get in touch with us, please fill out the form below. We look forward to hearing from you!</p>

                <?php
                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = htmlspecialchars($_POST['name']);
                    $email = htmlspecialchars($_POST['email']);
                    $message = htmlspecialchars($_POST['message']);

                    // Form validation can be added here

                    // For now, let's just simulate form submission success
                    echo "<p>Thank you, $name! Your message has been sent.</p>";

                    // In a real application, you would send an email or save the message to a database
                }
                ?>

                <form action="contact_us.php" method="post">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                    
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                    
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" rows="5" required></textarea>
                    
                    <button type="submit">Send Message</button>
                </form>
            </div>
        </section>
    </main>

    <?php include 'footer.php'; ?>
</body>
</html>

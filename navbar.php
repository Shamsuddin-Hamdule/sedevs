<?php
// navbar.php - Improved version
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="icon" type="image/png" href="S.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        .navbar .social-buttons {
            display: flex;
            gap: 10px;
            align-items: center;
        }
        
        .social-buttons .btn {
            width: 40px;
            height: 40px;
            padding: 0;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
        }
        
        .navbar-brand-text {
            color: white;
            font-weight: 700;
            margin-left: 10px;
            font-size: 1.3rem;
        }
        
        @media (max-width: 992px) {
            .social-buttons {
                margin-top: 15px;
                justify-content: center;
            }
        }
    </style>
</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark fixed-top">
    <div class="container">
        <a class="navbar-brand d-flex align-items-center" href="index.php">
            <img src="S.png" alt="SE Logo" width="45" height="45" class="d-inline-block align-text-top me-2">
            <span class="navbar-brand-text">SE Software & Web Developers</span>
        </a>
        
        <div class="social-buttons d-none d-lg-flex">
            <a href="https://www.linkedin.com/company/se-software-web-developers/" 
               class="btn btn-primary" 
               target="_blank" 
               title="LinkedIn">
                <i class="fab fa-linkedin-in"></i>
            </a>
            <a href="https://github.com/Shamsuddin-Hamdule" 
               class="btn btn-dark" 
               target="_blank" 
               title="GitHub">
                <i class="fab fa-github"></i>
            </a>
            <a href="tel:7249785423" 
               class="btn btn-success" 
               title="Call Us">
                <i class="fas fa-phone-alt"></i>
            </a>
        </div>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'index.php' ? 'active' : ''; ?>" 
                       href="index.php">
                       <i class="fas fa-home me-1"></i> Home
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'about.php' ? 'active' : ''; ?>" 
                       href="about.php">
                       <i class="fas fa-info-circle me-1"></i> About
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'services.php' ? 'active' : ''; ?>" 
                       href="services.php">
                       <i class="fas fa-cogs me-1"></i> Services
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'portfolio.php' ? 'active' : ''; ?>" 
                       href="portfolio.php">
                       <i class="fas fa-briefcase me-1"></i> Portfolio
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link <?php echo basename($_SERVER['PHP_SELF']) == 'contact.php' ? 'active' : ''; ?>" 
                       href="contact.php">
                       <i class="fas fa-envelope me-1"></i> Contact
                    </a>
                </li>
            </ul>
            
            <div class="social-buttons d-flex d-lg-none mt-3 justify-content-center">
                <a href="https://www.linkedin.com/company/se-software-web-developers/" 
                   class="btn btn-primary btn-sm" 
                   target="_blank">
                    <i class="fab fa-linkedin-in"></i>
                </a>
                <a href="https://github.com/Shamsuddin-Hamdule" 
                   class="btn btn-dark btn-sm" 
                   target="_blank">
                    <i class="fab fa-github"></i>
                </a>
                <a href="tel:7249785423" 
                   class="btn btn-success btn-sm">
                    <i class="fas fa-phone-alt"></i>
                </a>
            </div>
        </div>
    </div>
</nav>

<header class="top-header">
    <div class="container">
        <div class="d-flex justify-content-between align-items-center">
            <div>
                <span class="contact-info">
                    <i class="fas fa-phone-alt me-2"></i> 7249785423
                </span>
                <span class="mx-3">|</span>
                <span class="contact-info">
                    <i class="fas fa-envelope me-2"></i> hamduleshamsuddin@gmail.com
                </span>
            </div>
            <a href="contact.php" class="btn btn-outline-light btn-sm">
                <i class="fas fa-paper-plane me-1"></i> Get Quote
            </a>
        </div>
    </div>
</header>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>

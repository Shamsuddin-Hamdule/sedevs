<!-- footer.php -->
<footer class="site-footer">
    <div class="container">
        <div class="footer-content">
            <div class="footer-section">
                <h3 class="footer-logo">
                    <img src="S.png" alt="SE Logo" width="40" height="40">
                    SE Software & Web Developers
                </h3>
                <p class="footer-description">
                    We deliver innovative digital solutions that drive business growth and success.
                </p>
                <div class="social-links">
                    <a href="https://www.linkedin.com/company/se-software-web-developers/" 
                       class="social-link" 
                       target="_blank"
                       title="LinkedIn">
                        <i class="fab fa-linkedin"></i>
                    </a>
                    <a href="https://github.com/Shamsuddin-Hamdule" 
                       class="social-link" 
                       target="_blank"
                       title="GitHub">
                        <i class="fab fa-github"></i>
                    </a>
                    <a href="https://twitter.com" 
                       class="social-link" 
                       target="_blank"
                       title="Twitter">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a href="https://www.instagram.com" 
                       class="social-link" 
                       target="_blank"
                       title="Instagram">
                        <i class="fab fa-instagram"></i>
                    </a>
                </div>
            </div>
            
            <div class="footer-section">
                <h4>Quick Links</h4>
                <ul class="footer-links">
                    <li><a href="index.php"><i class="fas fa-chevron-right me-2"></i> Home</a></li>
                    <li><a href="about.php"><i class="fas fa-chevron-right me-2"></i> About Us</a></li>
                    <li><a href="services.php"><i class="fas fa-chevron-right me-2"></i> Services</a></li>
                    <li><a href="portfolio.php"><i class="fas fa-chevron-right me-2"></i> Portfolio</a></li>
                    <li><a href="contact.php"><i class="fas fa-chevron-right me-2"></i> Contact</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Services</h4>
                <ul class="footer-links">
                    <li><a href="services.php#web"><i class="fas fa-code me-2"></i> Web Development</a></li>
                    <li><a href="services.php#mobile"><i class="fas fa-mobile-alt me-2"></i> Mobile Apps</a></li>
                    <li><a href="services.php#ecommerce"><i class="fas fa-shopping-cart me-2"></i> E-commerce</a></li>
                    <li><a href="services.php#software"><i class="fas fa-laptop-code me-2"></i> Software Solutions</a></li>
                </ul>
            </div>
            
            <div class="footer-section">
                <h4>Contact Info</h4>
                <div class="contact-info">
                    <p><i class="fas fa-phone-alt me-2"></i> 7249785423</p>
                    <p><i class="fas fa-envelope me-2"></i> hamduleshamsuddin@gmail.com</p>
                    <p><i class="fas fa-clock me-2"></i> Mon - Fri: 9:00 AM - 6:00 PM</p>
                    <p><i class="fas fa-map-marker-alt me-2"></i> India</p>
                </div>
            </div>
        </div>
        
        <div class="footer-bottom">
            <p>&copy; 2024 SE Software & Web Developers. All Rights Reserved.</p>
            <p class="developer-credit">
                Designed with <i class="fas fa-heart" style="color: #ff4757;"></i> by SE Team
            </p>
        </div>
    </div>
</footer>

<style>
    .site-footer {
        background: linear-gradient(135deg, #0D47A1 0%, #1E88E5 100%);
        color: white;
        padding: 60px 0 20px;
        margin-top: auto;
    }
    
    .footer-content {
        display: grid;
        grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        gap: 40px;
        margin-bottom: 40px;
    }
    
    .footer-section h3, .footer-section h4 {
        color: white;
        margin-bottom: 20px;
        font-weight: 600;
    }
    
    .footer-logo {
        display: flex;
        align-items: center;
        gap: 10px;
    }
    
    .footer-description {
        color: rgba(255, 255, 255, 0.8);
        margin: 15px 0;
        line-height: 1.6;
    }
    
    .social-links {
        display: flex;
        gap: 15px;
        margin-top: 20px;
    }
    
    .social-link {
        display: inline-flex;
        align-items: center;
        justify-content: center;
        width: 40px;
        height: 40px;
        background: rgba(255, 255, 255, 0.1);
        border-radius: 50%;
        color: white;
        text-decoration: none;
        transition: all 0.3s ease;
    }
    
    .social-link:hover {
        background: var(--secondary-color);
        transform: translateY(-3px);
        color: #000;
    }
    
    .footer-links {
        list-style: none;
        padding: 0;
    }
    
    .footer-links li {
        margin-bottom: 12px;
    }
    
    .footer-links a {
        color: rgba(255, 255, 255, 0.8);
        text-decoration: none;
        transition: all 0.3s ease;
        display: flex;
        align-items: center;
    }
    
    .footer-links a:hover {
        color: var(--secondary-color);
        transform: translateX(5px);
    }
    
    .contact-info p {
        color: rgba(255, 255, 255, 0.8);
        margin-bottom: 15px;
        display: flex;
        align-items: center;
    }
    
    .footer-bottom {
        border-top: 1px solid rgba(255, 255, 255, 0.1);
        padding-top: 20px;
        text-align: center;
        color: rgba(255, 255, 255, 0.7);
        font-size: 0.9rem;
    }
    
    .developer-credit {
        margin-top: 10px;
        font-size: 0.85rem;
    }
    
    @media (max-width: 768px) {
        .footer-content {
            grid-template-columns: 1fr;
            gap: 30px;
        }
        
        .footer-section {
            text-align: center;
        }
        
        .footer-links a, .contact-info p {
            justify-content: center;
        }
        
        .social-links {
            justify-content: center;
        }
    }
</style>

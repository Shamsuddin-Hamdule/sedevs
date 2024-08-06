<!doctype html>
<html lang="en">
  <head>
  <link rel="icon" type="image/png" href="S.png">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>

<nav class="navbar navbar-dark bg-dark sticky-top">
  <div class="container-fluid">
    <h2>
      <a class="navbar-brand" href="index.php" title="SE Software & Web Developers">
        <img src="S.png" alt="Logo" width="10%" height="auto">
      </a>
      SE Software & Web Developers
    </h2><br>
    <a href="https://www.linkedin.com/company/se-software-web-developers/" class="btn btn-primary"> LinkedIn </a>
    <a href="https://github.com/Shamsuddin-Hamdule" class="btn btn-primary"> GitHub </a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNavDropdown">
      <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="index.php" title="Home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="about.php" title="About us">About us</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="services.php" title="Services">Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="portfolio.php" title="Portfolio">Portfolio</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="contact.php" title="Contact us">Contact us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<header>
    <h5>📞 7249785423</h5>
</header>
<style>
        @import url('https://fonts.googleapis.com/css2?family=Roboto:wght@300;400;700&display=swap');

        body {
            font-family: 'Roboto', sans-serif;
            margin: 0;
            padding: 0;
            color: #e0e0e0;
            background-color: #121212;
        }
        header {
            background-color: #1E88E5;
            color: white;
            padding: 20px 0;
            text-align: center;
            box-shadow: 0 2px 4px rgba(0,0,0,0.1);
        }
        .container {
            width: 80%;
            margin: 0 auto;
            padding: 40px;
            display: ;
            justify-content: center;
            align-items: center;
        }
        h2 {
            color: #1E88E5;
            text-align: center;
            margin-bottom: 40px;
        }
        .services, .portfolio {
            display: flex;
            flex-wrap: wrap;
            justify-content: space-around;
            align-items: center;
        }
        .service, .portfolio-item {
            background-color: #1F1F1F;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 15px rgba(0, 0, 0, 0.3);
            margin: 20px;
            width: 30%;
            box-sizing: border-box;
            transition: transform 0.3s ease, box-shadow 0.3s ease, background-color 0.3s ease;
    
        }
        .service:hover, .portfolio-item:hover {
            transform: scale(1.05);
            box-shadow: 0 0 25px rgba(0, 0, 0, 0.5);
            background-color: #282828;
            border: 5px solid yellow;
        }
        .service h3, .portfolio-item h3 {
            color: #76FF03;
            margin-bottom: 15px;
        }
        .service p, .portfolio-item p {
            color: #b0b0b0;
        }
        footer {
            background-color: #1E88E5;
            color: white;
            text-align: center;
            padding: 20px 0;
            bottom: 0;
            width: 100%;
            box-shadow: 0 -2px 4px rgba(0,0,0,0.1);
        }
        h3 {
            animation: fade-in 2s;
        }
        @keyframes fade-in {
            0% { opacity: 0; }
            100% { opacity: 1; }
        }
        @media (max-width: 768px) {
            .container {
                width: 90%;
            }
            .service, .portfolio-item {
                width: 45%;
            }
        }
        @media (max-width: 480px) {
            .service, .portfolio-item {
                width: 100%;
            }
        }
    </style>

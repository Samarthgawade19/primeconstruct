
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-4Q6Gf2aSP4eDXB8Miphtr37CMZZQ5oXLH2yaXMJ2w8e2ZtHTl7GptT4jmndRuHDT" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.6/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-j1CDi7MgGQ12Z7Qab0qlWQ/Qqz24Gc6BM0thvEMVjHnfYGF0rmFCozFSxQBxwHKO" crossorigin="anonymous"></script>
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css" rel="stylesheet">


<header class="bg-dark text-white py-3">
  <div class="container text-center">
    <h2 class="mb-0 fw-bold">PrimeConstruct</h2>
    <p class="small text-secondary">Building your vision with precision</p>
  </div>
</header>

<style>
  .nav-link {
    position: relative;
  }

  .nav-link::after {
    content: "";
    position: absolute;
    width: 0%;
    height: 2px;
    bottom: 0;
    left: 0;
    background-color: #fff;
    transition: 0.3s;
  }

  .nav-link:hover::after {
    width: 100%;
  }
</style>

<nav class="navbar navbar-expand-lg navbar-dark bg-black shadow-sm sticky-top">
  <div class="container">
    <a class="navbar-brand d-lg-none fw-bold" href="#">PrimeConstruct</a>
    <button class="navbar-toggler border-0" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    
    <div class="collapse navbar-collapse justify-content-center" id="navbarNav">
      <ul class="navbar-nav gap-3">
        <li class="nav-item">
          <a class="nav-link text-white" href="index.php"><i class="fas fa-home me-1"></i>Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="services.php"><i class="fas fa-tools me-1"></i>Services</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="about.php"><i class="fas fa-info-circle me-1"></i>About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="project.php"><i class="fas fa-briefcase me-1"></i>Our Projects</a>
        </li>
        <li class="nav-item">
          <a class="nav-link text-white" href="contact.php"><i class="fas fa-envelope me-1"></i>Contact Us</a>
        </li>
      </ul>
    </div>
  </div>
</nav>

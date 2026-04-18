<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>DocSearch | Find Trusted Doctors</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <header>
    <nav class="navbar">
      <div class="logo">DocSearch</div>

      <ul class="nav-links">
        <li><a href="index.php" class="active">Home</a></li>
        <li><a href="doctors.php">Doctors</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="hero">
      <div class="hero-content">
        <h1>Find Trusted Doctors Near You</h1>
        <p>
          Search doctors by name, specialization, hospital, or city and
          get the right healthcare support quickly and easily.
        </p>

        <div class="hero-search">
          <input type="text" id="homeSearch" placeholder="Search doctors, specialization or city">
          <button onclick="goToDoctorsPage()">Search</button>
        </div>
      </div>
    </section>

    <section class="specializations">
      <h2>Browse by Specialization</h2>
      <p class="section-text">Choose a doctor based on your healthcare needs.</p>

      <div class="spec-grid">
        <div class="spec-card">
          <h3>Cardiologist</h3>
          <p>Heart and blood vessel specialists.</p>
        </div>

        <div class="spec-card">
          <h3>Dentist</h3>
          <p>Dental care and oral health experts.</p>
        </div>

        <div class="spec-card">
          <h3>Dermatologist</h3>
          <p>Skin, hair, and nail care specialists.</p>
        </div>

        <div class="spec-card">
          <h3>Pediatrician</h3>
          <p>Healthcare support for infants and children.</p>
        </div>
      </div>
    </section>

    <section class="why-choose-us">
      <h2>Why Choose DocSearch?</h2>
      <div class="features-grid">
        <div class="feature-card">
          <h3>Easy Search</h3>
          <p>Find doctors quickly using simple search options.</p>
        </div>

        <div class="feature-card">
          <h3>Trusted Information</h3>
          <p>View doctor details like specialization, hospital, and city.</p>
        </div>

        <div class="feature-card">
          <h3>User Friendly</h3>
          <p>Clean and simple website design for a better experience.</p>
        </div>
      </div>
    </section>
  </main>

  <footer class="footer">
    <p>© 2026 DocSearch. All Rights Reserved.</p>
  </footer>

  <script src="script.js"></script>
</body>
</html>
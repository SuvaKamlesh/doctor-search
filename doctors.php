<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Doctors | DocSearch</title>
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@400;500;600;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>
<body onload="loadDoctors()">

  <header>
    <nav class="navbar">
      <div class="logo">DocSearch</div>
      <ul class="nav-links">
        <li><a href="index.php">Home</a></li>
        <li><a href="doctors.php" class="active">Doctors</a></li>
        <li><a href="about.php">About</a></li>
        <li><a href="contact.php">Contact</a></li>
      </ul>
    </nav>
  </header>

  <main>
    <section class="search-section">
      <h2>Search Doctors</h2>
      <p class="section-text">Find doctors by name, specialization, or city.</p>

      <div class="hero-search">
        <input type="text" id="searchInput" placeholder="Enter name, specialization or city">
        <button onclick="searchDoctors()">Search</button>
      </div>
    </section>

    <section>
      <div id="doctorList" class="doctor-list"></div>
    </section>
  </main>

  <footer class="footer">
    <p>© 2026 DocSearch. All Rights Reserved.</p>
  </footer>

  <script src="js/script.js"></script>
</body>
</html>
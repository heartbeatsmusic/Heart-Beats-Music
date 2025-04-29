<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Heart Beats Music</title>
  <link href="https://fonts.googleapis.com/css2?family=Open+Sans:wght@400;700&display=swap" rel="stylesheet">
  <style>
    body {
      margin: 0;
      font-family: 'Open Sans', sans-serif;
      background-color: #111;
      color: white;
    }
    header {
      display: flex;
      align-items: center;
      justify-content: space-between;
      padding: 1rem 2rem;
      background-color: #1a1a1a;
    }
    .logo {
      display: flex;
      align-items: center;
      gap: 10px;
    }
    .logo img {
      height: 50px;
    }
    nav a {
      color: #fee42f;
      margin-left: 20px;
      text-decoration: none;
      font-weight: bold;
    }
    .hero {
      text-align: center;
      padding: 3rem 2rem;
    }
    .hero h1 {
      font-size: 3rem;
      color: #fee42f;
    }
    .track-list {
      display: flex;
      flex-wrap: wrap;
      gap: 2rem;
      justify-content: center;
      padding: 2rem;
    }
    .track {
      background-color: #222;
      padding: 1rem;
      border-radius: 10px;
      width: 250px;
      text-align: center;
    }
    .track img {
      width: 100%;
      border-radius: 10px;
    }
    .track h3 {
      margin: 0.5rem 0;
    }
    .btn-download {
      background-color: #fee42f;
      color: black;
      padding: 0.5rem 1rem;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      font-weight: bold;
    }
    .auth-form {
      background-color: #222;
      padding: 2rem;
      margin: 2rem auto;
      width: 300px;
      border-radius: 10px;
    }
    .auth-form input {
      width: 100%;
      padding: 0.5rem;
      margin-bottom: 1rem;
      border: none;
      border-radius: 5px;
    }
    .auth-form button {
      width: 100%;
      padding: 0.5rem;
      background-color: #fee42f;
      color: black;
      border: none;
      border-radius: 5px;
      font-weight: bold;
      cursor: pointer;
    }
    footer {
      text-align: center;
      padding: 2rem;
      background-color: #1a1a1a;
      color: #888;
    }
  </style>
</head>
<body>
  <header>
    <div class="logo">
      <img src="heart-headphones-logo.png" alt="Heart Beats Logo">
      <h2>Heart Beats Music</h2>
    </div>
    <nav>
      <a href="#beats">Beats</a>
      <?php if(isset($_SESSION['user_id'])): ?>
        <a href="logout.php">Logout (<?php echo $_SESSION['username']; ?>)</a>
      <?php else: ?>
        <a href="login.php">Login</a>
        <a href="signup.php">Signup</a>
      <?php endif; ?>
    </nav>
  </header>

  <section class="hero">
    <h1>HIGH QUALITY FREE BEATS</h1>
    <p>Download beats instantly, no payment needed</p>
  </section>

  <section id="beats" class="track-list">
    <div class="track">
      <img src="https://via.placeholder.com/250" alt="Track Cover">
      <h3>Chill Vibes</h3>
      <p>BPM: 90 | Key: A♯m</p>
      <a class="btn-download" href="#">Download</a>
    </div>
    <div class="track">
      <img src="https://via.placeholder.com/250" alt="Track Cover">
      <h3>Summer Reggaeton</h3>
      <p>BPM: 95 | Key: Gm</p>
      <a class="btn-download" href="#">Download</a>
    </div>
  </section>

  <footer>
    <p>Heart Beats Music - Free Instrumentals for Creators</p>
    <p>Contact: heartbeats@example.com</p>
  </footer>
</body>
</html>

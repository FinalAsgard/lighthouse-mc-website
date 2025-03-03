<!DOCTYPE html> 
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lighthouse MC</title>
  <style>
    /* General Reset */
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    /* Body Styles */
    body {
      font-family: 'Arial', sans-serif;
      background-image: url('https://cdn.pixabay.com/photo/2014/11/13/15/24/minecraft-529462_1280.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: #fff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      height: 100vh;
      overflow: hidden;
    }

    /* Header Styles */
    header {
      width: 100%;
      padding: 20px;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      display: flex;
      justify-content: space-between;
      align-items: center;
      color: white;
    }

    .logo {
      width: 150px;
      height: auto;
    }

    .nav-buttons {
      display: flex;
      gap: 15px;
    }

    .nav-buttons a {
      background-color: rgba(0, 61, 45, 0.7);
      color: white;
      padding: 12px 20px;
      font-size: 16px;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease, transform 0.3s ease;
    }

    .nav-buttons a:hover {
      background-color: #4CAF50;
      transform: translateY(-3px);
    }

    .nav-buttons a:active {
      background-color: #3e8e41;
      transform: translateY(2px);
    }

    /* Main Container */
    .main-container {
      background: rgba(0, 61, 45, 0.7);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
      margin-top: 100px;
      text-align: center;
      max-width: 900px;
      width: 100%;
    }

    .main-container h1 {
      font-size: 3.2em;
      font-family: 'Minecraft', sans-serif;
      color: #1c6e8c;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
      margin-bottom: 20px;
    }

    .main-container p {
      font-size: 1.4em;
      line-height: 1.6;
      margin-bottom: 20px;
      max-width: 700px;
    }

    /* Discord Button */
    .discord-button {
      background-color: #7289da;
      color: white;
      padding: 20px 40px;
      font-size: 18px;
      border-radius: 8px;
      cursor: pointer;
      transition: transform 0.2s ease, background-color 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
      text-decoration: none;
      margin-top: 15px;
    }

    .discord-button:hover {
      transform: translateY(-5px);
      background-color: #5b6eae;
    }

    .discord-button:active {
      transform: translateY(2px);
      background-color: #4e5a8d;
    }

    /* Footer Styles */
    .footer {
      position: absolute;
      bottom: 20px;
      text-align: center;
      color: white;
      font-size: 1.1em;
      width: 100%;
    }
  </style>
</head>

<body>

  <!-- Top Header with Logo and Navigation Buttons -->
  <header>
    <img src="https://via.placeholder.com/150x50?text=LighthouseMC+Logo" alt="LighthouseMC Logo" class="logo">
    <div class="nav-buttons">
      <a href="#">Home</a>
      <a href="#">Mission Statement</a>
      <a href="{{ route('rules') }}">Rules</a>
    </div>
  </header>

  <!-- Main Content -->
  <div class="main-container">
    <h1>Welcome to LighthouseMC!</h1>
    <p>Join our Minecraft server built on faith and community.</p>
  </div>

  <!-- Discord Join Button -->
  <a href="https://discord.com/invite/fMjWYN2eVh" class="discord-button" target="_blank">Join Our Discord</a>

  <!-- Footer -->
  <footer class="footer">
    <p>&#169; 2025 LighthouseMC | Building Faith, One Block at a Time</p>
  </footer>

</body>

</html>

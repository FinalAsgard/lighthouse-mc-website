<<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lighthouse MC</title>
  <style>
    * {
      box-sizing: border-box;
    }

    body {
      margin: 0;
      font-family: 'Arial', Helvetica, sans-serif;
      background-color: #f0f0f0;
      color: #333;
    }

    /* Fun and colorful background for the body */
    body {
      background-color: #d9f7e6;
      color: #2b2b2b;
      padding: 0;
      margin: 0;
    }

    /* Style the side navigation */
    .sidenav {
      height: 100%;
      width: 250px;
      position: fixed;
      z-index: 1;
      top: 0;
      left: 0;
      background-color: #111;
      overflow-x: hidden;
      padding-top: 20px;
    }

    /* Side navigation links */
    .sidenav a {
      color: white;
      padding: 16px;
      text-decoration: none;
      display: block;
      font-size: 18px;
    }

    /* Hover effects for side links */
    .sidenav a:hover {
      background-color: #4CAF50;
      color: white;
    }

    /* Main content styling */
    .content {
      margin-left: 250px;
      padding: 20px;
      font-size: 20px;
    }

    /* Fun, bold title */
    .content h1 {
      font-size: 3em;
      color:rgba(145, 146, 143, 0.5);
      text-align: center;
      font-family: 'Minecraft', sans-serif;
    }

    /* Fun paragraph style */
    .content p {
      font-size: 1.5em;
      line-height: 1.6;
      margin: 20px;
    }

    /* Button Style */
    .button {
      background-color: #4CAF50;
      border: none;
      color: white;
      padding: 15px 32px;
      text-align: center;
      font-size: 20px;
      cursor: pointer;
      display: inline-block;
      margin: 20px 0;
      border-radius: 8px;
    }

    .button:hover {
      background-color: #45a049;
    }

    /* Footer Style */
    footer {
      text-align: center;
      padding: 20px;
      background-color: #111;
      color: white;
      position: fixed;
      bottom: 0;
      width: 100%;
    }
  </style>
</head>
<body>

  <!-- Side Navigation -->
  <div class="sidenav">
    <a href="#">Home</a>
    <a href="#">Minecraft Servers</a>
    <a href="#">Christian Community</a>
    <a href="{{ route('rules') }}">Rules</a>
    <a href="#">Join Us</a>
  </div>

  <!-- Main Content -->
  <div class="content">
    <h1>Welcome to the LighthouseMC!</h1>
    <p>Are you ready to explore a world built on faith, fun, and creativity? Here at Lighthouse, we build, craft, and grow together in the love of Christ! Whether you’re a seasoned Minecraft pro or just starting your blocky adventure, you’re invited to be part of a vibrant and supportive community.</p>
    <p>Join us as we create epic structures, go on quests, and experience the joy of playing Minecraft in a way that honors God. Get ready for adventures, friendships, and lots of fun in our Christian Minecraft world!</p>

    <!-- Button to join the community -->
    <a href="#" class="button">Join the Adventure Now!</a>
  </div>

  <!-- Footer -->
  <footer>
    <p>&#169; 2025 LighthousMC | Building Faith, One Block at a Time</p>
  </footer>

</body>
</html>

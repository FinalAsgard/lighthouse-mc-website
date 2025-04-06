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
      top: 0; bottom: 0; right: 0; left: 0; 
      position: absolute;
      overflow: hidden;
      animation: fadeIn 1s ease-out;
      position: relative;
    }

    /* Fire Twinkle Effect */
    .fire-twinkle {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      pointer-events: none;
    }

    .fire-twinkle::before,
    .fire-twinkle::after {
      content: "";
      position: absolute;
      background: rgba(255, 165, 0, 0.7); /* Fire color */
      border-radius: 50%;
      animation: fireTwinkle 1.5s infinite alternate;
    }

    .fire-twinkle::before {
      width: 10px;
      height: 10px;
      top: 50%;
      left: 30%;
      animation-delay: 0.2s;
    }

    .fire-twinkle::after {
      width: 15px;
      height: 15px;
      top: 70%;
      left: 70%;
      animation-delay: 0.5s;
    }

    @keyframes fireTwinkle {
      0% {
        opacity: 0.7;
        transform: scale(0.8);
      }
      100% {
        opacity: 1;
        transform: scale(1.2);
      }
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
      animation: slideIn 1s ease-out;
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

    /* Main Scroll Container */
    .main-scroll-box-container {
        overflow: auto;
        top: 0; bottom: 0; right: 0; left: 0; position: absolute;
    }
    .main-scroll-box {
        padding-top:100px;
        padding-bottom:50px;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
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
      opacity: 0;
      animation: fadeInUp 1.5s forwards;
    }

    .main-container h1 {
      font-size: 3.2em;
      font-family: 'Minecraft', sans-serif;
      color: #1c6e8c;
      text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);
      margin-bottom: 20px;
      animation: bounceIn 1s ease-out;
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
      animation: fadeIn 1.5s ease-out 0.5s forwards;
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
      animation: fadeInUp 1.5s ease-out 1s forwards;
    }

    /* Keyframe Animations */
    @keyframes fadeIn {
      0% {
        opacity: 0;
      }
      100% {
        opacity: 1;
      }
    }

    @keyframes fadeInUp {
      0% {
        opacity: 0;
        transform: translateY(50px);
      }
      100% {
        opacity: 1;
        transform: translateY(0);
      }
    }

    @keyframes slideIn {
      0% {
        transform: translateY(-50px);
        opacity: 0;
      }
      100% {
        transform: translateY(0);
        opacity: 1;
      }
    }

    @keyframes bounceIn {
      0% {
        transform: translateY(-20px);
        opacity: 0;
      }
      60% {
        transform: translateY(10px);
        opacity: 1;
      }
      100% {
        transform: translateY(0);
      }
    }
  </style>
</head>

<body>

  <!-- Fire Twinkle Effect -->
  <div class="fire-twinkle"></div>

  <!-- Top Header with Logo and Navigation Buttons -->
  <header>
    <img src="https://via.placeholder.com/150x50?text=LighthouseMC+Logo" alt="LighthouseMC Logo" class="logo">
    <div class="nav-buttons">
      <a href="#">Home</a>
      <a href="#">Mission Statement</a>
      <a href="{{ route('rules') }}">Rules</a>
    </div>
  </header>

  <div class="main-scroll-box-container">
            <section class="main-scroll-box">
                <div class="main-container">
                    <h1>Welcome to LighthouseMC!</h1>
                    <p>We invite you to join our Minecraft server, built on faith and community. Please fill out the request form below to grant your child access to our vibrant world!</p>
                </div>
                <div class="form-container">
                    <h2>Server Access Request Form</h2>
                    <form id="request-form" action="submit-form.php" method="POST">
                        <label for="parent-name">Parent's Name</label>
                        <input type="text" id="parent-name" name="parent_name" required>
                        <label for="child-name">Child's Name</label>
                        <input type="text" id="child-name" name="child_name" required>
                        <label for="child-age">Child's Age</label>
                        <input type="number" id="child-age" name="child_age" required>
                        <label for="additional-info">Additional Information</label>
                        <textarea id="additional-info" name="additional_info" rows="4" placeholder="Any special requests or details" required></textarea>
                        <button type="submit">Submit Request</button>
                    </form>
                </div>
                <!-- Discord Button --><a href="https://discord.com/invite/fMjWYN2eVh" class="discord-button" target="_blank">Join Our Discord</a>
            </section>
        </div>

  <!-- Footer -->
  <footer class="footer">
    <p>&#169; 2025 LighthouseMC | Building Faith, One Block at a Time</p>
  </footer>

</body>

</html>

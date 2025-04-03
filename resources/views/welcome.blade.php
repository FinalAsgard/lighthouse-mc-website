<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Lighthouse MC</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Arial', sans-serif;
      background-image: url('https://cdn.pixabay.com/photo/2014/11/13/15/24/minecraft-529462_1280.jpg');
      background-size: cover;
      background-position: center;
      background-attachment: fixed;
      color: #fff;
      height: 100vh;
      overflow: hidden;
    }

    /* Top Header */
    header {
      width: 100%;
      padding: 20px;
      background: transparent;
      color: white;
      position: absolute;
      top: 0;
      left: 0;
      right: 0;
      z-index: 10;
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    /* Navigation Buttons Table */
    .nav-buttons-table {
      display: flex;
      justify-content: flex-start;
      margin-top: 20px;
      padding-left: 20px;
    }

    .nav-buttons-table a {
      background-color: rgba(0, 61, 45, 0.7);
      color: white;
      padding: 12px 20px;
      font-size: 16px;
      text-decoration: none;
      border-radius: 8px;
      transition: background-color 0.3s ease, transform 0.3s ease;
      margin-right: 10px;
    }

    .nav-buttons-table a:hover {
      background-color: #4CAF50;
      transform: translateY(-3px);
    }

    .nav-buttons-table a:active {
      background-color: #3e8e41;
      transform: translateY(2px);
    }

    /* Main Scroll Container */
    .main-scroll-box {
        padding-top: 300pt;
        padding-bottom: 50pt;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        overflow: auto;
        height: 100%;

    .main-container {
      display: flex;
      flex-direction: column;
      align-items: center;
      justify-content: center;
      text-align: center;
      background: rgba(0, 61, 45, 0.7);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
      margin-top: 100px;
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

    .form-container {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background: rgba(0, 61, 45, 0.8);
      padding: 30px;
      border-radius: 12px;
      box-shadow: 0 4px 30px rgba(0, 0, 0, 0.5);
      margin-top: 20px;
      max-width: 700px;
      width: 100%;
    }

    .form-container input,
    .form-container textarea {
      background: rgba(255, 255, 255, 0.8);
      border: 1px solid #ddd;
      border-radius: 8px;
      padding: 10px;
      margin: 10px 0;
      font-size: 16px;
      width: 100%;
    }

    .form-container button {
      background-color: #4CAF50;
      color: white;
      padding: 12px 24px;
      font-size: 18px;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: transform 0.2s ease, background-color 0.3s ease;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.3);
    }

    .form-container button:hover {
      transform: translateY(-5px);
      background-color: #45a049;
    }

    .form-container button:active {
      transform: translateY(2px);
      background-color: #3e8e41;
    }

    /* Discord Button */
    .discord-button {
      background-color: #7289da;
      color: white;
      padding: 20px 40px;
      font-size: 18px;
      border: none;
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

  <!-- Top Header with Logo and Buttons -->
  <header>
    <img src="https://via.placeholder.com/150x50?text=LighthouseMC+Logo" alt="LighthouseMC Logo" class="logo">
    <div class="nav-buttons-table">
      <a href="#">Home</a>
      <a href="#">Mission Statement</a>
      <a href="#">Rules</a>
    </div>
  </header>

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

    <!-- Discord Button -->
    <a href="https://discord.com/invite/fMjWYN2eVh" class="discord-button" target="_blank">Join Our Discord</a>
  </section>

  <footer class="footer">
    <p>&#169; 2025 LighthouseMC | Building Faith, One Block at a Time</p>
  </footer>

</body>
</html>

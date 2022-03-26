<!DOCTYPE html>
<html lang="en-ca">
  <head>
    <!-- Metadata -->
    <meta charset="utf-8">
    <meta name="description" content="My first webpage with user input">
    <meta name="keywords" content="immaculata, ics2o">
    <meta name="author" content="Ms Raffin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Code for the favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="./favicon/apple-touch-icon.png">
    <link rel="icon" type="image/png" sizes="32x32" href="./favicon/favicon-32x32.png">
    <link rel="icon" type="image/png" sizes="16x16" href="./favicon/favicon-16x16.png">
    <link rel="manifest" href="./favicon/site.webmanifest">
    <!-- Link to CSS file -->
    <link rel="stylesheet" href="./css/style.css">
    <!-- Title -->
    <title>User Input with PHP</title>
  </head>
  <body>
    <?php echo "<h1>PHP and JS for User Input</h1>" ?>
    <div id="yellow">
      <?php echo "<h3>Welcome!</h3>" ?>
      <?php echo "<p>This website takes your input and calls it using variables! Please type your information below:</p>" ?>
    </div>
    <form action="./welcome.php" method="post" target="result">
      <label for="name">First Name</label>
      <input type="text" id="first-name" placeholder="Your Name" name="name"><br><br>
      <label for="colour">Favourite Colour</label>
      <input type="text" id="colour-entered" placeholder="Your Favourite Colour" name="colour"><br><br>
      <label for="shade">Pick Your Favourite Shade</label>
      <input type="color" id="shade-picked" placeholder="Colour" name="shade"><br><br>
      <input type="submit" value="Enter">
    </form>
    <center>
      <iframe id="result" name="result">
      </iframe>
    </center>
  </body>
</html>
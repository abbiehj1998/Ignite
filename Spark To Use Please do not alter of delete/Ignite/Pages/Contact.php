<html>
  <head>

    <?php
    $servername = "localhost";
    $username = "root";
    $password = "password1";

    // Create connection
    $conn = new mysqli($servername, $username, $password);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Ignite Contacts</title>


<!-- Link to style sheet -->
    <link rel="stylesheet" type="text/css" href="/Style/style.css"/>
    <!-- Link Jquery -->
        <script type="text/javascript" src="/Dependencys/jquery-2.1.1.min.js"></script>
    <!-- Link to materialize -->
        <script src="/Dependencys/materialize.min.js"></script>

<!-- Navigation Bar code -->

  </head>

  <body>
    <nav class="nav-extended green">
    <div class="nav-wrapper">
      <a href="/Pages/index.php" class="brand-logo">  Ignite</a>
    </div>
    <div class="nav-content">
      <ul class="tabs four">
        <li class="tab"><a href="/Pages/index.php" target="_self"> Home </a></li>
        <li class="tab"><a href="/Pages/Tools_Techniques.php" target="_self">Tools and Techniques</a></li>
        <li class="tab"><a href="/Pages/Assessment.php" target="_self">Self Assessment</a></li>
        <li class="tab"><a href="/Pages/Contact.php" target="_self">Contact Spark</a></li>
      </ul>
    </div>

<!-- Toast Notification -->

    <script>

    function showToast2(message, duration) {
        Materialize.toast(message, duration, 'rounded');
    }

    </script>

<!-- Ask Delta Card -->

    <div class="row">
            <div class="col s8 m8">
              <div class="valign-wrapper">
                <div class="center-align">
              <div class="card large">
                <div class="card-image">
                  <img src="/Images/generic8.png">
                  <span class="card-title">Ask Delta</span>
                </div>
                <div class="card-content">
                  <p>Click the link below to ask Delta for assistance. They will get back to you
                   as soon as possible.</p>
                </div>
                <div class="card-action">
                  <a class = "btn" href="mailto:Delta@domain.com?cc=other@domain.com"onclick = "showToast2('You contacted Delta', 3000)">Email Delta</a>
                </div>
              </div>
            </div>
            </div>
          </div>

<!-- Ask Spark Card -->

    <div class="row">
            <div class="col s8 m8">
              <div class="valign-wrapper">
                <div class="center-align">
              <div class="card large">
                <div class="card-image">
                  <img src="/Images/generic8.png">
                  <span class="card-title">Ask Spark</span>
                </div>
                <div class="card-content">
                  <p>Click the link below to ask Spark for assistance. They will get back to you
                   as soon as possible.</p>
                </div>
                <div class="card-action">
                  <a class = "btn" href="mailto:Delta@domain.com?cc=other@domain.com"onclick = "showToast2('You contacted Spark', 3000)">Email Spark</a>
                </div>
              </div>
            </div>
            </div>
          </div>

    </body>
  </html>

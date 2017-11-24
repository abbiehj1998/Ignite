<!DOCTYPE html>
<html>


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

  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Ignite Home</title>

<!-- Link to style sheet -->
    <link rel="stylesheet" type="text/css" href="/Style/style.css"/>
<!-- Link Jquery -->
    <script type="text/javascript" src="/Dependencys/jquery-2.1.1.min.js"></script>
<!-- Link to materialize -->
    <script src="/Dependencys/materialize.min.js"></script>


  </head>

<!--Start of page content-->
<!--Purple navigation bar-->

  <body>

    <nav class="nav-extended purple" >
    <div class="nav-wrapper">
      <a href="/Pages/index.php" class="brand-logo">  Ignite</a>
    </div>
    <div class="nav-content">
      <ul class="tabs">
        <li class="tab"><a href="/Pages/index.php" target="_self"> Home </a></li>
        <li class="tab"><a href="/Pages/Tools_Techniques.php" target="_self">Tools and Techniques</a></li>
        <li class="tab"><a href="/Pages/Assessment.php" target="_self">Self Assessment</a></li>
        <li class="tab"><a href="/Pages/Contact.php" target="_self">Contact Spark</a></li>
      </ul>
    </div>


<!--About Ignite card-->

    <div class="col-s12-m7">
    <div class="card horizontal small">
      <div class="card-image">
        <img src="/Images/logo1.png">
      </div>
      <div class="card-stacked">
        <div class="card-content">
          <h5>About Ignite</h5>
          <p>Ignite is a change management tool that works along side the Spark team. It is here to share and coach the change management.</p>
        </div>
      </div>
    </div>
  </div>




<!--Self assesment card-->
<div class="col-s12-m7">
<div class="card horizontal small">
  <div class="card-stacked">
    <div class="card-content">
      <h5>Change Assessment</h5>
      <p>Click the button to take your change assesment today!</p>
    </div>
    <!--Assessment button -->

    <!-- Modal Trigger -->
      <a class="waves-effect waves-light btn modal-trigger" href="#modal1">Take Assessment</a>

      <!-- Modal Structure -->
      <div id="modal1" class="modal modal-fixed-footer">
        <div class="modal-content">
          <h4>Change assessment</h4>
          <p>Answer a few simple questions and recieve advice with the next steps to take with your change.</p>
          <p>Take the test now!</p>
        </div>
        <div class="modal-footer">
          <a href="/Pages/Assessment.php" class="modal-action modal-close waves-effect waves-green btn-flat ">OK</a>
        </div>
      </div>
  </div>
</div>
</div>



<script>
  $(document).ready(function(){
    $('.modal').modal();
  });
</script>

<script>
$('.modal').modal({
      dismissible: true, // Modal can be dismissed by clicking outside of the modal
      opacity: .5, // Opacity of modal background
      inDuration: 300, // Transition in duration
      outDuration: 200, // Transition out duration
      startingTop: '4%', // Starting top style attribute
      endingTop: '10%', // Ending top style attribute
      ready: function(modal, trigger) { // Callback for Modal open. Modal and trigger parameters available.
        alert("Ready");
        console.log(modal, trigger);
      },
      complete: function() { alert('Closed'); } // Callback for Modal close
    }
  );
</script>

<!--Slider-->

<div class="slider">
    <ul class="slides">
      <li>
        <img src="/Images/generic1.png">
        <div class="caption center-align">
          <h3>IGNITE</h3>
          <h5 class="light grey-text text-lighten-3">Assisting you, to manage your change</h5>
        </div>
      </li>
      <li>
        <img src="/Images/generic2.png">
        <div class="caption left-align">
          <h3>Spark</h3>
          <h5 class="light grey-text text-lighten-3">Igniting smarter working</h5>
        </div>
      </li>
      <li>
        <img src="/Images/generic3.png">
        <div class="caption right-align">
          <h3>Delta</h3>
          <h5 class="light grey-text text-lighten-3">Insert delta caption</h5>
        </div>
      </li>
    </ul>
  </div>


  <!--Slider Script-->

  <script>
      $(document).ready(function () {
          $('.slider').slider({full_width: true});
      });
  </script>

      </div>
    </div>
    </div>
  </nav>
</body>
</html>

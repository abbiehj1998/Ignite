
<html>
  <head>


    <?php
    $servername = "localhost";
    $username = "root";
    $password = "password1";
    $dbname = "Ignite";

    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);

    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }


    ?>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
    <title>Ignite Tools</title>


<!-- Link to style sheet -->
    <link rel="stylesheet" type="text/css" href="/Style/style.css"/>
<!-- Link Jquery -->
    <script type="text/javascript" src="/Dependencys/jquery-2.1.1.min.js"></script>
<!-- Link to materialize -->
    <script src="/Dependencys/materialize.min.js"></script>
<!-- Link to Icons -->
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">

  </head>

<!--Start of page content-->
<!--Orange navigation bar-->

<body>
      <nav class="nav-extended grey">
    <div class="nav-wrapper">
      <a href="/Pages/index.php" class="brand-logo">  Ignite</a>
    </div>
    <div class="nav-content">
      <ul class="tabs five">
        <li class="tab"><a href="/Pages/index.php" target="_self"> Home </a></li>
        <li class="tab"><a href="/Pages/Tools_Techniques.php" target="_self">Tools and Techniques</a></li>
        <li class="tab"><a href="/Pages/Assessment.php" target="_self">Self Assessment</a></li>
        <li class="tab"><a href="/Pages/Contact.php" target="_self">Contact Spark</a></li>
    </div>

<!-- Getting data from database and displaying in cards on admin page -->

<?php

$admin_query = "SELECT * FROM Tools WHERE Approved = '0';"; // Select only tools awaiting approval
$admin_result = $conn->query($admin_query);

if(! $admin_result ) {                                      // Error message
      die('Could not get data: ' . mysql_error());
   }

   while ($row = $admin_result->fetch_assoc()){             // HTML card code within PHP

      echo('

      <div class="row">
        <div class="col s12 m6">
          <div class="card grey">
            <div class="card-content white-text">
              <span class="card-title">'.$row['Tool_Name'].'</span>
              <p>'.$row['Description'].'</p>
            </div>
            <div class="card-action black">
              <a href="#" >Approve</a>
              <a href="#" >Remove</a>
            </div>
          </div>
        </div>
        </div>


        <script>

        document.getElementById("approve").onclick = function (){
        $.post("approve.php", {Tool_ID:'.$row['Tool_ID'].'})
        }

        document.getElementById("remove").onclick = function (){
        $.post("remove.php", {Tool_ID:'.$row['Tool_ID'].'})
        }
        </script>



      ');
   }

   echo "Fetched data successfully\n";

   mysqli_close($conn);

?>



</body>
</html>

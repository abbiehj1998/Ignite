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
    <title>Ignite Assessment</title>


<!-- Link to style sheet -->
    <link rel="stylesheet" type="text/css" href="/Style/style.css"/>
<!-- Link Jquery -->
    <script type="text/javascript" src="/Dependencys/jquery-2.1.1.min.js"></script>
<!-- Link to materialize -->
    <script src="/Dependencys/materialize.min.js"></script>

  </head>

<!--Start of page content-->
<!--Blue navigation bar-->

  <body>
    <nav class="nav-extended blue">
    <div class="nav-wrapper">
      <a href="/Pages/index.php" class="brand-logo">  Ignite</a>
    </div>
    <div class="nav-content">
      <ul class="tabs three">
        <li class="tab"><a href="/Pages/index.php" target="_self"> Home </a></li>
        <li class="tab"><a href="/Pages/Tools_Techniques.php" target="_self">Tools and Techniques</a></li>
        <li class="tab"><a href="/Pages/Assessment.php" target="_self">Self Assessment</a></li>
        <li class="tab"><a href="/Pages/Contact.php" target="_self">Contact Spark</a></li>
      </ul>
    </div>

<!--Card question 1 -->
<div class="row">
        <div class="col s8 m8">
          <div class="card medium">
            <div class="card-content">
              <span class="card-title">Size of the Change</span>
                <div id="firstcard"
              <p>How big is the chanage you are managing? Small would be a team or group
              of few individuals. Medium could be a department of area and large would be a business wide
              chanage. </p>
            </div>
            <div class="card-action">
              <a button id="smallTextChange" class="waves-effect waves-light purple btn">Small</a>
              <a button id="mediumTextChange"class="waves-effect waves-light purple btn">Medium</a>
              <a button id="largeTextChange"class="waves-effect waves-light purple btn">Large</a>
              <a button id="redo"class="waves-effect waves-light blue btn">Redo</a>
            </div>
          </div>
        </div>
      </div>

<!--change content of card depending on answer1 -->
<script>
document.getElementById('smallTextChange').onclick = function (){
  document.getElementById('firstcard').innerHTML = "Dealing with small change: Check out 'insert tool here'";
}
</script>
<!--change content of card depending on answer2 -->
<script>
document.getElementById('mediumTextChange').onclick = function (){
  document.getElementById('firstcard').innerHTML = "Dealing with medium change: Check out 'insert tool here'";
}
</script>
<!--change content of card depending on answer3 -->
<script>
document.getElementById('largeTextChange').onclick = function (){
  document.getElementById('firstcard').innerHTML = "Dealing with large change: Check out 'insert tool here'";
}
</script>
<!--redo question-->
<script>
document.getElementById('redo').onclick = function (){
  document.getElementById('firstcard').innerHTML = " How big is the chanage you are managing? Small would be a team or group of few individuals. Medium could be a department of area and large would be a business wide chanage.";
}
</script>

<!--Card question 2 -->
<div class="row">
        <div class="col s8 m8">
          <div class="card medium">
            <div class="card-content">
              <span class="card-title">Question 2</span>
                <div id="secondcard"
              <p>Insert a question here </p>
            </div>
            <div class="card-action">
              <a button id="q2Answer1" class="waves-effect waves-light purple btn">Answer1</a>
              <a button id="q2Answer2"class="waves-effect waves-light purple btn">Answer2</a>
              <a button id="q2Answer3"class="waves-effect waves-light purple btn">Answer3</a>
              <a button id="q2redo"class="waves-effect waves-light blue btn">Redo</a>
            </div>
          </div>
        </div>
      </div>

<!--change content of card depending on answer1 -->
<script>
document.getElementById('q2Answer1').onclick = function (){
  document.getElementById('secondcard').innerHTML = "Insert solution with links here";
}
</script>
<!--change content of card depending on answer2 -->
<script>
document.getElementById('q2Answer2').onclick = function (){
  document.getElementById('secondcard').innerHTML = "Insert solution with links here";
}
</script>
<!--change content of card depending on answer3 -->
<script>
document.getElementById('q2Answer3').onclick = function (){
  document.getElementById('secondcard').innerHTML = "Insert solution with links here";
}
</script>
<!--redo question-->
<script>
document.getElementById('q2redo').onclick = function (){
  document.getElementById('secondcard').innerHTML = " Insert a question here";
}
</script>

<!--Card question 3 -->
<div class="row">
        <div class="col s8 m8">
          <div class="card medium">
            <div class="card-content">
              <span class="card-title">Question 3</span>
                <div id="thirdcard"
              <p>Insert a question here </p>
            </div>
            <div class="card-action">
              <a button id="q3Answer1" class="waves-effect waves-light purple btn">Answer1</a>
              <a button id="q3Answer2"class="waves-effect waves-light purple btn">Answer2</a>
              <a button id="q3Answer3"class="waves-effect waves-light purple btn">Answer3</a>
              <a button id="q3redo"class="waves-effect waves-light blue btn">Redo</a>
            </div>
          </div>
        </div>
      </div>

<!--change content of card depending on answer1 -->
<script>
document.getElementById('q3Answer1').onclick = function (){
  document.getElementById('thirdcard').innerHTML = "Insert solution with links here";
}
</script>
<!--change content of card depending on answer2 -->
<script>
document.getElementById('q3Answer2').onclick = function (){
  document.getElementById('thirdcard').innerHTML = "Insert solution with links here";
}
</script>
<!--change content of card depending on answer3 -->
<script>
document.getElementById('q3Answer3').onclick = function (){
  document.getElementById('thirdcard').innerHTML = "Insert solution with links here";
}
</script>
<!--redo question-->
<script>
document.getElementById('q3redo').onclick = function (){
  document.getElementById('thirdcard').innerHTML = " Insert a question here";
}
</script>

<!--Card question 4 -->
<div class="row">
        <div class="col s8 m8">
          <div class="card medium">
            <div class="card-content">
              <span class="card-title">Question 4</span>
                <div id="fourthcard"
              <p>Insert a question here </p>
            </div>
            <div class="card-action">
              <a button id="q4Answer1" class="waves-effect waves-light purple btn">Answer1</a>
              <a button id="q4Answer2"class="waves-effect waves-light purple btn">Answer2</a>
              <a button id="q4Answer3"class="waves-effect waves-light purple btn">Answer3</a>
              <a button id="q4redo"class="waves-effect waves-light blue btn">Redo</a>
            </div>
          </div>
        </div>
      </div>

<!--change content of card depending on answer1 -->
<script>
document.getElementById('q4Answer1').onclick = function (){
  document.getElementById('fourthcard').innerHTML = "Insert solution with links here";
}
</script>
<!--change content of card depending on answer2 -->
<script>
document.getElementById('q4Answer2').onclick = function (){
  document.getElementById('fourthcard').innerHTML = "Insert solution with links here";
}
</script>
<!--change content of card depending on answer3 -->
<script>
document.getElementById('q4Answer3').onclick = function (){
  document.getElementById('fourthcard').innerHTML = "Insert solution with links here";
}
</script>
<!--redo question-->
<script>
document.getElementById('q4redo').onclick = function (){
  document.getElementById('fourthcard').innerHTML = " Insert a question here";
}
</script>

</html>

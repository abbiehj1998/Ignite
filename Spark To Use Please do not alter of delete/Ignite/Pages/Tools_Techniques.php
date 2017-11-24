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
      <nav class="nav-extended pink">
    <div class="nav-wrapper">
      <a href="/Pages/index.php" class="brand-logo">  Ignite</a>
    </div>
    <div class="nav-content">
      <ul class="tabs two">
        <li class="tab"><a href="/Pages/index.php" target="_self"> Home </a></li>
        <li class="tab"><a href="/Pages/Tools_Techniques.php" target="_self">Tools and Techniques</a></li>
        <li class="tab"><a href="/Pages/Assessment.php" target="_self">Self Assessment</a></li>
        <li class="tab"><a href="/Pages/Contact.php" target="_self">Contact Spark</a></li>


    </div>


<!-- PHP select categorys -->
<?php



$category_query = "SELECT DISTINCT Category FROM Tools;";     //Selects unique categorys and displays them

$category_result = $conn->query($category_query);

while ($category_row = $category_result->fetch_assoc()){

echo('

<!--section Card-->
<div class="row">
        <div class="col s8 m8">
          <a href = "#" id="toggle_'.$category_row['Category'].'">
          <div id = \'a\' class="card medium orange darken-3">
            <div class="card-content white-text">
                <h1>'.$category_row['Category'].'</h1>
            </div>
          </div>
        </a>
        </div>
      </div>

      ');
      $query1 = "SELECT * FROM Tools WHERE Approved = '1' OR Approved = 'NULL';";                    //Selects the tools and adds them to correct category secton
//add in where approved = 1
      $result = $conn->query($query1);

      while ($row = $result->fetch_assoc()){
        if($category_row['Category'] == $row['Category']){


        echo('

      <div class="row '.$row['Category'].'">

              <div class="col s8 m8">
                <div class="card medium">
                  <div class="card-content">
                    <span class="card-title">'.$row['Tool_Name'].'</span>
                      <div id="Tool'.$row['Tool_ID'].'"
                    <p>'.$row['Description'].'</p>

                  </div>
                  <div class="card-action">
                    <a class="waves-effect waves-light pink btn">Share</a>
                    <a button id="resources'.$row['Tool_ID'].'" class="waves-effect waves-light pink btn">Resources</a>
                    <a button id="back'.$row['Tool_ID'].'" class="waves-effect waves-light pink btn">Back</a>
                    <a class="waves-effect waves-light black btn modal-trigger href="#!" id="delete'.$row['Tool_ID'].'"">Remove</a>
                  </div>
                </div>
              </div>
            </div>
            </div>


            <div id="modal3" class="modal">
              <div class="modal-content">
                <h4>Are You Sure?</h4>
                <p>Are you sure you want to remove this Tool/Technique?</p>
              </div>
              <div class="modal-footer">
                <a href="#!" id="confirm_delete" class="modal-action modal-close waves-effect waves-orange btn-flat">Yes</a>
              </div>
            </div>


            <script>
            document.getElementById("resources'.$row['Tool_ID'].'").onclick = function (){
              document.getElementById("Tool'.$row['Tool_ID'].'").innerHTML = "Insert resources here";
            }



            document.getElementById("back'.$row['Tool_ID'].'").onclick = function (){
              document.getElementById("Tool'.$row['Tool_ID'].'").innerHTML = "'.$row['Description'].'";
            }


            document.getElementById("delete'.$row['Tool_ID'].'").onclick = function (){
              $("#modal3").modal("open")
              document.getElementById("confirm_delete").onclick = function (){
              $.post("delete.php", {Tool_ID:'.$row['Tool_ID'].'})

            }}



            $(".'.$category_row['Category'].'").hide()

            document.getElementById("toggle_'.$category_row['Category'].'").onclick = function(){
              console.log("here")
              $(".'.$category_row['Category'].'").slideToggle()
            }

            </script>



      ');
    }}}
      ?>

<div class="fixed-action-btn">
    <a class="btn-floating btn-large blue darken-2">
      <i class="large material-icons">mode_edit</i>
    </a>
    <ul>
      <li><a class="btn-floating blue  modal-trigger" href="#modal5"><i class="material-icons">verified_user</i></a></li>
      <li><a class="btn-floating blue  modal-trigger" href="#modal2"><i class="material-icons">add</i></a></li>
    <!--  <li><a class="btn-floating blue modal-trigger" href="#modal4"><i class="material-icons">create_new_folder</i></a></li> -->
    </ul>
  </div>



</nav>

  <!-- Add Tool Modal Structure -->
  <div id="modal2" class="modal">
    <div class="modal-content">
      <h4>Add a New Tool</h4>
      <form method="POST" action="/Pages/submit.php">
        <div class ="input-field">
          <input placeholder="tool name" name="tool_name" type="text">
          <label for = "tool_name"> Enter a Name for Your Tool Here: </label>
        </div>
        <div class ="input-field">
          <textarea class="materialize-textarea" name="description" maxlength="1000"></textarea>
          <label for = "description"> Enter a Description for Your Tool Here: </label>
        </div>
        <div class ="input-field">
          <select name="Category">
            <option value="" disabled selected> Choose a Category </option>
          <?

          $category_query = "SELECT DISTINCT Category FROM Tools;";

          $category_result = $conn->query($category_query);

          while ($category_row = $category_result->fetch_assoc()){
          echo ('<option value="'.$category_row['Category'].'"> '.$category_row['Category'].' </option>');
        }
          ?>
           </select>
          <label for = "Category"> Choose a Category for your Tool:</label>
        </div>
        <button class="waves-effect waves-orange btn-flat" type="submit"> Submit </button>
        <a href="#!" class="modal-action modal-close waves-effect waves-orange btn-flat">Close</a>
      </form>
    </div>
  </div>

  <!-- Add Category Modal Structure
  <div id="modal4" class="modal">
    <div class="modal-content">
      <h4>Add a New Category</h4>
      <form method="POST" action="/Pages/submit2.php">
        <div class ="input-field">
          <input placeholder="Category name" name="Category" type="text">
          <label for = "Category"> Enter a Category name: </label>
          <a href="#!" class="modal-action modal-close waves-effect waves-orange btn-flat">Close</a>
          <button class="waves-effect waves-orange btn-flat" type="submit"> Submit </button>
        </div>
    </div>
      </form>
    </div> -->

  <!-- Add Category Modal Structure -->
  <div id="modal5" class="modal">
    <div class="modal-content">
      <h4>Admin Login</h4>
      <form name="login">
        Username<input type="text" name="userid"/>
        Password<input type="password" name="pswrd"/>
        <button class="waves-effect waves-orange btn-flat" type="submit" onclick="check(this.form)">Login</butt>
        <a href="#!" class="modal-action modal-close waves-effect waves-orange btn-flat">Close</a>
        </form>
        <script language="javascript">
        function check(form)/*function to check userid & password*/
        {
        /*the following code checkes whether the entered userid and password are matching*/
        if(form.userid.value == "admin" && form.pswrd.value == "admin")
        {
        window.open('/Pages/Admin.php')/*opens the target page while Id & password matches*/
        }
        else
        {
        alert("Error Password or Username")/*displays error message*/
        }
        }
        </script>
      </div>
    </div>




<script>

$(document).ready(function(){
    $('.modal').modal();
    $('select').material_select();
  });

</script>


}



</body>
</html>

<!DOCTYPE html>
<html>
  
<body>
    <!-- Heading -->
    <h3> HTML input form </h3>
  
    <!-- HTML form  -->
    <form method="POST">
        <h4>Please enter your First Name : </h4>
        <input type="text" name="f_name"><br>
        <h4>Please enter your Last Name : </h4>
        <input type="text" name="l_name"><br><br>
  
        <input type="login" value="Display" name="login">
    </form>
</body>
  
</html>
<?php
      
    // When the submit button is clicked
    if (isset($_POST['login'])) {
      
        // Creating variables and 
        // storing values in it
        $f_name = $_POST['f_name'];
        $l_name = $_POST['l_name'];
  
        echo "<h1><i> HAVE A NICE DAY, $f_name $l_name </i></h1>";
    }
?>

<?php
require ('connect-mysql.php');
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  $errors = array();
      // Check for date
       if (empty($_POST['date']) ) {
        $errors[] = 'لقد نسيت كتابة التاريخ';
        }
         else {


        $date = mysqli_real_escape_string($dbcon, trim($_POST['date']));
        }     
      
        $empname = trim($_POST['cars']);
        $catname = trim($_POST['ddlCountry']);
        $dirname = trim($_POST['ddlAge']);

      // Check for salary
      if (empty($_POST['salary'])) {
      $errors[] = 'لقد نسيت كتابة المبلغ';
      } else {
      $salary = mysqli_real_escape_string($dbcon, trim($_POST['salary']));
      }
      
      
      
      // Check for data
    //   if (empty($_POST['data']) ) {
    //   $errors[] = 'لقد نسيت كتابة البيان';
    //   }
    //   else {
      $data = mysqli_real_escape_string($dbcon, trim($_POST['data']));
    //   }
      // Check for an notes
      // if (empty($_POST['notes'])) {
      // $errors[] = 'You forgot to enter your notes.';
      // } else {
      $notes = mysqli_real_escape_string($dbcon, trim($_POST['notes']));
      // }
      if ($_POST['submit'] == 'send') {
      if (empty($errors)) { // If it runs
      // Register the user in the database...
      // Make the query:

      $q = "INSERT INTO add_payment (id,date,car_num,cat_name,dir_name,salary,data,notes)
       VALUES ('','$date','$empname','$catname','$dirname','$salary','$data','$notes')";

        
      $result = @mysqli_query ($dbcon, $q); 

      if (mysqli_affected_rows($dbcon) == 1) {
        echo '<h3>لقد تم تسجيل البيان</h3>';
        echo("<script>location.href ='form.php';</script>");
       // header( "refresh:1;url=index.php" ); 
       }
      else 
      { // If it did not run
      // Message:
      echo '<h2>System Error</h2>
      <p class="error">You could not be registered due to a system error. We apologize 
      for any inconvenience.</p>';
      // Debugging message:
      echo '<p>' . mysqli_error($dbcon) . '<br><br>Query: ' . $q . '</p>';
      } // End of if ($result)

// Close the database connection.
// Include the footer and quit the script:
    }
    else   { // Display the errors.
      echo '<p class="error" > لقد حدث خطأ ما<br />';
      
      foreach ($errors as $msg) { // Extract the errors from the array and echo them
      echo " - $msg<br>\n";
      }
      echo '</p><p>برجاء مراجعه استكمال البيانات مرة اخرى</p>';
      header( "refresh:2;url=form.php" );
      } 
      mysqli_close($dbcon); 
exit();
} }

?>
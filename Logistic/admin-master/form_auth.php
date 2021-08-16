<?php
DEFINE ('DB_USER','root');
DEFINE ('DB_PSWD','');
DEFINE ('DB_HOST','localhost');
DEFINE ('DB_NAME','stock');


$dbcon=mysqli_connect(DB_HOST,DB_USER,DB_PSWD,DB_NAME);
if(!$dbcon){
	die('error connecting to database');
}

echo '';
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
  
      // Check for date
       if (empty($_POST['date']) ) {
        $errors[] = 'You forgot to enter the date';
        }
         else {


        $date = mysqli_real_escape_string($dbcon, trim($_POST['date']));
        }     
      
        $empname = trim($_POST['cars']);
        $catname = trim($_POST['ddlCountry']);
        $dirname = trim($_POST['ddlAge']);

      // Check for salary
      if (empty($_POST['salary'])) {
      $errors[] = 'You forgot to enter salary.';
      } else {
      $salary = mysqli_real_escape_string($dbcon, trim($_POST['salary']));
      }
      
      
      
      // Check for data
      if (empty($_POST['data']) ) {
      $errors[] = 'You forgot to enter your age.';
      }
       else {
      $data = mysqli_real_escape_string($dbcon, trim($_POST['data']));
      }
      // Check for an notes
      // if (empty($_POST['notes'])) {
      // $errors[] = 'You forgot to enter your notes.';
      // } else {
      $notes = mysqli_real_escape_string($dbcon, trim($_POST['notes']));
      // }
     
      if (empty($errors)) { // If it runs
      // Register the user in the database...
      // Make the query:

      $q = "INSERT INTO add_payment (id,date,car_num,cat_name,dir_name,salary,data,notes)
       VALUES ('','$date','$empname','$catname','$dirname','$salary','$data','$notes')";

        
      $result = @mysqli_query ($dbcon, $q); 

      // Run the query
      if ($result) 
      { // If it runs
      header ("location: form.php");
      exit();
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

mysqli_close($dbcon); // Close the database connection.
// Include the footer and quit the script:
    }
exit();
} 

?>
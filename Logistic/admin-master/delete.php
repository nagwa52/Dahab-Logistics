<?php
session_start();

?>
<!doctype html>
<html lang=en>
<head>
<title>Delete </title>
<meta charset=utf-8>
<link href="css/theme.css" rel="stylesheet" media="all">

</head>
<body>
<div id="container-newstyle">
<div class="container-fluid">
<div id="content"><!--Start of content for delete page-->

<?php
// Check for a valid user ID, through GET or POST
if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { //Details from view_users.php
$id = $_GET['id'];
} elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission #1
$id = $_POST['id'];
} else { // If no valid ID, stop the script
echo '<p class="error">This page has been accessed in error.</p>';

exit();
}
require ('connect-mysql.php');
// Has the form been submitted? #2
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
if ($_POST['sure'] == 'Yes') { // Delete the record
// Make the query
$q = "DELETE FROM add_payment WHERE id=$id LIMIT 1";
 
$result = @mysqli_query ($dbcon , $q);
if (mysqli_affected_rows($dbcon ) == 1) { // If there was no problem
  
// Display a message
echo '<h3>لقم تم المسح بالفعل</h3>';
header( "refresh:1;url=index.php" );
} else { // If the query failed to run
echo '<p class="error">The record could not be deleted.<br>Probably 
because it does not exist or due to a system error.</p>'; // Display error message
echo '<p>' . mysqli_error($dbcon ) . '<br />Query: ' . $q . '</p>';
// Debugging message
}
} else { // Confirmation that the record was not deleted
echo '<h3>لم يتم المسح</h3>';
}
} else { // Display the form
// Retrieve the member's data #3
$q = "SELECT data FROM add_payment WHERE id=$id";
$result = @mysqli_query ($dbcon , $q);
if ($result) 
{ // If it runs
    echo "<h3>هل انت متأكد من المسح؟</h3>";
    // Display the delete page
    echo '<form action="delete.php" method="post"> 
    <input  class="btn-new" type="submit" name="sure" value="Yes">
    <input  class="btn-new" type="submit" name="sure" value="No">
    <input type="hidden" name="id" value="' . $id . '">
    </form>';
exit();
} 

 else { // Not a valid member’s ID
echo '<p class="error">This page has been accessed in error.</p>';
echo '<p>&nbsp;</p>';
}
} // End of the main conditional section
mysqli_close($dbcon );

?>
</div>
</div>
</body>
</html>
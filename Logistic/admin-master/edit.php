<?php include ('../assets/includes/header_log.php'); ?>
<!-- END HEADER MOBILE-->


<!-- PAGE CONTAINER-->
<div class="page-container">
    <!-- MAIN CONTENT-->
    <div class="main-content">
        <div class="section__content section__content--p30">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-4">
                    </div>
                    <div class="col-lg-8">
                        <div class="card">
                            <!-- <div class="card-header">
                                        اضافة بند جديد
                                    </div> -->
                            <div class="card-body card-block">
                                <script>
                                $(document).ready(function() {
                                    $("#ddlCountry").change(function() {
                                        switch ($(this).val()) {
                                            case 'قطع_غيار':
                                                $("#ddlAge").html(
                                                    "<option value='عام'>عام</option><option value='فلاتر و زيوت'>فلاتر و زيوت</option><option value='سيور'>سيور</option><option value='تيل'>تيل</option><option value='كاوتش'>كاوتش</option>"
                                                    );
                                                break;
                                            case 'مصنعيات':
                                                $("#ddlAge").html(
                                                    "<option value='ميكانيكا'>ميكانيكا</option><option value='كهرباء'>كهرباء</option><option value='حدادة و عفشة'>حدادة و عفشة</option><option value='سمكرة'>سمكرة</option><option value='دوكو'>دوكو</option><option value='سروجى'>سروجى</option><option value='اصلاح كاوتش'>اصلاح كاوتش</option>"
                                                    );
                                                break;
                                            case 'سولار':
                                                $("#ddlAge").html(
                                                    "<option value='سولار'>سولار</option><option value='اضافات'>اضافات</option>"
                                                    );
                                                break;
                                            case 'حوافز نقدية':
                                                $("#ddlAge").html(  "<option value='حافز سائق'>حافز سائق</option><option value='حافز تباع'>حافز تباع</option><option value='عام_نثريات'>عام_نثريات</option><option value='اكراميات'>اكراميات</option><option value='كارتات'>كارتات</option><option value='تصريح اسبوعي'>تصريح اسبوعي</option><option value=' مصروف'> مصروف</option><option value='مصروف تعتيق'>مصروف تعتيق </option><option value='مصروف مكتب'>مصروف مكتب</option><option value='ايصالات جيش'> ايصالات جيش</option>"

                                                    );
                                                break;
                                            default:
                                                $("#ddlAge").html(
                                                    "<option value='all'>اختر توجيه الصرف</option>");

                                        }
                                    });
                                });
                                </script>
                                <?php
		// After clicking the Edit link in the found_record.php page, the editing interface appears
		// The code looks for a valid user ID, either through GET or POST #1
		if ( (isset($_GET['id'])) && (is_numeric($_GET['id'])) ) { // From view_users.php
		$id = $_GET['id'];
		} 
		elseif ( (isset($_POST['id'])) && (is_numeric($_POST['id'])) ) { // Form submission
		$id = $_POST['id'];
		} 
		else { // If no valid ID, stop the script
		echo '<p class="error">This page has been accessed in error</p>';
        header( "refresh:1;url=index.php" );
		exit();
		}

require ('connect-mysql.php');
// Has the form been submitted?
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
		$errors = array();
 // Check for date
 if (empty($_POST['date']) ) {
    $errors[] = 'من فضلك ادخل التاريخ';
    }
     else {
    $date = mysqli_real_escape_string($dbcon, trim($_POST['date']));
    }     
  
    $empname = trim($_POST['cars']);
    $catname = trim($_POST['ddlCountry']);
    $dirname = trim($_POST['ddlAge']);

  // Check for salary
  if (empty($_POST['salary'])) {
  $errors[] = 'من فضلك ادخل المبلغ';
  } else {
  $salary = mysqli_real_escape_string($dbcon, trim($_POST['salary']));
  }
  
  
  
  // Check for data
//   if (empty($_POST['data']) ) {
//   $errors[] = 'من فضلك ادخل البيان';
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
        if ($_POST['submit'] == 'edit') {
            if (empty($errors)) 
            { 
            // If everything is OK, make the update query 
            // Check that the email is not already in the users table
            $q = "UPDATE add_payment SET date='$date', car_num='$empname' , cat_name='$catname',dir_name='$dirname',
             salary='$salary', data='$data', notes='$notes' WHERE id=$id LIMIT 1";
            $result = @mysqli_query ($dbcon, $q);
            if (mysqli_affected_rows($dbcon) == 1) {
             echo '<h3>The user has been edited.</h3>';
             echo("<script>location.href ='index.php';</script>");
            // header( "refresh:1;url=index.php" ); 
            } else { // Echo a message if the query failed
            echo '<p class="error">The user could not be edited due to a system error. 
            We apologize for any inconvenience.</p>'; // Error message.
            echo '<p>' . mysqli_error($dbcon) . '<br />Query: ' . $q . '</p>'; // Debugging message.
            } // End of if ($result)
            // mysqli_close($dbcon); // Close the database connection.
            // Include the footer and quit the script:
            
            // exit();
            } else   { // Display the errors.
            echo '<p class="error">The following error(s) occurred:<br />';
            
            foreach ($errors as $msg) { // Extract the errors from the array and echo them
            echo " - $msg<br>\n";
            }
            echo '</p><p>Please try again.</p>';
            } 

        }

    }        

$q = "SELECT id, date,car_num,cat_name,dir_name,salary,data,notes FROM add_payment WHERE id=$id";
$result = @mysqli_query ($dbcon, $q);
if (mysqli_num_rows($result) == 1) 
{   // Valid user ID, display the form.
	// Get the user's information
	$row = mysqli_fetch_array ($result, MYSQLI_NUM);
	// Create the form

	echo '<form action="edit.php" method="post">
    <p><label for="input-normal" class=" form-control-label">التاريخ</label>
    <input type="date" name="date"class="form-control"
    value="' . $row[1] . '"/></p>


	<p><label for="input-normal" class=" form-control-label">اختر رقم السياره</label>
    <select id="cars" name="cars" class="form-control-sm form-control" value="' . $row[2] . '">
    <option value="DH01">DH01</option>
    <option value="DH02">DH02</option>
    <option value="DH03">DH03</option>
    <option value="DH04">DH04</option>
    <option value="DH05">DH05</option>
    <option value="DH06">DH06</option>
    <option value="DH07">DH07</option>
    <option value="DT01">DT01</option>
    <option value="DT02">DT02</option>
    <option value="DT03">DT03</option>
    <option value="DT04">DT04</option>
    <option value="DT05">DT05</option>
    <option value="DT06">DT06</option>
    <option value="DT07">DT07</option>
          </select></p>
          <p><label for="input-normal" class=" form-control-label">بند الصرف</label>
          <select id="ddlCountry" name="ddlCountry" class="form-control-sm form-control" 
        value="' . $row[3] . '" onchange="countryChange(this);">
          <option value="all">اختر بند الصرف</option>
          <option value="قطع_غيار">قطع_غيار</option>
          <option value="مصنعيات">مصنعيات</option>
          <option value="سولار">سولار</option>
          <option value="حوافز نقدية">حوافز نقدية</option>
         </select></p>
	<p> <label for="dirname" class=" form-control-label">توجيه الصرف</label>
    <select id="ddlAge" name="ddlAge"class="form-control-sm form-control" value="' . $row[4] . '">
       <option value="all">اختر توجيه الصرف </option>
    </select></p>


	<p> <label for="input-normal" class=" form-control-label">المبلغ</label>
    <input type="text" name="salary"  class="form-control" 
     value="' . $row[5] . '"/></p>
	<p> <label for="input-normal" class="form-control-label">البيان</label>
    <input type="text" name="data"  class="form-control" 
    value="' . $row[6] . '"/></p>

	<p><label for="input-normal" class="form-control-label">ملاحظات</label>
    <input type="text" name="notes"  class="form-control" 
    value="' . $row[7] . '"/></p>
    <div>
       <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block new-bttn"
        name="submit" value="edit">
         <span id="payment-button-amount">تعديل</span>
       </button>
    </div>
    
       <input type="hidden" name="id" value="' . $id . '"/> 
      
	</form>';
    

} 
else { // The record could not be validated
	  echo '<p class="error">This page has been accessed in error</p>';
	 }
mysqli_close($dbcon);


?>



                                <!-- for direction -->

                            </div>
                        </div>
                    </div>


                </div>

                <?php include ('../assets/includes/footer_log.php'); ?>
<?php include ('includes/header.php'); ?>
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
                                            var countryLists = new Array(4) 
                                            countryLists["empty"] = ["Select a Country"]; 
                                            countryLists["قطع غيار"] = ["عام", "فلاتر وزيوت", "سيور","تيل","كاوتش"]; 
                                            countryLists["مصنعيات"] = ["ميكانيكا", "كهرباء", "حدادة وعفشه", "اصلاح كاوتش","سمكره","دوكو","سروجى"]; 
                                            countryLists["سولار"] = ["سولار", "اضافات"]; 
                                            countryLists["حوافز نقدية"]= ["حافز سائق", "حافز تباع", "عام(نثريات)","اكراميات","كارتات"]; 
                                            function countryChange(selectObj) { 
                                            var idx = selectObj.selectedIndex; 
                                            var which = selectObj.options[idx].value; 
                                            cList = countryLists[which]; 
                                            var cSelect = document.getElementById("direction"); 
                                            var len=cSelect.options.length; 
                                            while (cSelect.options.length > 0) { 
                                            cSelect.remove(0); 
                                            } 
                                            var newOption; 
                                           for (var i=0; i<cList.length; i++) { 
                                            newOption = document.createElement("option"); 
                                            newOption.value = cList[i];  
                                            newOption.text=cList[i]; 
                                            try { 
                                            cSelect.add(newOption);  
                                            } 
                                            catch (e) { 
                                            cSelect.appendChild(newOption); 
                                            } 
                                            } 
                                            } 
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
    $catname = trim($_POST['categories']);
    $dirname = trim($_POST['direction']);

  // Check for salary
  if (empty($_POST['salary'])) {
  $errors[] = 'من فضلك ادخل المبلغ';
  } else {
  $salary = mysqli_real_escape_string($dbcon, trim($_POST['salary']));
  }
  
  
  
  // Check for data
  if (empty($_POST['data']) ) {
  $errors[] = 'من فضلك ادخل البيان';
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

	echo '<form action="modal.php" method="post">
    <p><label for="input-normal" class=" form-control-label">التاريخ</label>
    <input type="date" name="date"class="form-control"
    value="' . $row[1] . '"/></p>


	<p><label for="input-normal" class=" form-control-label">اختر رقم السياره</label>
    <select name="cars" id="cars" class="form-control-sm form-control" value="' . $row[2] . '">
    <option value="DH01">DH01</option>
    <option value="DH02">DH02</option>
    <option value="DH03">DH03</option>
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
          <select id="categories" name="categories" class="form-control-sm form-control" 
        value="' . $row[3] . '" onchange="countryChange(this);">
          <option value="empty">اختر بند الصرف</option>
          <option value="قطع غيار">قطع غيار</option>
          <option value="مصنعيات">مصنعيات</option>
          <option value="سولار">سولار</option>
          <option value="حوافز نقدية">حوافز نقدية</option>
         </select></p>
	<p> <label for="dirname" class=" form-control-label">توجيه الصرف</label>
    <select id="direction" name="direction" class="form-control-sm form-control" value="' . $row[4] . '">
       <option value="0">اختر توجيه الصرف </option>
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
                        
                        <section class="p-t-60 p-b-20">
                            <div class="container">
                              <div class="row">
                                <div class="col-md-12">
                                  <div class="copyright">
                                    <p>Copyright © 2021 . All rights reserved by <a href="http://dahab-informatics.com/">Dahab Informatics</a>.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                 </section>
                    </div>
                </div>
            </div>
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="vendor/jquery-3.2.1.min.js"></script>
    <!-- Bootstrap JS-->
    <script src="vendor/bootstrap-4.1/popper.min.js"></script>
    <script src="vendor/bootstrap-4.1/bootstrap.min.js"></script>
    <!-- Vendor JS       -->
    <script src="vendor/slick/slick.min.js">
    </script>
    <script src="vendor/wow/wow.min.js"></script>
    <script src="vendor/animsition/animsition.min.js"></script>
    <script src="vendor/bootstrap-progressbar/bootstrap-progressbar.min.js">
    </script>
    <script src="vendor/counter-up/jquery.waypoints.min.js"></script>
    <script src="vendor/counter-up/jquery.counterup.min.js">
    </script>
    <script src="vendor/circle-progress/circle-progress.min.js"></script>
    <script src="vendor/perfect-scrollbar/perfect-scrollbar.js"></script>
    <script src="vendor/chartjs/Chart.bundle.min.js"></script>
    <script src="vendor/select2/select2.min.js">
    </script>

    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>

<!-- end document-->

<?php
	session_start();
    if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == false){
        header("location:login.php");
        die();
    }



?>

<?php include ('includes/header.php'); ?>
<!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css"> -->

        <!-- END HEADER MOBILE -->

        <!-- PAGE CONTENT-->
        <div class="page-content--bgf7">
      

            <!-- WELCOME-->
            <section class="welcome p-t-10">
                <div class="container">
                    <div class="row">
                        <!-- <div class="col-md-12">
                            <h1 class="title-4">Welcome back
                                <span>John!</span>
                            </h1>
                            <hr class="line-seprate">
                        </div> -->
                    </div>
                </div>
            </section>
            <!-- END WELCOME-->


            <!-- DATA TABLE-->
            <section class="p-t-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12">
                            
                            <div class="table-data__tool">
                                <div class="table-data__tool-left">
                               
                                </div>
                               
                                <div class="table-data__tool-right">
                                <button class="au-btn-filter" onclick="fnExcelReport();">
                                        <i class="zmdi zmdi-filter-list"></i>تقرير</button>
                                        <iframe id="txtArea1" style="display:none"></iframe>

                                        <div class="rs-select2--light rs-select2--md">
                                        <select class="js-select14" name="direction"id="direction"
                                         class="form-control-sm form-control">
                                                        <option value="0">اختر توجيه الصرف </option>
                                                          </select>
                                        <div class="dropDownSelect2"></div>
                                    </div>
                                    <div class="rs-select2--light rs-select2--sm">
                                    <select class="js-select14" name="categories"
                                    id="categories" class="form-control-sm form-control"
                                     onchange="countryChange(this);">
                                                <option value="empty">اختر بند الصرف</option>
                                                <option value="قطع غيار">قطع غيار</option>
                                                <option value="مصنعيات">مصنعيات</option>
                                                <option value="سولار">سولار</option>
                                                <option value="حوافز نقدية">حوافز نقدية</option>
                                               </select>
                                      
                                    </div>
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
                                    <div class="rs-select2--light rs-select2--sm">
                                        <select class="js-select14"id="cars" name="cars">
                                            <option selected="selected">رقم السيارة</option>
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
                                        </select>
                                      
                                    </div>
                                    
                                </div>
                                <a href="form.php"><button class="au-btn au-btn-icon au-btn--green au-btn--small">
                                        <i class="zmdi zmdi-plus"></i>ادخال جديد </button></a>
                            </div>
                            <div class="table table-borderless table-data3 dir-right">
                                <table class="table table-borderless table-data3" id="table11">
                                    <thead>
                                        <tr>
                                            <th>رقم المسلسل</th>
                                            <th>التاريخ</th>
                                            <th>رقم السيارة</th>
                                            <th>بند الصرف</th>
                                            <th>توجيه الصرف</th>
                                            <th>المبلغ</th>
                                            <th>البيان</th>
                                            <th>الملاحظات</th>
                                            <th>المزيد</th>
                                        </tr>
                                    </thead>
                                   
                                    
                                    <?php
                                    $numberid =1;
$conn = mysqli_connect("localhost", "root", "", "stock");

// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id AS id,date AS Ddate,car_num AS Dcar_num ,cat_name AS Dcat_name,dir_name AS Ddir_name,
salary AS Dsalary,data AS Ddata,notes AS Dnotes FROM add_payment";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr><td>' . $numberid++.'</td>
<td>' . $row['Ddate'] .'</td>
<td>' . $row['Dcar_num'] .'</td>
<td>' . $row['Dcat_name'] .'</td>
<td>' . $row['Ddir_name'] .'</td>
<td>' . $row['Dsalary'] . 'ج.م</td>
<td>' . $row['Ddata'] .  '</td>
<td>' .$row['Dnotes'] .'</td>
<td>
    <div class="table-data-feature dir">
      <button class="item" data-toggle="tooltip" data-placement="top" title="Delete">
       <a href="delete.php?id=' . $row['id'] . '"> <i class="zmdi zmdi-delete"></i>
      </button>
      <button class="item" data-toggle="tooltip" data-placement="top" title="Edit">
       <a href="edit.php?id=' . $row['id'] . '"><i class="zmdi zmdi-edit"></i></a>
      </button>
    </div></tr>';

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

                                </table>
                             
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- END DATA TABLE-->

            <!-- COPYRIGHT-->
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
            <!-- END COPYRIGHT-->
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
    <script src="vendor/select2/select2.min.js"></script>
    <script src="js/downloadFile.js"></script>
    <!-- Main JS-->
    <script src="js/main.js"></script>

</body>

</html>
<!-- end document-->

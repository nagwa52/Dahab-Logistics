<?php
	session_start();
    if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == false){
        header("location:login.php");
        die();
    }
?>
<?php include ('includes/header.php'); ?>

      
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
                                   <div class="card-body card-block">
                                    <form action="form_auth.php" method="post" novalidate="novalidate">
                                    <div class="row form-group">
                                    <div class="col-lg-6">
                                        </div>
                                         <div class="col-6">
                                        <div class="form-group">
                                            <label for="input-normal" class=" form-control-label">التاريخ</label>
                                            <input type="date" name="date"class="form-control"
                                            value="<?php if (isset($_POST['date'])) echo $_POST['date']; ?>"/>
                                        </div>
                                          </div>
                                             </div>
                             <div class="row form-group">
                                  <div class="col-lg-6">
                                     </div>
                                  <div class="col-6">
                                    <div class="form-group">
                                     <label for="input-normal" class=" form-control-label">اختر رقم السياره</label>
                                           <select name="cars" id="cars" class="form-control-sm form-control">
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
                                             <!-- for direction -->
                                         <div class="row form-group">
                                         <div class="col-6">
                                            <div class="form-group">
                                            <label for="dirname" class=" form-control-label">توجيه الصرف</label>
                                                    <select id="direction" name="direction"
                                                     class="form-control-sm form-control">
                                                        <option value="0">اختر توجيه الصرف </option>
                                                          </select>
                                                 </div>
                                                    </div>
                                                    <!-- for categories -->
                                        <div class="col-6">
                                                <div class="form-group">
                                                <label for="input-normal" class=" form-control-label">بند الصرف</label>
                                              <select id="categories" name="categories" 
                                              class="form-control-sm form-control"
                                               onchange="countryChange(this);">
                                                <option value="empty">اختر بند الصرف</option>
                                                <option value="قطع غيار">قطع غيار</option>
                                                <option value="مصنعيات">مصنعيات</option>
                                                <option value="سولار">سولار</option>
                                                <option value="حوافز نقدية">حوافز نقدية</option>
                                               </select>
                                                                 </div>

                                                                       </div>
                                                                              </div>
                                          <!-- for salary  -->
                                                <div class="form-group">
                                              <label for="input-normal" class=" form-control-label">المبلغ</label>
                             <input type="text" name="salary" id="exampleInputName2" required="" class="form-control"
                                                     value="<?php if (isset($_POST['salary'])) echo $_POST['salary']; ?>"/>
                                                </div>
                                            
                                        <!-- for data -->
                                        <div class="form-group">
                                            <label for="input-normal" class="form-control-label">البيان</label>
                                            <input type="text" name="data" id="exampleInputName2" required="" class="form-control" 
                                            value="<?php if (isset($_POST['data'])) echo $_POST['data']; ?>"/>
                                        </div>
                                        <!-- for notes -->
                                        <div class="form-group">
                                            <label for="input-normal" class="form-control-label">ملاحظات</label>
                                            <input type="text" name="notes" id="exampleInputName2" required=""  class="form-control" 
                                            value="<?php if (isset($_POST['notes'])) echo $_POST['notes']; ?>"/>
                                        </div>
                                    </div>
                                        <div>
                                            <button id="payment-button" type="submit" class="btn btn-lg btn-info btn-block"
                                            name="submit" value="Register">
                                         
                                                <span id="payment-button-amount">ارسال</span>
                                             
                                            </button>
                                        </div>
                                    </form>
                                    </div>
                                </div>
                            </div>
                           
                           
                        </div>
                        <!-- copy right -->
                        <?php include ('includes/footer.php'); ?>
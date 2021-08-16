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
                                                <input type="date" name="date" class="form-control"
                                                    value="<?php if (isset($_POST['date'])) echo $_POST['date']; ?>" />
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row form-group">
                                        <div class="col-lg-6">
                                        </div>
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="input-normal" class=" form-control-label">اختر رقم
                                                    السياره</label>
                                                <select id="cars" name="cars" class="form-control-sm form-control">
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
                                                </select>
                                            </div>
                                        </div>
                                    </div>
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
                                                    $("#ddlAge").html(
                                                        "<option value='حافز سائق'>حافز سائق</option><option value='حافز تباع'>حافز تباع</option><option value='عام_نثريات'>عام_نثريات</option><option value='اكراميات'>اكراميات</option><option value='كارتات'>كارتات</option>"
                                                        );
                                                    break;
                                                default:
                                                    $("#ddlAge").html(
                                                        "<option value='all'>اختر توجيه الصرف</option>"
                                                        );

                                            }
                                        });
                                    });
                                    </script>
                                    <!-- for direction -->
                                    <div class="row form-group">
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="dirname" class=" form-control-label">توجيه الصرف</label>
                                                <select id="ddlAge" name="ddlAge" class="form-control-sm form-control">
                                                    <option value="all">اختر توجيه الصرف </option>
                                                </select>
                                            </div>
                                        </div>
                                        <!-- for categories -->
                                        <div class="col-6">
                                            <div class="form-group">
                                                <label for="input-normal" class=" form-control-label">بند الصرف</label>
                                                <select id="ddlCountry" name="ddlCountry"
                                                    class="form-control-sm form-control">
                                                    <option value="all">اختر بند الصرف</option>
                                                    <option value="قطع_غيار">قطع_غيار</option>
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
                                        <input type="text" name="salary" id="exampleInputName2" required=""
                                            class="form-control"
                                            value="<?php if (isset($_POST['salary'])) echo $_POST['salary']; ?>" />
                                    </div>

                                    <!-- for data -->
                                    <div class="form-group">
                                        <label for="input-normal" class="form-control-label">البيان</label>
                                        <input type="text" name="data" id="exampleInputName2" required=""
                                            class="form-control"
                                            value="<?php if (isset($_POST['data'])) echo $_POST['data']; ?>" />
                                    </div>
                                    <!-- for notes -->
                                    <div class="form-group">
                                        <label for="input-normal" class="form-control-label">ملاحظات</label>
                                        <input type="text" name="notes" id="exampleInputName2" required=""
                                            class="form-control"
                                            value="<?php if (isset($_POST['notes'])) echo $_POST['notes']; ?>" />
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

            <?php include ('includes/footer.php'); ?>
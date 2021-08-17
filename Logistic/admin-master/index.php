<?php
	session_start();
    if(empty($_SESSION['userLogin']) || $_SESSION['userLogin'] == false){
        header("location:login.php");
        die();
    }



?>

<?php include ('../assets/includes/header_log.php'); ?>
<script type="text/javascript">
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
                    "<option value='سولار'>سولار</option><option value='اضافات'>اضافات</option>");
                break;
            case 'حوافز نقدية':
                $("#ddlAge").html(
                    "<option value='حافز سائق'>حافز سائق</option><option value='حافز تباع'>حافز تباع</option><option value='عام_نثريات'>عام_نثريات</option><option value='اكراميات'>اكراميات</option><option value='كارتات'>كارتات</option>"
                    );
                break;
            default:
                $("#ddlAge").html("<option value='all'>اختر توجيه الصرف</option>");

        }
    });
    $("#ddlCountry,#ddlAge,#car_num,#min,#max").on("change", function() {

        var country = $('#ddlCountry').find("option:selected").val();
        var age = $('#ddlAge').find("option:selected").val();
        var number = $('#car_num').find("option:selected").val();
        var min = $('#min').val();
        var max = $('#max').val();
        SearchData(country, age, number,min,max)
    });
});

function SearchData(country, age, number,min,max) {
                                           // no category no date
    if (country.toUpperCase() == 'ALL' && age.toUpperCase() == 'ALL' && number.toUpperCase() == "ALL" && min.toUpperCase() == 'YYYY-MM-DD' && max.toUpperCase() == 'YYYY-MM-DD') {
        $('#table11 tbody tr').show();
    }
    else if(country.toUpperCase() == 'ALL' && age.toUpperCase() == 'ALL' && number.toUpperCase() == "ALL" && min.toUpperCase() != 'YYYY-MM-DD' && max.toUpperCase() != 'YYYY-MM-DD'){
        $('#table11 tbody tr:has(td)').each(function() {
            var createdAt = $.trim($(this).find('td:eq(1)').text());
               if( 
                ( min == "" || max == "" )
                || 
                ( moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max) ) 
            )
            {
                    $(this).show();
                } else {
                    $(this).hide();
                }

        });
    }
    else {
        $('#table11 tbody tr:has(td)').each(function() {
            var rowCountry = $.trim($(this).find('td:eq(3)').text());
            var rowAge = $.trim($(this).find('td:eq(4)').text());
            var rowNumber = $.trim($(this).find('td:eq(2)').text());
            var createdAt = $.trim($(this).find('td:eq(1)').text());
                                   
         if (country.toUpperCase() != 'ALL' && age.toUpperCase() != 'ALL' && number.toUpperCase() != "ALL" && min.toUpperCase() != 'YYYY-MM-DD' && max.toUpperCase() != 'YYYY-MM-DD') {
                if (rowCountry.toUpperCase() == country.toUpperCase() && rowAge == age && rowNumber == number &&(( min == "" || max == "" )
                || 
                ( moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max) ))) {
                    $(this).show();
                } else {
                    $(this).hide();
                }
            } else if ($(this).find('td:eq(3)').text() != '' || $(this).find('td:eq(3)').text() != '') {
                if (country != 'all') {
                    if (rowCountry.toUpperCase() == country.toUpperCase()) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                }
                if (age != 'all') {
                    if (rowAge == age) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                }
                if (number != 'all') {
                    if (rowNumber == number) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                }
                if(min.toUpperCase() != 'YYYY-MM-DD' && max.toUpperCase() != 'YYYY-MM-DD'){
                   if( 
                ( min == "" || max == "" )
                || 
                ( moment(createdAt).isSameOrAfter(min) && moment(createdAt).isSameOrBefore(max) ) 
                )
                 {
                    $(this).show();
                } else {
                    $(this).hide();
                }
                }
           

            }   
            

        });
    }
}
</script>

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
                                <select class="js-select14" name="direction" id="ddlAge"
                                    class="form-control-sm form-control">
                                    <option value="all">اختر توجيه الصرف </option>
                                </select>
                                <div class="dropDownSelect2"></div>
                            </div>
                            <div class="rs-select2--light rs-select2--md">
                                <select class="js-select14" name="categories" id="ddlCountry"
                                    class="form-control-sm form-control">
                                    <option value="all">اختر بند الصرف</option>
                                    <option value="قطع_غيار">قطع_غيار</option>
                                    <option value="مصنعيات">مصنعيات</option>
                                    <option value="سولار">سولار</option>
                                    <option value="حوافز نقدية">حوافز نقدية</option>
                                </select>

                            </div>

                            <div class="rs-select2--light rs-select2--sm">
                                <select class="js-select14" id="car_num" name="cars">
                                    <option value="all">رقم السيارة</option>
                                    <option value="DH01">DH01</option>
                                    <option value="DH02">DH02</option>
                                    <option value="DH03">DH03</option>
                                    <option value="DH03">DH04</option>
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
                            <div class="rs-select2--light rs-select2--sm">
                            <div class="col-md-12">
                            <label class=" font_btn" > من</label>  
                                  <input type="date" name="from" id="min">
                                  <label class=" font_btn" > الى</label>
                                  <input type="date" name="to" id="max" > 
                             </div>
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
    <?php include ('../assets/includes/footer_log.php'); ?>
<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
<script type="text/javascript">
    $(document).ready(function () {
        $("#ddlCountry,#ddlAge").on("change", function () {
            var country = $('#ddlCountry').find("option:selected").val();
            var age = $('#ddlAge').find("option:selected").val();
            SearchData(country, age)
        });
    });
    function SearchData(country, age) {
        if (country.toUpperCase() == 'ALL' && age.toUpperCase() == 'ALL') {
            $('#table11 tbody tr').show();
        } else {
            $('#table11 tbody tr:has(td)').each(function () {
                var rowCountry = $.trim($(this).find('td:eq(2)').text());
                var rowAge = $.trim($(this).find('td:eq(3)').text());
                if (country.toUpperCase() != 'ALL' && age.toUpperCase() != 'ALL') {
                    if (rowCountry.toUpperCase() == country.toUpperCase() && rowAge == age) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                } else if ($(this).find('td:eq(2)').text() != '' || $(this).find('td:eq(2)').text() != '') {
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
                        }
                        else {
                            $(this).hide();
                        }
                    }
                }
 
            });
        }
    }
</script>
<select class="cl_country" id="ddlCountry">
    <option value="all">رقم السيارة  </option>
    <option value="DH01">DH01</option>
                                                <option value="DH02">DH02</option>
                                                <option value="DH03">DH03</option>
                                                <option value="DH05">DH04</option>
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
<select id="type">
    <option value="item0">اختر بند الصرف</option>
    <option value="قطع غيار">قطع غيار</option>
     <option value="مصنعيات">مصنعيات</option>
     <option value="سولار">سولار</option>
     <option value="حوافز نقدية">حوافز نقدية</option>
</select>

<select id="size">
    <option value="">اختر توجيه الصرف </option>

</select>



<table class="table table-borderless table-data3" id="table11" border="1">
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
                                            <th> المزيد</th>
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
<td>' . $row['Dsalary'] .'</td>
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
<script>
 function fnExcelReport()
{
    var tab_text="<table border='2px'><tr bgcolor='#87AFC6'>";
    var textRange; var j=0;
    tab = document.getElementById('myTable'); // id of table

    for(j = 0 ; j < tab.rows.length ; j++) 
    {     
        tab_text=tab_text+tab.rows[j].innerHTML+"</tr>";
        //tab_text=tab_text+"</tr>";
    }

    tab_text=tab_text+"</table>";
    tab_text= tab_text.replace(/<A[^>]*>|<\/A>/g, "");//remove if u want links in your table
    tab_text= tab_text.replace(/<img[^>]*>/gi,""); // remove if u want images in your table
    tab_text= tab_text.replace(/<input[^>]*>|<\/input>/gi, ""); // reomves input params

    var ua = window.navigator.userAgent;
    var msie = ua.indexOf("MSIE "); 

    if (msie > 0 || !!navigator.userAgent.match(/Trident.*rv\:11\./))      // If Internet Explorer
    {
        txtArea1.document.open("txt/html","replace");
        txtArea1.document.write(tab_text);
        txtArea1.document.close();
        txtArea1.focus(); 
        sa=txtArea1.document.execCommand("SaveAs",true,"Say Thanks to Sumit.xls");
    }  
    else                 //other browser not tested on IE 11
        sa = window.open('data:application/vnd.ms-excel,' + encodeURIComponent(tab_text));  

    return (sa);
}
</script>

<table class="table table-borderless table-data3" id="myTable">
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
                                   
                                    <button id="btnExport" onclick="fnExcelReport();"> EXPORT </button>
                                    <iframe id="txtArea1" style="display:none"></iframe>
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

                                </table>                                     <i class="zmdi zmdi-filter-list"></i>تقرير</button>

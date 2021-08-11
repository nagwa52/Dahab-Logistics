
<style>
.hidden-row {
  display: none;
}
    </style>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
   $(document).ready(function () {
    $("#categories").change(function () {
     switch($(this).val()) {
        case 'قطع غيار':
            $("#size").html("<option value='test'>item1: test 1</option><option value='test2'>item1: test 2</option>");
            break;
        case 'مصنعيات':
            $("#size").html("<option value='test'>item2: test 1</option><option value='test2'>item2: test 2</option>");
            break;
        case 'سولار':
            $("#size").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
            break;
        default:
            $("#size").html("<option value=''>اختر توجيه الصرف </option>");
     }
  });
});
//                       countryLists["empty"] = ["Select a Country"]; 
//                       countryLists["قطع غيار"] = ["عام", "فلاتر وزيوت", "سيور","تيل","كاوتش"]; 
//     countryLists["مصنعيات"] = ["ميكانيكا", "كهرباء", "حدادة وعفشه", "اصلاح كاوتش","سمكره","دوكو","سروجى"]; 
//                   countryLists["سولار"] = ["سولار", "اضافات"]; 
//    countryLists["حوافز نقدية"]= ["حافز سائق", "حافز تباع", "عام(نثريات)","اكراميات","كارتات"]; 
                                          

 
 $('#categories').change(function() {
  
   var selection = $(this).val();
    var dataset = $('filter-table').find('tr');
 
   dataset.show();
   
   dataset.filter(function(index, item) {
     return $(item).find('td:first-child').text().split(',').indexOf(selection) === -1;
   }).hide();

 });
                                        

</script>
<select class="js-select14"id="size" data-field="توجيه الصرف" name="direction">
<option value="0">اختر توجيه الصرف </option>
    
  </select>
                            <select class="js-select14" id="categories" data-field="بند الصرف" name="categories">
                                                <option value="ALL">اختر بند الصرف</option>
                                                <option value="قطع_غيار">قطع_غيار</option>
                                                <option value="مصنعيات">مصنعيات</option>
                                                <option value="سولار">سولار</option>
                                                <!-- <option value="حوافز نقدية">حوافز نقدية</option> -->
                                               </select>

<table style="width: 100%" class="filter-table"  border=1>
<tr>
                                          
                                            <th>بند الصرف</th>
                                            <th>توجيه الصرف</th>
                                           
                                        </tr>
     
                                        <?php
$conn = mysqli_connect("localhost", "root", "", "stock");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT id AS id,cat_name AS Dcat_name,dir_name AS Ddir_name FROM add_payment";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo '<tr>
<td>' . $row['Dcat_name'] .'</td>
<td>' . $row['Ddir_name'] .'</td>
</tr>';

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>

                                </table>
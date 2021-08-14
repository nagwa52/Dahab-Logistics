$(document).ready(function () {
    $("#ddlCountry").change(function () {
 switch($(this).val()) {
   case 'قطع_غيار':
        $("#ddlAge").html("<option value='عام'>عام</option><option value='فلاتر وزيوت'>فلاتر وزيوت</option><option value='سيور'>سيور</option>");
        break;
    case 'مصنعيات':
        $("#ddlAge").html("<option value='ميكانيكا'>ميكانيكا</option><option value='كهرباء'>كهرباء</option>");
        break;
    case 'سولار':
        $("#ddlAge").html("<option value='سولار'>سولار</option><option value='اضافات'>اضافات</option>");
        break;
    default:
        $("#ddlAge").html("<option value='all'>اختر توجيه الصرف</option>");
 
 }
});
    $("#ddlCountry,#ddlAge,#car_num").on("change", function () {

        var country = $('#ddlCountry').find("option:selected").val();
        var age =$('#ddlAge').find("option:selected").val();
        var number =$('#car_num').find("option:selected").val();
         SearchData(country, age,number)
    });
});
function SearchData(country, age, number) {
    if (country.toUpperCase() == 'ALL' && age.toUpperCase() == 'ALL' && number.toUpperCase() =="ALL") {
        $('#table11 tbody tr').show();
    } else {
        $('#table11 tbody tr:has(td)').each(function () {
            var rowCountry = $.trim($(this).find('td:eq(3)').text());
            var rowAge = $.trim($(this).find('td:eq(4)').text());
            var rowNumber = $.trim($(this).find('td:eq(2)').text());
        //     console.log("row age is",rowAge);
        // console.log("this  rowcountry",rowCountry);
        // console.log("thisrow number",rowNumber);
            if (country.toUpperCase() != 'ALL' && age.toUpperCase() != 'ALL' && number.toUpperCase() !="ALL" ) {
                if (rowCountry.toUpperCase() == country.toUpperCase() && rowAge == age && rowNumber == number) {
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
                    }
                    else {
                        $(this).hide();
                    }
                }
                if (number != 'all') {
                    if (rowNumber == number) {
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
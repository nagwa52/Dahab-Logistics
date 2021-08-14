<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
<select id="ddlCountry">
    <option value="item0">اختر بند الصرف</option>
    <option value="قطع_غيار">قطع_غيار</option>
     <option value="مصنعيات">مصنعيات</option>
     <option value="سولار">سولار</option>
     <option value="حوافز نقدية">حوافز نقدية</option>
</select>

<select id="ddlAge">
    <option value="">اختر توجيه الصرف </option>

</select>
<script>
$(document).ready(function () {
  $("#ddlCountry").change(function () {
     switch($(this).val()) {
       case 'قطع_غيار':
            $("#ddlAge").html("<option value='test'>عام</option><option value='test2'>فلاتر وزيوت</option><option value='test'>سيور</option>");
            break;
        case 'مصنعيات':
            $("#ddlAge").html("<option value='test'>ميكانيكا</option><option value='test2'>كهرباء</option>");
            break;
        case 'سولار':
            $("#ddlAge").html("<option value='test'>سولار</option><option value='test2'>اضافات</option>");
            break;
        default:
            $("#ddlAge").html("<option value=''>اختر توجيه الصرف</option>");
     
     }
  });
});
</script>
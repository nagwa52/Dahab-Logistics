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
                var rowCountry = $.trim($(this).find('td:eq(1)').text());
                var rowAge = $.trim($(this).find('td:eq(2)').text());
                if (country.toUpperCase() != 'ALL' && age.toUpperCase() != 'ALL') {
                    if (rowCountry.toUpperCase() == country.toUpperCase() && rowAge == age) {
                        $(this).show();
                    } else {
                        $(this).hide();
                    }
                } else if ($(this).find('td:eq(1)').text() != '' || $(this).find('td:eq(1)').text() != '') {
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
    <option value="all">Select Class </option>
    <option value="India">india</option>
    <option value="usa">usa</option>
    <option value="uk">uk</option>
</select>
<select class="cl_age" id="ddlAge">
    <option value="all">Select Class </option>
    <option value="50">50</option>
    <option value="60">60</option>
    <option value="80">80</option>
</select>
<table style="width: 100%" id="table11" border="1">
    <tr>
        <th>name</th>
        <th>country</th>
        <th>Age</th>
    </tr>
    <tr>
        <td>Jill</td>
        <td>USA</td>
        <td>50</td>
    </tr>
    <tr>
        <td>Eve</td>
        <td>UK</td>
        <td>50</td>
    </tr>
    <tr>
        <td>John</td>
        <td>INDIA</td>
        <td>80</td>
    </tr>
    <tr>
        <td>sam</td>
        <td>AUSTRALIA</td>
        <td>80</td>
    </tr>
    <tr>
        <td>joe</td>
        <td>INDIA</td>
        <td>60</td>
    </tr>
    <tr>
        <td>alan</td>
        <td>USA</td>
        <td>60</td>
    </tr>
</table>

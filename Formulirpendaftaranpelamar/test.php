<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>Display Kabupaten</title>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    // Load province data
    $.ajax({
        url: 'wilayah/provinsi.json',
        dataType: 'json',
        success: function(data) {
            // Iterate over each province and add it to the select element
            $.each(data, function(index, province) {
                $('#province').append(`<option value="${province.id}">${province.name}</option>`);
            });
            
            // Trigger change event to initially populate kabupaten based on the selected province
            $('#province').change();
        },
        error: function(xhr, status, error) {
            console.error('Failed to fetch province data:', status, error);
        }
    });

    // Load kabupaten data based on selected province
    $('#province').change(function() {
        var selectedProvinceId = $(this).val();
        
        // Clear existing kabupaten options
        $('#kabupaten').empty().append('<option value="">Select Kabupaten</option>');
        
        // Fetch kabupaten data based on selected province
        $.ajax({
            url: 'wilayah/kabupaten.json',
            dataType: 'json',
            success: function(data) {
                // Iterate over each kabupaten and display only the ones matching the selected province
                $.each(data, function(index, kabupaten) {
                    if (kabupaten.provinsi_id == selectedProvinceId) {
                        $('#kabupaten').append(`<option value="${kabupaten.id}">${kabupaten.name}</option>`);
                    }
                });
            },
            error: function(xhr, status, error) {
                console.error('Failed to fetch kabupaten data:', status, error);
            }
        });
    });
});
</script>
</head>
<body>

<h2>Select Province:</h2>
<select id="province">
    <option value="">Select Province</option>
</select>

<h2>Select Kabupaten:</h2>
<select id="kabupaten">
    <option value="">Select Kabupaten</option>
</select>

</body>
</html>

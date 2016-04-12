



    $("#serch-area").keypress(function () {
        $.ajax({
            type: "POST",
            url: "<?php echo base_url();?>register_cont/GetCountryName",
            data: {
                keyword: $("#serch-area").val()
            },
            dataType: "json",
            success: function (data) {
                if (data.length > 0) {
                    $('#DropdownCountry').empty();
                    $('#serch-area').attr("data-toggle", "dropdown");
                    $('#DropdownCountry').dropdown('toggle');
                }
                else if (data.length == 0) {
                    $('#serch-area').attr("data-toggle", "");
                }
                $.each(data, function (key,value) {
                    if (data.length >= 0)
                        $('#DropdownCountry').append('<li role="presentation" >' + value['subcat_thired_name'] + '</li>');
                });
            }
        });
    });
    $('ul.txtcountry').on('click', 'li a', function () {
        $('#serch-area').val($(this).text());
    });


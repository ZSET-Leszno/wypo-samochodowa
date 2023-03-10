$(document).ready(function () {
    $('#form-select-brand').change(function () {
        let selected = $(this).val();
        if (selected) {
            $("#form-select-type").empty();
            $.ajax({
                url: baseUrl + 'api/car/getTypes/' + selected,
                type: 'GET',
                dataType: 'json',
                success: function (response) {
                    let len = 0;
                    $('#location').empty();
                    if (response['data'] != null) {
                        len = response['data'].length;
                    }

                    if (len > 0) {
                        for (let i = 0; i < len; i++) {
                            let id = response['data'][i].id;
                            let name = response['data'][i].name;

                            let option = "<option value='" + id + "'>" + name + "</option>";

                            $("#form-select-type").append(option);
                        }
                    }
                }
            });
        } else {
            $(this).val('');
        }
    });
});
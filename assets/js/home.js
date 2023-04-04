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
                    if (response['data'] != null) {
                        len = response['data'].length;
                        $('#form-select-model').empty();
                    }
                    if (len == 1) {
                        $("#form-select-type").append("<option value='" + response['data'][0].id + "'>" + response['data'][0].name + "</option>");
                        $.ajax({
                            url: baseUrl + 'api/car/getModels/' + selected + '/' + response['data'][0].id,
                            type: 'GET',
                            dataType: 'json',
                            success: function (data) {
                                let le = 0;
                                if (data['data'] != null) {
                                    le = data['data'].length;
                                }
                                if (le > 0) {
                                    for (let i = 0; i < le; i++) {

                                        let option = "<option value='" + data['data'][i] + "'>" + data['data'][i] + "</option>";

                                        $("#form-select-model").append(option);
                                    }
                                }
                                $('#form-select-model').prop('disabled', false);
                            }
                        });
                    } else if (len > 1) {
                        for (let i = 0; i < len; i++) {
                            let id = response['data'][i].id;
                            let name = response['data'][i].name;

                            let option = "<option value='" + id + "'>" + name + "</option>";

                            $("#form-select-type").append(option);
                        }
                    }
                    $('#form-select-type').prop('disabled', false);
                }
            });
        } else {
            $(this).val('');
        }
    });
    $('#form-select-type').change(function () {
        let brand = $('#form-select-brand').val();
        let selected = $(this).val();
        $('#form-select-model').empty();
        $.ajax({
            url: baseUrl + 'api/car/getModels/' + brand + '/' + selected,
            type: 'GET',
            dataType: 'json',
            success: function (data) {
                let le = 0;
                if (data['data'] != null) {
                    le = data['data'].length;
                }
                if (le > 0) {
                    for (let i = 0; i < le; i++) {

                        let option = "<option value='" + data['data'][i] + "'>" + data['data'][i] + "</option>";

                        $("#form-select-model").append(option);
                    }
                }
                $('#form-select-model').prop('disabled', false);
            }
        });
    });
    $('#contact-form').submit(function (e) {
        e.preventDefault();
        $.ajax({
            url: $(this).attr('action'),
            type: $(this).attr('method'),
            data: $(this).serialize(),
            dataType: 'json',
            success: function (response) {
                if (response['success']) {
                    $('#contact-form').trigger("reset");
                    $('#contact-form').hide();
                    $('#contact-success').show();
                } else {
                    $('#contact-form').trigger("reset");
                    $('#contact-form').hide();
                    $('#contact-error').show();
                }
            }
        });
    });
    $('.save-url').on('click', function () {
        let dummy = document.createElement('input'),
            text = window.location.href;
        document.body.appendChild(dummy);
        dummy.value = text;
        dummy.select();
        document.execCommand('copy');
        document.body.removeChild(dummy);
        Notiflix.Notify.success('Skopiowano adres strony do schowka!');
    });
    $('.like-car').on('click', function () {
        const id = $(this).data('id');
        if (id) {
            $.ajax({
                url: baseUrl + 'api/car/like/' + id,
                type: 'POST',
                data: {
                    _token: $('meta[name="csrf-token"]').attr('content'),
                    id: id
                },
                dataType: 'json',
                success: function (response) {
                    if (response['success']) {
                        Notiflix.Notify.success(response['message']);
                    } else {
                        Notiflix.Notify.failure(response['message']);
                    }
                },
                error: function (response) {
                    Notiflix.Notify.failure('Wystąpił błąd! Odśwież stronę i spróbuj ponownie.');
                }
            });
        } else {
            Notiflix.Notify.failure('Wystąpił błąd! Odśwież stronę i spróbuj ponownie.');
        }
    });
});
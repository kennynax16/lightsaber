$(document).ready(function () {
    $('#contact-form').on('submit', function (e) {
        e.preventDefault();

        let form = $(this);
        let formData = form.serialize();

        // Очистка старых ошибок перед новой отправкой
        $('.error-message').remove();
        $('.wpcf7-form-control').removeClass('error-border');

        $.ajax({
            url: form.attr('action'),
            type: 'POST',
            data: formData,
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            success: function (response) {

                form[0].reset();
            },
            error: function (xhr) {
                let errors = xhr.responseJSON.errors;

                if (errors) {
                    $.each(errors, function (key, messages) {
                        let field = $('[name="' + key + '"]');
                        field.addClass('error-border'); // Добавляем рамку
                        field.after('<span class="error-message">' + messages[0] + '</span>'); // Показываем текст ошибки
                    });
                }
            }
        });
    });
});

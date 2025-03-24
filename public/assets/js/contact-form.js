$(document).ready(function () {
    // Перехватываем отправку формы
    $('#contact-form').on('submit', function (e) {
        e.preventDefault(); // Отменяем стандартную отправку формы

        // Собираем данные формы
        var formData = $(this).serialize();

        // Отправляем данные на сервер через AJAX
        $.ajax({
            url: $(this).attr('action'), // Получаем URL из атрибута action формы
            type: 'POST',
            data: formData,
            success: function (response) {
                // Можно очистить форму или сделать другие действия
                $('#contact-form')[0].reset();
            },
            error: function (xhr, status, error) {
                // Обработка ошибок
                alert('There was an error sending the message. Please try again.');
            }
        });
    });
});

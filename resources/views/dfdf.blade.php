@extends('main')

@section('content')
    <section class="contact-page page_titled_block">
        <div class="container">
            <div class="page_title PageScreenTitle">CONTACT</div>

            <!-- Сообщение об успехе -->
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif

            <div class="contact_info">
                <div class="contact_info_text">
                    <p>For any inquiries, please fill out the form or email us.</p>
                    <a href="mailto:eran@lightsaber.Studio">eran@lightsaber.Studio</a>
                </div>
                <div class="contact_form">
                    <div class="wpcf7 no-js" id="wpcf7-f9-o1">
                        <form id="contact-form" method="POST" action="{{ route('contact.store') }}" class="wpcf7-form init" aria-label="Contact form" novalidate="novalidate">
                            @csrf
                            <p>
                                <label>
                                    Your name<br />
                                    <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required" autocomplete="name" name="name" required />
                                </label>
                            </p>
                            <p>
                                <label>
                                    Your email<br />
                                    <input size="40" maxlength="400" class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email" autocomplete="email" name="email" required />
                                </label>
                            </p>
                            <p>
                                <label>
                                    Your message<br />
                                    <textarea cols="40" rows="10" maxlength="2000" class="wpcf7-form-control wpcf7-textarea" name="message" required></textarea>
                                </label>
                            </p>
                            <p>
                                <input class="wpcf7-form-control wpcf7-submit" type="submit" value="SEND" />
                            </p>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script>
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
                        // Если форма отправлена успешно, показываем сообщение
                        alert('Your message has been sent successfully!');
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
    </script>
@endsection

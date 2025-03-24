@extends('main')
@section('content')
    <section class="contact-page page_titled_block">
        <div class="container">
            <div class="page_title PageScreenTitle">CONTACT</div>
            @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif
            <div class="contact_info">
                <div class="contact_info_text">
                    <p>For any inquires please fill the form or email us.</p>
                    <a href="mailto:eran@lightsaber.Studio">eran@lightsaber.Studio</a>
                </div>
                <div class="contact_form">
                    <div
                        class="wpcf7 no-js"
                        id="wpcf7-f9-o1"
                    >
                        <div class="screen-reader-response">
                            <p role="status" aria-live="polite" aria-atomic="true"></p>
                            <ul></ul>
                        </div>
                        <form
                            action="{{ route('contact.store') }}"
                            id="contact-form"
                            method="post"
                            class="wpcf7-form init"
                            aria-label="Contact form"
                            novalidate="novalidate"
                            data-status="init"
                        >
                            @csrf
                            <p>
                                <label>
                                    Your name<br />
                                    <span
                                        class="wpcf7-form-control-wrap"
                                        data-name="name"
                                    ><input
                                            size="40"
                                            maxlength="400"
                                            class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                            autocomplete="name"
                                            aria-required="true"
                                            aria-invalid="false"
                                            value=""
                                            type="text"
                                            name="name"
                                        /></span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    Your email<br />
                                    <span
                                        class="wpcf7-form-control-wrap"
                                        data-name="email"
                                    ><input
                                            size="40"
                                            maxlength="400"
                                            class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                            autocomplete="email"
                                            aria-required="true"
                                            aria-invalid="false"
                                            value=""
                                            type="email"
                                            name="email"
                                        /></span>
                                </label>
                            </p>
                            <p>
                                <label>
                                    Your message<br />
                                    <span
                                        class="wpcf7-form-control-wrap"
                                        data-name="message"
                                    >
                        <textarea
                            cols="40"
                            rows="10"
                            maxlength="2000"
                            class="wpcf7-form-control wpcf7-textarea"
                            aria-invalid="false"
                            name="message"
                        ></textarea>
                      </span>
                                </label>
                            </p>
                            <p>
                                <input
                                    class="wpcf7-form-control wpcf7-submit has-spinner"
                                    type="submit"
                                    value="SEND"
                                />
                            </p>
                            <div class="wpcf7-response-output" aria-hidden="true"></div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection



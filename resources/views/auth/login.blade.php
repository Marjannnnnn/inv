@extends('layouts.app')

@section('content')
    {{-- <div class="container awas">
        <div class="row contact-content" data-aos="fade-up">

            <div class="contact-primary">

                <h3 class="h6">Login</h3>

                <form method="POST" action="{{ route('login') }}">
                    <fieldset>
                        @csrf

                        <div class="form-field">
                            <input id="email" type="email" name="email" type="text" id="contactName"
                                placeholder="Email Address" value="" minlength="2" required=""
                                aria-required="true" class="full-width @error('email') is-invalid @enderror" name="email">

                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-field">
                            <input id="password" type="password" name="password" type="text" id="contactName"
                                placeholder="Password" value="" minlength="2" required="" aria-required="true"
                                class="full-width @error('password') is-invalid @enderror" autocomplete="current-password"
                                name="email">

                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-field">
                            <button type="submit" class="full-width btn--primary">
                                {{ __('Login') }}</button>
                        </div>

                    </fieldset>
                </form>

                <!-- contact-warning -->
                <div class="message-warning">
                    Something went wrong. Please try again.
                </div>

                <!-- contact-success -->
                <div class="message-success">
                    Your message was sent, thank you!<br>
                </div>

            </div> <!-- end contact-primary -->
        </div>
    </div> --}}
    <section id="contact" class="s-contact">

        <div class="overlay"></div>
        <div class="contact__line"></div>

        <div class="row section-header" data-aos="fade-up">
            <div class="col-full">
                <h3 class="subhead">Login</h3>
                {{-- <h1 class="display-2 display-2--light">Loginn</h1> --}}
            </div>
        </div>

        <div class="row contact-content" data-aos="fade-up">

            <div class="contact-primary">

                <h3 class="h6">Login to your account</h3>

                <form method="POST" action="{{ route('login') }}" novalidate="novalidate">
                    <fieldset>
                        @csrf

                        <div class="form-field">
                            <input type="email" id="email" name="email" placeholder="Your Email Address" value=""
                                aria-required="true" class="full-width">
                            @error('email')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-field">
                            <input name="password" type="password" id="password" placeholder="Your Password" value=""
                                aria-required="true" class="full-width">
                            @error('password')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-field">
                            <button class="full-width btn--primary" type="submit"> {{ __('Login') }}</button>
                            <div class="submit-loader">
                                <div class="text-loader">Loging...</div>
                            </div>
                        </div>

                    </fieldset>
                </form>

            </div> <!-- end contact-primary -->

            <div class="contact-secondary">
                <div class="contact-info">

                    <h3 class="h6 hide-on-fullwidth">No ingfo</h3>

                    <div class="cinfo">
                        <h5>Assalamualaikum</h5>
                    </div>
                    <div class="cinfo">
                        <h5>Waalaikumsalam</h5>
                    </div>

                    {{-- <div class="cinfo">
                        <h5>Email Us At</h5>
                        <p>
                            contact@glintsite.com<br>
                            info@glintsite.com
                        </p>
                    </div>

                    <div class="cinfo">
                        <h5>Call Us At</h5>
                        <p>
                            Phone: (+63) 555 1212<br>
                            Mobile: (+63) 555 0100<br>
                            Fax: (+63) 555 0101
                        </p>
                    </div> --}}

                </div> <!-- end contact-info -->
            </div> <!-- end contact-secondary -->

        </div> <!-- end contact-content -->

    </section> <!-- end s-contact -->
@endsection

@extends('layout.main')

@section('title', 'Challenge 4')

@section('styles')
    <link rel="stylesheet" href="{{ url('build/assets/challenge_4-C9gJFKEA.css') }}">
    <script src="{{ url('build/assets/challenge_4-CRT6j3NZ.js') }}"></script>
@endsection

@section('content')
    <div id="page">
        <div class="contact">
            <div class="contact-title">Contact Us</div>
            <div class="contact-description">
                Get in touch with us! Whether you have questions, feedback, or just want to say hello, we're here for you
            </div>
        </div>

        <form action="">
            <div class="form-title">Send us a Message</div>

            <div class="form-group">
                <input type="text" class="form-input" placeholder="Name" required autocomplete="false">
            </div>

            <div class="form-group">
                <input type="email" class="form-input" placeholder="Email" required autocomplete="false">
            </div>

            <div class="form-group">
                <input type="tel" class="form-input" maxlength="14" id="phone-input" placeholder="Phone" required autocomplete="false">
            </div>

            <div class="form-group">
                <span class="form-span">Preferred contact method of communication</span>

                <div class="form-group row">
                    <div class="form-radio">
                        <input type="radio" name="communication" id="email_address" value="email" required checked>
                        <label for="email_address">Email</label>
                    </div>

                    <div class="form-radio">
                        <input type="radio" name="communication" id="phone" value="phone" required>
                        <label for="phone">Phone</label>
                    </div>
                </div>
            </div>

            <div class="form-group">
                <textarea class="form-input" placeholder="Message" required></textarea>
            </div>

            <div class="form-footer">
                <button type="submit">Submit</button>
            </div>
        </form>

        <div class="street">
            <img src="{{ url('images/challenges/4/street.svg') }}" draggable="false" alt="Street">
            <div class="street-informations">
                <div class="street-title">
                    Windler, Lockman and McClure
                </div>

                <div class="street-description">
                    3629 N Cole Rd, Boise, Illinois
                </div>
            </div>
            <div class="street-pin"></div>
        </div>
    </div>
@endsection

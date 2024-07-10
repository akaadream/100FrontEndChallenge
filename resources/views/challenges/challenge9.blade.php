@extends('layout.main')

@section('title', 'Challenge 9')

@section('styles')
    <link rel="stylesheet" href="{{ url('build/assets/challenge_9-BgLHOPnY.css') }}">
    <script src="{{ url('build/assets/challenge_9-BhGMGz4H.js') }}"></script>
@endsection

@section('content')
    <div id="page" class="centered">
        <div class="generate-password">
            <div class="generate-title">Generate password</div>

            <div class="section-title">Generated password</div>
            <div class="generated">
                <span id="generated"></span>
                <div class="generated-icons">
                    <button id="copy"><i class="fa-solid fa-copy"></i></button>
                    <button id="reload"><i class="fa-solid fa-rotate"></i></button>
                </div>
            </div>

            <div class="section-title">Character length</div>
            <div class="length">
                <div class="min-length">12</div>
                <div class="slider">
                    <input type="range" step="1" min="12" max="32" id="password-length" value="14">
                </div>
                <div class="max-length">32</div>
            </div>

            <div class="settings">
                <div class="section-title">Settings</div>

                <div class="setting">
                    <label for="uppercase" class="setting-name">Include uppercase letters</label>
                    <input id="uppercase" type="checkbox" checked>
                </div>

                <div class="setting">
                    <label for="lowercase" class="setting-name">Include lowercase letters</label>
                    <input id="lowercase" type="checkbox" checked>
                </div>

                <div class="setting">
                    <label for="numbers" class="setting-name">Include numbers</label>
                    <input id="numbers" type="checkbox" checked>
                </div>

                <div class="setting">
                    <label for="symbols" class="setting-name">Include symbols</label>
                    <input id="symbols" type="checkbox" checked>
                </div>
            </div>

            <button class="button" id="generate">Generate password</button>
        </div>
    </div>
@endsection

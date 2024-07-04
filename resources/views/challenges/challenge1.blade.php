@extends('layout.main')

@section('title', 'Challenge 1')

@section('styles')
{{--    @vite(['resources/css/challenges/challenge_1.css'])--}}
    <link rel="stylesheet" href="{{ url('build/assets/challenge_1-ChM2CrPq.css') }}">
@endsection

@section('content')
    <div class="card">
        <div class="card-header">
            <img src="{{ url('images/challenges/1/waves.svg') }}" alt="Waves" draggable="false">

            <div class="card-avatar">
                <img src="{{ url('images/profile.png') }}" alt="Profile" draggable="false">
            </div>
        </div>

        <div class="card-content">
            <div class="card-title">
                Guillaume Lortet
            </div>

            <div class="card-username">
                @guillaumelortet
            </div>

            <div class="card-networks">
                <a href="#" class="card-network">
                    <i class="fa-brands fa-facebook"></i>
                </a>

                <a href="#" class="card-network">
                    <i class="fa-brands fa-linkedin"></i>
                </a>

                <a href="#" class="card-network">
                    <i class="fa-brands fa-x-twitter"></i>
                </a>

                <a href="#" class="card-network">
                    <i class="fa-brands fa-instagram"></i>
                </a>

                <a href="#" class="card-network">
                    <i class="fa-brands fa-dribbble"></i>
                </a>
            </div>

            <div class="card-description">
                Crafting brand and communcation strategies, creating visual designs, leading art direction, and capturing portraits through photography.
            </div>

            <div class="card-buttons">
                <button class="card-button">
                    Follow
                </button>

                <button class="card-button simple">
                    Message
                </button>
            </div>
        </div>
    </div>
@endsection

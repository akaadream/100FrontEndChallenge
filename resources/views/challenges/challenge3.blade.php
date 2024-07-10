@extends('layout.main')

@section('title', 'Challenge 3')

@section('styles')
    <link rel="stylesheet" href="{{ url('build/assets/challenge_3-C-bWWo6t.css') }}">
@endsection

@section('content')
    <div id="page" class="centered">
        <div class="phone-menu">
            <div class="user-informations">
                <img src="{{ url('images/profile.png') }}" alt="Profile" class="user-avatar">
                <div class="user-details">
                    <div class="user-name">Guillaume Lortet</div>
                    <div class="user-job">Développeur Web Full-Stack</div>
                </div>
            </div>

            <div class="menu-separator"></div>

            <a href="#" class="menu-link">
                <div>
                    <i class="icon fa-solid fa-user-group"></i>
                    <span class="menu-link-text">Personnal Data</span>
                </div>

                <i class="fa-solid fa-angle-right"></i>
            </a>

            <a href="#" class="menu-link">
                <div>
                    <i class="icon fa-solid fa-envelope"></i>
                    <span class="menu-link-text">Messages</span>
                </div>

                <i class="fa-solid fa-angle-right"></i>
            </a>

            <a href="#" class="menu-link">
                <div>
                    <i class="icon fa-solid fa-bell"></i>
                    <span class="menu-link-text">Notifications</span>
                </div>

                <i class="fa-solid fa-angle-right"></i>
            </a>

            <a href="#" class="menu-link">
                <div>
                    <i class="icon fa-solid fa-location-pin"></i>
                    <span class="menu-link-text">Location</span>
                </div>

                <i class="fa-solid fa-angle-right"></i>
            </a>

            <a href="#" class="menu-link">
                <div>
                    <i class="icon fa-solid fa-users"></i>
                    <span class="menu-link-text">Community</span>
                </div>

                <i class="fa-solid fa-angle-right"></i>
            </a>

            <div class="menu-separator"></div>

            <a href="#" class="menu-link">
                <div>
                    <i class="icon fa-solid fa-user-group"></i>
                    <span class="menu-link-text">FAQs</span>
                </div>

                <i class="fa-solid fa-angle-right"></i>
            </a>

            <a href="#" class="menu-link">
                <div>
                    <i class="icon fa-solid fa-cog"></i>
                    <span class="menu-link-text">Settings</span>
                </div>

                <i class="fa-solid fa-angle-right"></i>
            </a>

            <div class="menu-footer">
                <a href="#" class="menu-footer-link">
                    <i class="menu-footer-icon fa-solid fa-house"></i>
                </a>

                <a href="#" class="menu-footer-link">
                    <i class="menu-footer-icon fa-solid fa-chart-line"></i>
                </a>

                <a href="#" class="menu-footer-link">
                    <i class="menu-footer-icon fa-solid fa-envelope"></i>
                </a>

                <a href="#" class="menu-footer-link selected">
                    <i class="menu-footer-icon fa-solid fa-user"></i>
                </a>
            </div>
        </div>
    </div>
@endsection

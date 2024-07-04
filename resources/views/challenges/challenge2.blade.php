@extends('layout.main')

@section('title', 'Challenge 2')

@section('styles')
{{--    @vite(['resources/css/challenges/challenge_2.css', 'resources/js/challenges/challenge_2.js'])--}}
    <link rel="stylesheet" href="{{ url('build/assets/challenge_2-epx_8YDg.css') }}">
    <script src="{{ url('build/assets/challenge_2-B14MInTj.js') }}"></script>
@endsection

@section('content')
    <div class="product">
        <div class="product-images">
            <img src="{{ url('images/challenges/2/shirt1.jpg') }}" alt="Product 1" class="product-image selected">
            <img src="{{ url('images/challenges/2/shirt2.jpg') }}" alt="Product 2" class="product-image">
        </div>

        <img src="{{ url('images/challenges/2/shirt1.jpg') }}" id="zoomed" alt="Product" class="product-zoomed-image">

        <div class="product-informations">
            <div class="product-brand">
                Polo
            </div>

            <div class="product-title">
                Custom Fit Polo Mockup Shirt
            </div>

            <div class="product-description">
                Yellow polo with a classic cut. Made of smooth and soft cotton.
            </div>

            <div class="product-price">
                $99.00 <span class="product-promotion">-25%</span>
            </div>

            <form action="">
                <div class="product-size">
                    <label>Choose size</label>
                    <div class="sizes">
                        <div class="size">
                            S
                        </div>

                        <div class="size">
                            M
                        </div>

                        <div class="size selected">
                            L
                        </div>

                        <div class="size">
                            XL
                        </div>

                        <div class="size">
                            XXL
                        </div>
                    </div>
                </div>

                <button class="product-button">Add to bag</button>
            </form>
        </div>
    </div>
@endsection

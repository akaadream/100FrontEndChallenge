@extends('layout.main')

@section('title', 'Challenge 5')

@section('styles')
    <link rel="stylesheet" href="{{ url('build/assets/challenge_5-BUs4ps4d.css') }}">
@endsection

@section('content')
    <div id="page">
        <div class="recipe">
            <img src="{{ url('images/challenges/5/coffee.jpg') }}" alt="Iced Coffee" class="recipe-preview">
            <div class="recipe-details">
                <div class="recipe-title">
                    <div class="stars">
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-solid fa-star star"></i>
                        <i class="fa-regular fa-star star"></i>
                        <div class="recipe-reviews">(189)</div>
                    </div>
                    Sweet iced Coffee with Coconut Milk
                </div>

                <div class="recipe-settings">
                    <div class="recipe-time">
                        <i class="fa-solid fa-stopwatch recipe-setting-icon"></i>
                        <div class="recipe-setting">
                            <div class="recipe-setting-name">Total time</div>
                            <div class="recipe-setting-value">10 minutes</div>
                        </div>
                    </div>

                    <div class="recipe-level">
                        <i class="fa-solid fa-lightbulb recipe-setting-icon"></i>
                        <div class="recipe-setting">
                            <div class="recipe-setting-name">Level</div>
                            <div class="recipe-setting-value">Beginner</div>
                        </div>
                    </div>

                    <div class="recipe-budget">
                        <i class="fa-solid fa-wallet recipe-setting-icon"></i>
                        <div class="recipe-setting">
                            <div class="recipe-setting-name">Budget</div>
                            <div class="recipe-setting-value">Under 2$</div>
                        </div>
                    </div>
                </div>

                <div class="recipe-description recipe-section">
                    Sweet Iced Coffee with coconut milk is easy to make and stores well in the fridge.<br />
                    Make a large batch and save yourself a few trips to the coffee shop
                </div>

                <div class="recipe-ingredients">
                    <div class="recipe-section-title">Ingredients</div>

                    <div class="recipe-ingredient">
                        <input type="checkbox" id="step1" readonly checked>
                        <label for="step1">3 tablespoon Espresso coffee powder</label>
                    </div>

                    <div class="recipe-ingredient">
                        <input type="checkbox" id="step2" readonly>
                        <label for="step2">1 cup off the boil water</label>
                    </div>

                    <div class="recipe-ingredient">
                        <input type="checkbox" id="step3" readonly>
                        <label for="step3">1 cup Coconut milk</label>
                    </div>

                    <div class="recipe-ingredient">
                        <input type="checkbox" id="step4" readonly>
                        <label for="step4">3 tablespoon Espresso coffee powder</label>
                    </div>

                </div>

                <div class="recipe-instructions recipe-section">
                    <div class="recipe-section-title">Instructions</div>
                    <ol>
                        <li>Boil some water and let sit for 1-2 minutes.</li>
                        <li>Put the coffee grounds into a cafetière and pour in the water.</li>
                        <li>Let the coffee steep for 5 minutes then slowly press down the plunger on your Cafetière.</li>
                        <li>Pour the coffee into a jug, allow to cool then chill for several hours.</li>
                        <li>Whisk in the coconut milk and condensed milk and serve over plenty of ice.</li>
                        <li>This coffee can be stored in the fridge for up to 5 days. Shake or stir again before serving.</li>
                    </ol>
                </div>
            </div>
        </div>
    </div>
@endsection

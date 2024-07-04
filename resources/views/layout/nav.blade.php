{{--<div class="menu-button">--}}
{{--    <div class="menu-button-line"></div>--}}
{{--</div>--}}

{{--<nav>--}}
{{--    <a href="" class="nav-link"></a>--}}
{{--</nav>--}}

@isset($id)
    @if ($id > 1)
    <a href="{{ route('challenges.index', $id - 1) }}" id="previous-challenge" class="button-link">
        Previous challenge
    </a>
    @endif

    @if ($id < 2)
        <a href="{{ route('challenges.index', $id + 1) }}" id="next-challenge" class="button-link">
            Next challenge
        </a>
    @endif
@endisset

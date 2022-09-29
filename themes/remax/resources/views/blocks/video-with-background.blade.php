@php
$big_titile = get_sub_field('big_title');
$small_titile = get_sub_field('small_title');
$video = get_sub_field('video');
@endphp

<section class="video-with-background" style="background-image: url('@asset('./images/bg-gray-texture-white-top.svg')')">
    <div class="container">

        <div class="content-wrapper">
        @if ($small_titile)
            <h2 class="h1">{{ $small_titile }}</h2>
        @endif

        @if ($big_titile)
            @php echo $big_titile; @endphp
        @endif

        @if ($video)
            <div>
                <img src="{{ $video['url'] }}" alt="">
            </div>
        @endif
    </div>
    </div>
</section>

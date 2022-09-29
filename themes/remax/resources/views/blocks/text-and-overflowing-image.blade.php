@php
$text = get_sub_field('text');
$image = get_sub_field('image');
@endphp

<section class="text-and-overflowing-image" style="background-image: url('@asset('./images/bg-intro.svg')')">
    <div class="container">
        @if ($text)
            <div class="text-container">
                <p>@php echo $text @endphp</p>
            </div>
        @endif
        @if ($image)
            <div class="img-container">
                <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
            </div>
        @endif
    </div>
</section>

@php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$image = get_sub_field('image');
@endphp

<section class="image-and-text">
    <div class="container">
        @php echo $title @endphp

        <div class="content">
            <div class="image-container">
                <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
            </div>

            <div class="text-container">
                @php echo $subtitle @endphp
                <p>{{ $text }}</p>
            </div>
        </div>
    </div>
</section>

@php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$image = get_sub_field('image');
$years_of_experience = get_sub_field('years_of_experience');
@endphp

<section class="hero-with-image" style="background-image: url('@asset('./images/hero-background.svg')')">
    <div class="container">

        <div class="content">
            <div class="text-container">
                @if ($title)
                    @php echo $title; @endphp
                @endif

                @if ($subtitle)
                    <h4>@php
                        echo $subtitle;
                    @endphp </h4>
                @endif

                @if ($text)
                    @php echo $text; @endphp
                @endif
            </div>

            <div class="image-container">
                <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">

                <div class="badge">
                    <p>NEARLY</p>
                    <p>{{ $years_of_experience }}</p>
                    <p>YEARS OF EXPERIENCE</p>
                </div>
            </div>
        </div>

    </div>
</section>

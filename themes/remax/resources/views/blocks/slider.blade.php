@php
$slides = get_sub_field('slides');
@endphp

<section class="slider">
    <div class="container">
        <div class="slider-container">
            @while (have_rows('slides'))
                @php
                    the_row();
                    $year = get_sub_field('year');
                    $image = get_sub_field('image');
                    $description = get_sub_field('description');
                @endphp

                <div class="slide">
                    <p>{{ $year }}</p>
                    <div>
                        <img src="{{ $image['url'] }}" alt="{{ $image['url'] }}">
                    </div>
                    <p>{{ $description }}</p>
                </div>
            @endwhile
        </div>
    </div>
</section>

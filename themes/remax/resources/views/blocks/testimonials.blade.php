@php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
$text = get_sub_field('text');
$testimonials_repeater = get_sub_field('testimonials_repeater');
@endphp

<section class="testimonials" style="background-image: url(@asset('./images/testimonials-background.svg'))">
    <div class="container">
        <div class="content-container">
            @if ($title)
                @php
                    echo $title;
                @endphp
            @endif

            @if ($text)
                <p class="description">{{ $text }}</p>
            @endif
        </div>

        @if ($testimonials_repeater)

            @if ($subtitle)
                @php
                    echo $subtitle;
                @endphp
            @endif

            <div class="testimonials-container">
                @while (have_rows('testimonials_repeater'))
                    <div class="testimonial">
                        @php
                            the_row();
                            $text = get_sub_field('text');
                            $author = get_sub_field('author');
                            $location = get_sub_field('location');
                        @endphp

                        <div>
                            <p>{{ $text }}</p>

                            <div class="info-box">
                                <div class="img-box" style="background-image: url('@asset('./images/quotes-white.svg')')"></div>
                                <div>
                                    <p class="author">{{ $author }}</p>
                                    <p>{{ $location }}</p>
                                </div>
                            </div>
                        </div>
                    </div>
                @endwhile
            </div>
        @endif
    </div>
</section>

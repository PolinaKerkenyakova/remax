@php
$title = get_sub_field('title');
$image = get_sub_field('image');
$image_position = get_sub_field('image_position');
$bullet_points_repeater = get_sub_field('bullet_points_repeater');
@endphp


<section class="image-leftright-with-bullet-points">
    <div class="container">
        <div class="content">
            <div @if ($image_position === 'Right') style="order: 2" @endif>
                <img src="{{ $image['url'] }}" alt="{{ $image['alt'] }}">
            </div>

            <div>
                @if ($title)
                    @php
                        echo $title;
                    @endphp
                @endif

                @while (have_rows('bullet_points_repeater'))
                    <div class="box">
                        @php
                            the_row();
                            $title = get_sub_field('title');
                            $text = get_sub_field('text');
                        @endphp


                        <div class="bullet-box">
                            <img src="@asset('./images/check-blue.svg')" alt="Blue check">
                        </div>

                        <div class="title-container">
                            @if ($text)
                                @if ($title)
                                    @php
                                        echo $title;
                                    @endphp
                                @endif

                                <p>{{ $text }}</p>
                            @endif
                        </div>

                    </div>
                @endwhile
            </div>
        </div>
    </div>
</section>

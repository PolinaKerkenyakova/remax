@php
$title = get_sub_field('title');
$boxes_repeater = get_sub_field('boxes_repeater');
@endphp

<section class="boxes-with-title-and-text">
    <div class="container">
        @if ($title)
            @php
                echo $title;
            @endphp
        @endif

        <div class="boxes-container">
            @while (have_rows('boxes_repeater'))
                <div class="box">
                    @php
                        the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $text = get_sub_field('text');
                    @endphp

                    @if ($icon)
                        <div class="icon">
                            <img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}">
                        </div>
                    @endif

                    @if ($title)
                    <div class="title-container">
                        @php
                            echo $title;
                        @endphp
                        </div>
                    @endif

                    @if ($text)
                        <p>{{ $text }}</p>
                    @endif
                </div>
            @endwhile
        </div>
    </div>
</section>

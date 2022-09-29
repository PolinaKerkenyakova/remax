@php
$videos = get_sub_field('videos');
@endphp

<section class="videos-with-cta">
    <div class="container">
        @if ($videos)
            <div class="videos">
                @while (have_rows('videos'))
                    @php
                        the_row();
                        $icon = get_sub_field('icon');
                        $title = get_sub_field('title');
                        $video = get_sub_field('video');
                        $subtitle = get_sub_field('subtitle');
                        $text = get_sub_field('text');
                        $cta = get_sub_field('cta');
                    @endphp

                    <div class="video">
                        <div class="icon">
                            <img src="{{ $icon['url'] }}" alt="{{ $icon['alt'] }}">
                        </div>
                        <h3>{{ $title }}</h3>
                        <div class="video-box">
                            <img src="{{ $video['url'] }}" alt="{{ $video['alt'] }}">
                        </div>
                        <h4>{{ $subtitle }}</h4>
                        @php echo $text;  @endphp

                        <div class="cta">
                            <a href="{{ $cta['url'] }}" target="{{ $cta['target'] }}"
                                class="button">{{ $cta['title'] }}</a>
                        </div>
                    </div>
                @endwhile
            </div>
        @endif
    </div>
</section>

@php
$title = get_sub_field('title');
$video_section = get_sub_field('video_section');
$boxes_section = get_sub_field('boxes_section');
@endphp

<section class="video-with-text-and-boxes">
    <div class="container">
        @if ($title)
            @php echo $title; @endphp
        @endif

        @if ($video_section)
            <div class="wrapper">
                <div class="video-container">
                    <div><img src="{{ $video_section['video']['url'] }}" alt=""></div>
                </div>

                <div class="content-container">
                    @if ($video_section['title'])
                        @php echo $video_section['title']; @endphp
                    @endif

                    @if ($video_section['text'])
                        @php echo $video_section['text'] @endphp
                    @endif
                </div>
            </div>
        @endif


        @if ($boxes_section)
            <div>
                @while (have_rows('boxes_section'))
                    @php
                        the_row();
                        
                        $box_background = get_sub_field('box_background');
                        $box_image = get_sub_field('box_image');
                        $box_title = get_sub_field('box_title');
                        $box_text = get_sub_field('box_text');
                    @endphp

                    <div class="box">
                        <div>
                            <img src="{{ $box_background['url'] }}" alt="{{ $box_background['alt'] }}">
                        </div>
                        <div>
                            <div>
                                <img src="{{ $box_image['url'] }}" alt="{{ $box_image['alt'] }}">
                            </div>
                            <h3>{{ $box_title }}</h3>
                            <p>{{ $box_text }}</p>
                        </div>
                    </div>
                @endwhile
            </div>
        @endif
    </div>
</section>

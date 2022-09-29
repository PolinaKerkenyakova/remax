@if (have_rows('page_build'))
    @while (have_rows('page_build'))
        @php the_row() @endphp

        @if (get_row_layout() == 'add_footer_cta')
            @include('blocks.footer-cta')
        @endif

        @if (get_row_layout() == 'add_image_and_text')
            @include('blocks.image-and-text')
        @endif

        @if (get_row_layout() == 'add_testimonials')
            @include('blocks.testimonials')
        @endif

        @if (get_row_layout() == 'add_hero')
            @include('blocks.hero')
        @endif

        @if (get_row_layout() == 'add_boxes_with_title_and_text')
            @include('blocks.boxes-with-title-and-text')
        @endif

        @if (get_row_layout() == 'add_image_leftright_with_bullet_points')
            @include('blocks.image-leftright-with-bullet-points')
        @endif

        @if (get_row_layout() == 'add_title_with_text')
            @include('blocks.title-with-text')
        @endif

        @if (get_row_layout() == 'add_text_and_overflowing_image')
            @include('blocks.text-and-overflowing-image')
        @endif

        @if (get_row_layout() == 'add_video_with_text_and_boxes')
            @include('blocks.video-with-text-and-boxes')
        @endif

        @if (get_row_layout() == 'add_videos_with_cta')
            @include('blocks.videos-with-cta')
        @endif

        @if (get_row_layout() == 'add_image_with_text_box_on_top')
            @include('blocks.image-with-text-box-on-top')
        @endif

        @if (get_row_layout() == 'add_dynamic_boxes')
            @include('blocks.dynamic-boxes')
        @endif

        @if (get_row_layout() == 'add_video_with_background')
            @include('blocks.video-with-background')
        @endif

        @if (get_row_layout() == 'add_hero_with_image')
            @include('blocks.hero-with-image')
        @endif

        @if (get_row_layout() == 'add_slider')
            @include('blocks.slider')
        @endif
    @endwhile
@endif

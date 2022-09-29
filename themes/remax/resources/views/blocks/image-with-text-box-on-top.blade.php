@php
$background_image = get_sub_field('background_image');
$box_title = get_sub_field('box_title');
$box_text = get_sub_field('box_text');
@endphp

<section class="image-with-text-box-on-top" style="background-image: url({{ $background_image['url'] }})">

    @if ($box_title || $box_text)
        <div class="text-box">

            @if ($box_title)
                @php echo $box_title  @endphp
            @endif

            @if ($box_text)
                @php echo $box_text;  @endphp
            @endif
        </div>
    @endif
</section>

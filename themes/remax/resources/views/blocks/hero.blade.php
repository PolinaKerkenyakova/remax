@php
$title = get_sub_field('title');
$subtitle = get_sub_field('subtitle');
@endphp

<section class="hero" style="background-image: url('@asset('./images/grey-background-with-shapes.svg')')">
    <div class="container">
        @if ($title)
            @php
                echo $title;
            @endphp
        @endif

        @if ($subtitle)
            @php
                echo $subtitle;
            @endphp
        @endif
    </div>
</section>

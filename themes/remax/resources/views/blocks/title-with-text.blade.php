@php
$title = get_sub_field('title');
$text = get_sub_field('text');
@endphp

<section class="title-with-text" style="background-image: url('@asset('.images/grey-background-with-shapes.svg')')">
    <div class="container">
        @if ($title)
            @php
                echo $title;
            @endphp
        @endif

        @if ($text)
            <p>{{ $text }}</p>
        @endif

    </div>
</section>

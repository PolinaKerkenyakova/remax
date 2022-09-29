@php
$title = get_sub_field('title');
$cta_button = get_sub_field('cta_button');
$round_image = get_sub_field('round_image');
$text = get_sub_field('text');
@endphp


<section class="footer-cta" style="background-image: url('@asset('./images/footer-cta-background.png')')">
    <div class="container">


        @if ($title)
            @php
                echo $title;
            @endphp
        @endif

        <div class="content">
            @if ($cta_button)
                <a href="{{ $cta_button['url'] }}" target="{{ $cta_button['target'] }}"
                    class="button">{{ $cta_button['title'] }}</a>
            @endif
            <div>
                @if ($round_image)
                    <div class="img-box">
                        <img src="{{ $round_image['url'] }}" alt="{{ $round_image['alt'] }}">
                    </div>
                @endif
                @if ($text)
                    @php
                        echo $text;
                    @endphp
                @endif
            </div>
        </div>
    </div>
</section>

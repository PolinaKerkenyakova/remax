@php
$boxes = get_sub_field('boxes');
$description = get_sub_field('description');
@endphp

<section class="dynamic-boxes">
    <div class="container">
        @if ($boxes)
            <div class="boxes">
                @while (have_rows('boxes'))
                    @php
                        the_row();
                        $big_textnumber = get_sub_field('big_textnumber');
                        $text = get_sub_field('text');
                    @endphp
                    <div class="box">
                        <h3>{{ $big_textnumber }}</h3>
                        <h4>{{ $text }}</h4>
                    </div>
                @endwhile
            </div>
        @endif

        @if ($description)
            <div class="description">
                @php echo $description; @endphp
            </div>
        @endif
    </div>
</section>

@extends('layouts.app')

@section('content')

  @while(have_posts()) @php(the_post())

    @include('partials.page-header')
    <div class="content-page-builder" >
      {{-- @dd('hi pahe') --}}
      @includeFirst(['pages.content-page-build'])
    </div>
  @endwhile
@endsection

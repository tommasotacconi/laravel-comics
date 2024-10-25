@extends('layouts.app')

@section('page-title', $bike['model_name'])

@section('main-content')

  {{-- Bikes cards --}}
  <main id="{{ $bike_id }}" class="bike-show" style="background-image: url({{ $bike['img_url'] }})">
    <div class="container-md px-4">
      <div class="col-8 mx-auto">
        <div class="wrapper-title-price mb-3">
          <h1>
            {{ $bike['model_name'] }}
          </h1>
          <span class="price">{{ $bike['price'] }}</span>
        </div>
        <section class="bike-specs">
          <p>
            {{ $bike['description'] }}
          </p>
        </section>
      </div>
    </div>
  </main>

@endsection

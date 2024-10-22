@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')

  {{-- Bikes cards --}}
  <div class="container-md">
      <div class="row g-3">
        @foreach ($bikes as $bike)
          <div class="col-3">
            <div class="card" style="min-height: 550px;">
              <img src="{{ $bike['img_url'] }}" class="card-img-top" alt="{{ $bike['model_name'] }} bike">
              <div class="card-body">
                <h5 class="card-title">{{ $bike['model_name'] }}</h5>
                <p class="card-text">
                  {{ $bike['description'] }}
                </p>
                <a href="#" class="btn btn-primary">Go to {{ $bike['model_name'] }} </a>
              </div>
            </div>
          </div>
        @endforeach
      </div>
  </div>

@endsection

@extends('layouts.app')

@section('page-title', 'Homepage')

@section('main-content')
	{{-- Bikes cards --}}
	<div class="container-md">
			<div class="row mt-1 mb-4 g-3 ">
				@foreach ($bikes as $index => $bike)
					<div class="col-4 col-lg-3">
						<div id="{{ $index }}" class="card" style="">
							<img src="{{ $bike['img_url'] }}" class="card-img-top" alt="{{ $bike['model_name'] }} bike">
							<div class="card-body">
								<h5 class="card-title">{{ $bike['model_name'] }}</h5>
								<a href="{{ $index }}" class="btn btn-primary mt-4">Go to {{ $bike['model_name'] }} </a>
							</div>
						</div>
					</div>
				@endforeach
			</div>
	</div>

@endsection

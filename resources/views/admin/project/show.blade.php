@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body">
                        <h5 class="card-title">{{ $data->title }}</h5>
                        <p class="card-text">{{ $data->description }}</p>
                        <span class="d-block mb-1 fw-bold">{{ __('Languages') }}:</span>
                        <span class="d-block mb-4">{{ $data->language }}</span>
                        <button type="button" class="btn btn-warning w-100">{{ __('Modify') }}</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

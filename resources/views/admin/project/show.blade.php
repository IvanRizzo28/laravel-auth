@extends('layouts.app')

@section('content')
    <div class="container mt-4">
        <div class="row justify-content-center align-items-center">
            <div class="col-12 col-md-8">
                <div class="card">
                    <div class="card-body ">
                        <div class="w-50 mb-2">
                            <img src="{{ asset('storage/'.$data->image) }}" alt="{{ $data->title }}" class="w-100" style="">
                        </div>

                        <h5 class="card-title">{{ $data->title }}</h5>
                        <p class="card-text">{{ $data->description }}</p>
                        <span class="d-block mb-1 fw-bold">{{ __('Languages') }}:</span>
                        <span class="d-block mb-4">{{ $data->language }}</span>
                        <a type="button" href="{{ route('admin.project.edit',$data->id) }}" class="btn btn-warning w-100">{{ __('Edit') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

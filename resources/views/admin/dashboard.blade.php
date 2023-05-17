@extends('layouts.app')

@section('content')
    <div class="container mt-4">

        @if (session('status'))
            <div class="alert alert-success" role="alert">
                {{ session('status') }}
            </div>
        @endif
        <div class="row">
            <div class="col-12 col-md-4 mb-2">
                <div class="card">
                    <h5 class="card-header">{{ __('Recent Project') }}</h5>
                    @if (count($data) < 0)
                        <div class="card-body">
                            <h5 class="card-title">Ancora nessun progetto</h5>
                        </div>
                    @else
                    <div class="card-body">
                        <h5 class="card-title">{{ $data[0]->title }}</h5>
                        <p class="card-text">{{ $data[0]->description }}</p>
                        <span class="d-block mb-1 fw-bold">{{ __('Languages') }}:</span>
                        <span class="d-block mb-2">{{ $data[0]->language }}</span>
                    </div>
                    @endif
                </div>
            </div>
            <div class="col-12 col-md-8">
                <div class="card">
                    <h5 class="card-header">{{ __('Projects') }}</h5>
                    <div class="card-body">
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">{{ __('Title') }}</th>
                                    <th scope="col">{{ __('Date') }}</th>
                                    <th scope="col">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($data as $item)
                                    <tr>
                                        <th scope="row">{{ $item->id }}</th>
                                        <td>{{ $item->title }}</td>
                                        <td>{{ $item->created_at }}</td>
                                        <td>
                                            <div class="d-flex">
                                                <a href="{{ route('admin.project.show',$item->id) }}" class="btn btn-outline-primary btn-sm me-1">{{ __('Details') }}</a>
                                                <button type="button" class="btn btn-outline-danger btn-sm me-1">{{ __('Delete') }}</button>
                                            </div>

                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>


    </div>
@endsection

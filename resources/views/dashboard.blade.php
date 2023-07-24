@extends('layout')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Dashboard') }}</div>
                <div class="card-body">
                    @if (session('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session('success') }}
                    </div>
                    @endif
                    <div class="row">
                        <div class="col-lg-6">
                            <a href="{{ route('show-table') }}">
                                <button type="button" class="btn btn-danger" style="width:100%">First Route</button></a>
                        </div>
                        <div class="col-lg-6">
                            <a href="{{ route('show-products-table') }}">
                                <button type="button" class="btn btn-primary" style="width:100%">Second Route</button></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
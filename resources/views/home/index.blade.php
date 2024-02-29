@extends('layouts.default')


@section('title', 'Home')


@section('content')
    <div class="container">
        Home!

        <div class="d-flex justify-content-center">
            <a href="{{ route('auth.logout') }}" class="btn btn-danger">Logout</a>
        </div>
    </div>

@endsection

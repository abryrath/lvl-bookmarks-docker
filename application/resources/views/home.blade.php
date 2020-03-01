@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                <div>
                    @include ('forms/new-bookmark')
                </div>

                    You are logged in!
                    @foreach ($user->bookmarks() as $bookmark)
                        <bookmark id="1" site="https://laravel.com"/>
                    @endforeach
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

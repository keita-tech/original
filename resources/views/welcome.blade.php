@extends('layouts.app')

@section('content')
    <div class="center jumbotron" style="background-color: lavender">
        <div class="text-center">
            <h1>Welcome to the ComicReview</h1>
            {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
        </div>
    </div>
@endsection
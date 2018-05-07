@extends('layouts.app')

@section('content')
    @if (Auth::check())
        <?php $user = Auth::user(); ?>
        <div class="center jumbotron" style="background-color: lavender">
            <div class="text-center">
                <h1>Welcome to the ComicReview</h1>
                <h1>{{ $user->name }}</h1>
            </div>
        </div>
    @else
        <div class="center jumbotron" style="background-color: lavender">
            <div class="text-center">
                <h1>Welcome to the ComicReview</h1>
                {!! link_to_route('signup.get', 'Sign up now!', null, ['class' => 'btn btn-lg btn-primary']) !!}
            </div>
        </div>
    @endif
@endsection

@section('cover')
    test
@endsection
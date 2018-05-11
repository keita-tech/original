
@if (Auth::user()->is_favorite($review->id))
    {!! Form::open(['route' => ['user.unfavorite', $review->id], 'method' => 'delete']) !!}
        {!! Form::submit('Unfavorite', ['class' => "btn btn-warning"]) !!}
    {!! Form::close() !!}
@else
    {!! Form::open(['route' => ['user.favorite', $review->id]]) !!}
        {!! Form::submit('Favorite', ['class' => "btn btn-info"]) !!}
    {!! Form::close() !!}
@endif
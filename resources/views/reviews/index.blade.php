@extends('layouts.app')

@section('content')

    <h1>レビュー一覧</h1>

    @if (count($reviews) > 0)
        <ul>
            @foreach ($reviews as $review)
                <li>{!! link_to_route('reviews.show', $review->id, ['id' => $review->id]) !!} : {{ $review->title }} : {{ $review->comic_title }} : {{ $review->content }}</li>
            @endforeach
        </ul>
    @endif
{!! link_to_route('reviews.create', '新規レビューの投稿') !!}
@endsection
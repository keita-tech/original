<!--レビュー詳細ページ-->

@extends('layouts.app')

@section('content')

    <!--バックページボタン-->
    
    <h1>レビュー詳細ページ<h2>
    <h2>{{ $review->title}}</h2>

    <p>コミックタイトル：{{ $review->comic_title }}</p>
    <p>レビュー：{{ $review->content }}</p>
    
    {!! link_to_route('reviews.edit', 'このレビューの編集', ['id' => $review->id]) !!}
    
    {!! Form::model($review, ['route' => ['reviews.destroy', $review->id], 'method' => 'delete']) !!}
        {!! Form::submit('削除') !!}
    {!! Form::close() !!}
    
    <!--お気に入りボタン-->
    
    <!--投稿ユーザの表示-->
    
    <!--フォローボタン-->

@endsection
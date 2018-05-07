@extends('layouts.app')

@section('content')
    
    <h2>id: {{ $review->id }} のレビュー編集ページ</h2>

    {!! Form::model($review, ['route' => ['reviews.update', $review->id], 'method' => 'put']) !!}

        {!! Form::label('title', 'タイトル:') !!}
        {!! Form::text('title') !!}
        
        {!! Form::label('comic_title', 'コミックタイトル:') !!}
        {!! Form::text('content') !!}
        
        {!! Form::label('content', 'レビュー:') !!}
        {!! Form::text('content') !!}

        {!! Form::submit('更新') !!}

    {!! Form::close() !!}
    
@endsection
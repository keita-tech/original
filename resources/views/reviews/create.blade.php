@extends('layouts.app')

@section('content')

<h1>レビュー新規作成</h1>

   <div class="row">
        <div class="col-xs-12 col-sm-offset2 col-sm-6 col-lg-offset-3 col-lg-6">
        {!! Form::model($review, ['route' => 'reviews.store']) !!}
            <div class="form-group">
                {!! Form::label('title','タイトル:') !!}
                {!! Form::text('title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('comic_title', 'コミックタイトル:') !!}
                {!! Form::text('comic_title', null, ['class' => 'form-control']) !!}
            </div>
            <div class="form-group">
                {!! Form::label('content', 'レビュー:') !!}
                {!! Form::text('content', null, ['class' => 'form-control']) !!}
            </div>
                {!! Form::submit('投稿',['class' => 'btn btn-primary']) !!}
    
            {!! Form::close() !!}
        </div>
    </div>


@endsection
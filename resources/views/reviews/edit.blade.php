@extends('layouts.app')

@section('content')
    
    <!--バックページボタン-->
    <div align="right">
        <input class="btn btn-default btn-lg" value="戻る" onclick="history.back();" type="button">
    </div>
    
    <h2>レビュー編集ページ</h2>
    
    <div class="col-xs-12 col-sm-offset2 col-sm-6 col-lg-offset-3 col-lg-6">
    {!! Form::model($review, ['route' => ['reviews.update', $review->id], 'method' => 'put']) !!}
        <div class="form-group">
            {!! Form::label('title', 'タイトル:') !!}
            {!! Form::text('title', null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('comic_title', 'コミックタイトル:') !!}
            {!! Form::text('comic_title', null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::label('content', 'レビュー:') !!}
            {!! Form::text('content', null , ['class' => 'form-control']) !!}
        </div>
        <div class="form-group">
            {!! Form::submit('更新', ['class' => 'btn btn-default btn-lg'], ['class' => 'form-control']) !!}
        </div>
    {!! Form::close() !!}
    </div>
    
@endsection
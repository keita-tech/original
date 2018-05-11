<!--レビュー詳細ページ-->

@extends('layouts.app')

@section('content')

    <!--バックページボタン-->
    <div align="right">
        <input class="btn btn-default btn-lg" value="戻る" onclick="history.back();" type="button">
    </div>
    
    <h2>レビュー詳細</h2>
    <table class="table table-striped">
        <tr>
            <th>タイトル</th>
            <td>{{ $review->title }}</td>
        </tr>
        <tr>
            <th>コミックタイトル</th>
            <td>{{ $review->comic_title }}</td>
        </tr>
        <tr>
            <th>レビュー</th>
            <td>{{ $review->content }}</td>
    </table>
    
    @if (Auth::user()->id == $review->user_id)
        {!! link_to_route('reviews.edit', 'このレビューの編集', ['id' => $review->id], ['class' => 'btn btn-default']) !!}
    @endif
    
    <div class="btn-toolbar">
        <div class="btn-group btn-group-justified">
             <!--お気に入りボタン-->
            @include('user_favorite.favorite_button', ['review' => $review])
            <!--削除ボタン-->
            @if (Auth::user()->id == $review->user_id)
                {!! Form::open(['route' => ['reviews.desedit', $review->id], 'method' => 'delete']) !!}
                    {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}                    
                {!! Form::close() !!}
            @endif
            <!--投稿ユーザの表示-->
                
            <!--フォローボタン  userがundefinedと言われる-->
        </div>
    </div>
@endsection
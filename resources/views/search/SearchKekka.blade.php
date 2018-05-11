@extends('layouts.app')

@section('content')
<center>
    <div>
        <h1>コミックタイトル検索</h1>
    </div>
    
    <form style="width:500px" method="post" action="{{ route('search.SearchKekka') }}">
        {{ csrf_field() }}
        <input type="text" id="usersearch" name="usersearch" class="form-control" placeholder="タイトル一部でも大丈夫です"><br>
        <input type="submit" name="submit" value="検索" class="btn btn-success btn-lg">
    </form>

    <h2>検索結果</h2>
    @include('reviews.reviews', ['reviews' => $reviews])
    
    
    <a href="#TOP" class="btn btn-default btn-lg">ページトップへ</a>

</center>
@endsection
<?php $url = $_SERVER['REQUEST_URI']; ?>
@foreach ($reviews as $review)
<table class="table table-striped">
<tr class="media-list">
    @if (strstr($url,'search')==true || strstr($url,'SearchKekka')==true)
        <?php $user = App\User::find($review->user_id); ?>
    @else
    　　<?php $user = $review->user; ?>
    @endif
    <th class="media">
        <div class="media-left">
            <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
        </div>
        <div class="media-body">
            <div>
                {!! link_to_route('users.show', $user->name, ['id' => $user->id]) !!} <span class="text-muted">posted at {{ $review->created_at }}</span>
            </div>
            <div>
                <p>タイトル：{!! link_to_route('reviews.show', $review->title, ['id' => $review->id]) !!}</p>
            </div>
             <div>
                <p>コミックタイトル：{!! nl2br(e($review->comic_title)) !!}</p>
            </div>
             <div>
                <p>{!! nl2br(e($review->content)) !!}</p>
            </div>
            <div class="btn-toolbar">
                <div class="btn-group btn-group-justified">
                    @include('user_favorite.favorite_button', ['review' => $review])
                    @if (Auth::user()->id == $review->user_id)
                        {!! Form::open(['route' => ['reviews.destroy', $review->id], 'method' => 'delete']) !!}
                            {!! Form::submit('Delete', ['class' => 'btn btn-danger']) !!}
                        {!! Form::close() !!}
                    @endif
                </div>
            </div>
        </div>
    </th>
</table>
@endforeach
</tr>
{!! $reviews->render() !!}
@if (count($users) > 0)

@foreach ($users as $user)
    <table class="table table-striped">
        <tr class="media-list">
            <th class="media">
                <div class="media-left">
                    <img class="media-object img-rounded" src="{{ Gravatar::src($user->email, 50) }}" alt="">
                </div>
                <div class="media-body">
                    <font face="Batang">
                        <div>
                            {{ $user->name }}
                        </div>
                        <div>
                            <p>{!! link_to_route('users.show', 'View profile', ['id' => $user->id]) !!}</p>
                        </div>
                    </font>
                </div>
            </th>
        </tr>
    </table>
@endforeach

{!! $users->render() !!}
@endif
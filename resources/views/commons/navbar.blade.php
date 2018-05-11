<header>
    <nav class="navbar navbar-inverse navbar-static-top">
        <div class="container">
            <div class="navbar-header">
                <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                <a class="navbar-brand" id="ookikunare" href="/"><font face="fantasy">ComicReview</font></a>
            </div>
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav navbar-right">
                     @if (Auth::check())
                        <li>
                            
                            <a href="{{ route('reviews.create', ['id' => Auth::user()->id]) }}">
                                <span class="glyphicon glyphicon-plus" aria-hidden="true"></span>
                                投稿
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('users.index') }}">
                                <span class="glyphicon glyphicon-user" aria-hidden="true"></span>
                                ユーザー一覧
                            </a>
                        </li>
                        <li>
                            <a href="{{ route('search.refer') }}">
                                <span class="glyphicon glyphicon-search" aria-hidden="true"></span>
                                search
                              </a>
                        </li>
                        
                        <li class="dropdown">
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                                <span class="gravatar">
                                    <img src="{{ Gravatar::src(Auth::user()->email, 20) . '&d=mm' }}" alt="" class="img-circle">
                                </span>
                                {{ Auth::user()->name }}
                                <span class="caret"></span>
                            </a>
                            <ul class="dropdown-menu">
                                <li>
                                    <li>{!! link_to_route('users.show', 'マイページ', ['id' => Auth::user()->id]) !!}</li>
                                </li>
                                <li role="separator" class="divider"></li>
                                <li>
                                    <a href="{{ route('logout.get') }}">ログアウト</a>
                                </li>
                            </ul>
                        </li>
                    @else
                        <li><a href="{{ route('signup.get') }}">新規登録</a></li>
                        <li><a href="{{ route('login') }}">ログイン</a></li>
                    @endif
                </ul>
            </div>
        </div>
    </nav>
</header>
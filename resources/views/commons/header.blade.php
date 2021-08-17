<header class="mb-5">
    
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        
        <a class="navbar-brand" href="/">YouTube-Curation</a>
        
        <botton type="botton" class="navbar-toggler" data-toggle="collapse" data-target="#navbar">
            <span class="navbar-toggler-icon"></span>
        </botton>
        
        <div class="collapse navbar-collapse" id="navbar">
            <ul class="navbar-nav mr-auto"></ul>
            <ul class="navbar-nav">
                
                @if(Auth::check())
                
                    <li class="nav-item">{!! link_to_route('logout', 'ログアウト', [], ['class'=>'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('users.show', 'マイページ', ['id'=>Auth::id()], ['class'=>'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('movies.create', '動画を登録する', ['id'=>Auth::id()], ['class'=>'nav-link']) !!}</li>
                
                @else
                
                    <li class="nav-item">{!! link_to_route('signup', '新規ユーザー登録', [], ['class'=>'nav-link']) !!}</li>
                    <li class="nav-item">{!! link_to_route('login', 'ログイン', [], ['class'=>'nav-link']) !!}</li>
                
                @endif
                
            </ul>
        </div>
        
    </nav>
    
</header>
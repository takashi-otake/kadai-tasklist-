<header class="mb-4">
            <nav class="navbar navbar-expand-sm navbar-dark bg-dark">
                <a class="navbar-brand" href="/">Tasklist</a>
                
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#nav-bar">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse" id="nav-bar">
                    <ul class="navbar-nav mr-auto"></ul>
                        <!--<li class="nav-item">{!! link_to_route('tasks.create','新規メッセージの投稿',[],['class'=>'nav-link']) !!}</li>-->
                         <li>{!! link_to_route('signup.get', '新規登録', [], ['class' => 'nav-link']) !!}</li>
                         <li><a href="#">ログイン</a></li>
                    <ul class="navbar-nav">
                    </ul>
                </div>
            </nav>
       
        </header>
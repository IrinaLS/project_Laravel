<h1 class="h2">Добро пожаловать, {{ Auth::user()->name }}</h1>
    <div class="btn-toolbar mb-2 mb-md-0">
        <div class="btn-group me-2">
            @if(Auth::user()->is_admin)
                <a href="{{ route('admin.index') }}" style="color:red;">Перейти в админку</a>
            <br>
            @endif

            @if(!(Auth::user()->is_admin))
            <a href="{{ route('news.about') }}" style="color:red;">Перейти к новостям</a>
            <br>
            @endif

            @if(Auth::user()->avatar)
            <img src="{{ Auth::user()->avatar }}" style="width:300px;">
            @endif

            <a href="{{ route('account.logout') }}">Выход</a>
           
        </div>

    </div>



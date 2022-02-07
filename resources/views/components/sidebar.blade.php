<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link  @if(request()->routeIs('news.about')) active @endif" aria-current="page" href="{{ route ('news.about') }}">
              <span data-feather="home"></span>
              О нас
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(request()->routeIs('news.index')) active @endif" href="{{ route ('news.index') }}">
              <span data-feather="file"></span>
              Новости
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(request()->routeIs('news.category')) active @endif" href="{{ route ('news.category') }}">
              <span data-feather="file"></span>
              Категории
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link @if(request()->routeIs('news.users')) active @endif"  href="{{ route ('users.index') }}">
              <span data-feather="file"></span>
              Написать нам
            </a>
          </li>
          
        </ul>

         </div>
    </nav>
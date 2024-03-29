<nav id="sidebarMenu" class="col-md-3 col-lg-2 d-md-block bg-light sidebar collapse">
      <div class="position-sticky pt-3">
        <ul class="nav flex-column">
          <li class="nav-item">
            <a class="nav-link  @if(request()->routeIs('admin.index')) active @endif" aria-current="page" href="{{ route ('admin.index') }}">
              <span data-feather="home"></span>
              Главная
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(request()->routeIs('admin.news.*')) active @endif" href="{{ route ('admin.news.index') }}">
              <span data-feather="file"></span>
              Новости
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(request()->routeIs('admin.categories.*')) active @endif" href="{{ route ('admin.categories.index') }}">
              <span data-feather="file"></span>
              Категории
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(request()->routeIs('admin.categories.*')) active @endif" href="{{ route ('news.index') }}">
              <span data-feather="file"></span>
              На основную сраницу
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(request()->routeIs('admin.parser.*')) active @endif" href="{{ route ('admin.parser') }}">
              <span data-feather="file"></span>
              Парсер
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link  @if(request()->routeIs('admin.updateProfile.*')) active @endif" href="{{ route ('admin.updateProfile') }}">
              <span data-feather="file"></span>
              Изменение профиля посетителя
            </a>
          </li>
        </ul>

         </div>
    </nav>
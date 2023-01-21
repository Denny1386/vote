<header class="header header-sticky mb-4">
    <div class="container-fluid">
        <button class="header-toggler px-md-0 me-md-3" type="button" onclick="coreui.Sidebar.getInstance(document.querySelector('#sidebar')).toggle()">
            <svg class="icon icon-lg">
                <use xlink:href="{{asset("coreui/vendors/@coreui/icons/svg/free.svg#cil-menu")}}"></use>
            </svg>
        </button>
        <a class="header-brand d-md-none" href="#">
            Взлёт
        </a>
        <ul class="header-nav d-none d-md-flex">
            <li class="nav-item"><a class="nav-link" href="#">Главная</a></li>
        </ul>
        <ul class="header-nav ms-auto">
            <li class="nav-item"><span class="nav-link">{{ auth()->user()->getFioOrEmail() }}</span></li>
        </ul>

        <ul class="header-nav ms-3">
            <li class="nav-item dropdown"><a class="nav-link py-0" data-coreui-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">
                    <div class="avatar avatar-md"><img class="avatar-img" src="{{asset("coreui/assets/img/avatars/user.png")}}" alt="user@email.com"></div>
                </a>
                <div class="dropdown-menu dropdown-menu-end pt-0">
                    <div class="dropdown-header bg-light py-2">
                        <div class="fw-semibold">Аккаунт</div>
                    </div><a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">
                        <svg class="icon me-2">
                            <use xlink:href="{{asset("coreui/vendors/@coreui/icons/svg/free.svg#cil-account-logout")}}"></use>
                        </svg> Выход</a>
                </div>
            </li>
        </ul>
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST">
        @csrf
    </form>
</header>

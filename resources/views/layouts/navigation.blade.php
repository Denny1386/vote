<nav class="navbar navbar-default navbar-static-top" role="navigation" style="margin-bottom: 0">
    <div class="navbar-header">
        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="{{ url('/') }}">Регистрация на программы</a>
    </div>

    <ul class="nav navbar-top-links navbar-right">
        <li class="dropdown">
            <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                <i class="fa fa-user fa-fw"></i> @auth{{ auth()->user()->name }}@endauth <i class="fa fa-caret-down"></i>
            </a>
            <ul class="dropdown-menu dropdown-messages">
                @if(auth()->user()->hasRole('student'))
                @else
                    <li><a href="{{ url('/profile') }}"><i class="fa fa-gear fa-fw"></i> Редактировать профиль</a></li>
                    <li class="divider"></li>
                @endif
                <li>
                    <a href="{{ route('logout') }}" onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();"><i class="fa fa-sign-out fa-fw"></i> Выйти</a>

                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                        @csrf
                    </form>
                    <form id="logout-sp" action="https://login.school.mosreg.ru/logout" method="post">
                    </form>
                </li>
            </ul>
        </li>
    </ul>

    <div class="navbar-default sidebar" role="navigation">
        <div class="sidebar-nav navbar-collapse">
            <ul class="nav" id="side-menu">
            @if(auth()->user()->hasRole('admin'))
                @include('navigation.admin')
            @endif
            @if(auth()->user()->hasRole('student'))
                @include('navigation.student')
            @endif
            @if(auth()->user()->hasRole('staff'))
                @include('navigation.staff')
            @endif
            @if(auth()->user()->hasRole('program_manager'))
                @include('navigation.program_manager')
            @endif
            @if(auth()->user()->hasRole('curator'))
                @include('navigation.curator')
            @endif

            @can('document_management.access')
                    <li>
                        <a href="#"><i class="fa fa-file fa-fw"></i>Документы<span class="fa arrow"></span></a>
                        <ul class="nav nav-second-level">
                            <li>
                                <a href="{{ route('document-management') }}"><i class="fa fa-book fa-fw"></i>Управление документами</a>
                            </li>
                            <li>
                                <a href="{{ route('position_and_program.index') }}"><i class="fa fa-file-pdf-o fa-fw"></i>Положения и программы</a>
                            </li>
                            <li>
                                <a href="{{ route('regulation.index') }}"><i class="fa fa-file-word-o fa-fw"></i>Формирование положений</a>
                            </li>
                        </ul>
                    </li>
            @endcan
            @can('orders.index')
                 <li>
                    <a href="{{ route('order.index') }}"><i class="fa fa-pencil-square fa-fw"></i>Управление приказами</a>
                 </li>
            @endcan
            @can('role-edit')
                 <li>
                     <a href="{{ url('/roles') }}"><i class="fa fa-tasks fa-fw"></i>Управление ролями</a>
                 </li>
            @endcan
            @can('merch.index')
                    <li>
                        <a href="{{ route('merch.index') }}"><i class="fa fa-tshirt fa-fw"></i>Выдача мерча</a>
                    </li>
            @endcan
            </ul>
        </div>
    </div>
</nav>

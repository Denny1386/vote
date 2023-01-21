<div class="sidebar sidebar-dark sidebar-fixed" id="sidebar">
    <div class="sidebar-brand d-none d-md-flex">
        <img class="sidebar-brand-full" width="135" height="38" src="{{asset("coreui/assets/brand/logo_white.png")}}" alt="logo">
        <svg class="sidebar-brand-narrow" width="46" height="46" alt="CoreUI Logo">
            <use xlink:href="{{asset("coreui/assets/brand/coreui.svg#signet")}}"></use>
        </svg>
    </div>
    <ul class="sidebar-nav" data-coreui="navigation" data-simplebar="">
        @if(auth()->user()->can('coins.deposit') || auth()->user()->can('coins.withdraw'))
        <li class="nav-group">
            <a class="nav-link nav-group-toggle" href="#">
                <svg class="nav-icon">
                    <use xlink:href="{{asset("coreui/vendors/@coreui/icons/svg/free.svg#cil-ruble")}}"></use>
                </svg> Коины
            </a>
            <ul class="nav-group-items">
                <li class="nav-item"><a class="nav-link" href="#"><span class="nav-icon"></span> Начисление</a></li>
                <li class="nav-item"><a class="nav-link" href="#"><span class="nav-icon"></span> Списание</a></li>
            </ul>
        </li>
        @endif
    </ul>
    <button class="sidebar-toggler" type="button" data-coreui-toggle="unfoldable"></button>
</div>

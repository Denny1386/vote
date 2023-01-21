<!DOCTYPE html>
<html lang="ru">
@include('layouts.coreui.parts.head')
<body>
@include('layouts.coreui.parts.sidebar')
<div class="wrapper d-flex flex-column min-vh-100 bg-light">
    @include('layouts.coreui.parts.header')
    <div class="body flex-grow-1 px-3">
        @yield('content')
    </div>
    @include('layouts.coreui.parts.footer')
</div>
@include('layouts.coreui.parts.scripts')
</body>
</html>

@if(session('message'))
<div id="message" class="alert alert-success" role="alert">
    {{session('message')}}
</div>

@push('scripts')
    <script>
        $(document).ready(function(){
            $('#message').fadeOut(4000);
        })
    </script>
@endpush
@endif

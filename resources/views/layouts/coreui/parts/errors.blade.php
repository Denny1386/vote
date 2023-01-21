@if($errors->count() > 0)
<div id="errors" class="alert alert-danger" role="alert">
    <ul>
        @foreach ($errors->all() as $error)
        <li>{{ $error }}</li>
        @endforeach
    </ul>
</div>

@push('scripts')
    <script>
        $(document).ready(function(){
            $('#errors').fadeOut(8000);
        })
    </script>
@endpush
@endif

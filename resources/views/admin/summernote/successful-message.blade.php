    @if(session()->has('message'))
    <div class="alert alert-warning">
        {{ session()->get('message') }}
    </div>
@endif


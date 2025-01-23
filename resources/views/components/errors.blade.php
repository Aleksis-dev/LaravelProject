@if ($errors->any())

<ul>
    @foreach ($errors->all() as $error)
        <li><b>{{ $error }}</b></li>
    @endforeach
</ul>

@endif
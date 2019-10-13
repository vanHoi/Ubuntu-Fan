@if(session()->get('success'))
    <p class="bg-success spacer">
        {{ session()->get('success') }}
    </p>
@endif

@if ($errors->any())
    <div class="bg-danger spacer">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div><br>
@endif

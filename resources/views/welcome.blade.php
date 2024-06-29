@php
    $name = [];

@endphp


@include('includes.Header', ['names' => $name])



@php
    $user = ['name' => 'test', 'email' => 'test', 'password' => 'test'];
@endphp
<ul>
    @foreach ($user as $item)
        <li>{{ $loop->iteration }} - {{ $item }}</li>
    @endforeach
</ul>

<a href="{{ route('admin') }}">Admin login</a>
<a href="{{ route('dashboard') }}">Admin Dashboard</a>




@include('includes.Footer')
{{-- @includeIf('view.name', ['some' => 'data'])
@includeWhen(false, '"")
@includeUnless(false, '"") --}}

@props([
    'method' => 'POST',
    'action' => ''
])

<form action="{{ $action }}" method="{{ $method  === 'GET' ? 'GET': 'POST'}}" {{ $attributes }} >
    @csrf
    @if (!in_array($method, ['GET','POST']))
        @method($method)
    @endif
    {{ $slot }}
</form>
@props(['action', 'method' => 'GET'])

<form action="{{$action}}" method="{{$method}}" {{ $attributes->merge(['class' => 'flex flex-col gap-1 mb-5 w-full p-2 md:flex-row md:justify-center']) }}>
    {{$slot}}
</form>
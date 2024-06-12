@props(['action', 'method' => 'GET'])

<form action="{{$action}}" method="{{$method}}" {{$attributes->twMerge('flex flex-col gap-1 mb-5 w-9/12 pt-2 md:flex-row md:justify-center mt-24')}}>
    {{$slot}}
</form>
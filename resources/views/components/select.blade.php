@props(["name", "id"])

<select name="{{$name}}" id="{{$id}}" class="text-black border-none rounded-lg">
    {{$slot}}
</select>
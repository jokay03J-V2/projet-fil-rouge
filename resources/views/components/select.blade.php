@props(["name", "id"])

<select name="{{$name}}" id="{{$id}}" class="text-black rounded-lg">
    {{$slot}}
</select>
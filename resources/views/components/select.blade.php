@props(["name", "id"])

<select name="{{$name}}" id="{{$id}}" {{$attributes->merge(["class" => "text-black border-none rounded-lg"])}}>
    {{$slot}}
</select>
@props([
'color' => "green",
'bgColor' => "white"
])


<div
    {{$attributes->merge(['data'=>'this card'])
             ->class("card text-color-$color bg-color-$bgColor")
    }}
>

    <div {{$title->attributes->class('header-slot')}} >
        {{$title}}
    </div>

    <div class="default-slot">
        @if($slot->isEmpty())
            <h2>please provide some content</h2>
        @else
            {{$slot}}
        @endif
    </div>

    <div class="footer-slot">
        {{$footer}}
    </div>

</div>

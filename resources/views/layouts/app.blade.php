@props(['title'=>'', 'bodyClass'=>null, 'footerLinks'=>''])

<x-base-layout :$title :$bodyClass>

    <x-layouts.header/>

    {{$slot}}


    {{--    <footer>--}}
    {{--        <a href="">Link1</a>--}}
    {{--        <a href="">Link2</a>--}}
    {{--        {{$footerLinks}}--}}
    {{--    </footer>--}}

</x-base-layout>

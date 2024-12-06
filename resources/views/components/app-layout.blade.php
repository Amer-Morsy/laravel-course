@props([
'title'=>"page_title"
])


<x-base-layout :$title>
    <div class="header">
        <h1>App Header</h1>
    </div>

    {{$slot}}

    @hasSection('footerLinks')
        <footer>
            @section('footerLinks')
                <a href="">Link1</a>
                <a href="">Link2</a>
            @show
        </footer>
    @endif
</x-base-layout>

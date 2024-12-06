<h1>layouts using Components </h1>
<x-app-layout title="Home">
    <div class="home-content">
        <h1>Home Page Content</h1>
        <br>
        @section('footerLinks')
            <a href="">Link3</a>
            <a href="">Link4</a>
        @endsection
    </div>
</x-app-layout>


{{--<h1>Components </h1>--}}
{{--//## Class_based--}}
{{--<x-search-form action="/s" method="POST"/>--}}


{{--//## anonymous--}}
{{--@php--}}
{{--    $color = 'red';--}}
{{--    $bgColor= 'blue';--}}
{{--@endphp--}}

{{--<x-admin.card :color="$color" :bgColor="$bgColor">--}}
{{--<x-admin.card :$color :$bgColor lang="en" class="rounded-card">--}}

{{--    <x-slot name="title" class="title-slot">title 1</x-slot>--}}
{{--    <h2>card content 1</h2>--}}
{{--    <x-slot name="footer">footer 1</x-slot>--}}

{{--</x-admin.card>--}}
{{--<br>--}}
{{--<x-admin.card>--}}
{{--    <x-slot:title>title 2</x-slot:title>--}}
{{--    <h2>card content 2</h2>--}}
{{--    <x-slot:footer>footer 2</x-slot:footer>--}}
{{--</x-admin.card>--}}


{{--<h1>Directives </h1>--}}
{{--@if(true)--}}
{{--    <h2>this will be displayed if true </h2>--}}
{{--@else--}}
{{--    <p>alternative text if false</p>--}}
{{--@endif--}}

{{--@isset($name)--}}
{{--    <p> my name is: {{$name}}</p>--}}
{{--@endisset--}}

{{--@php--}}
{{--    $arr = [];--}}
{{--    $country = 'eg';--}}
{{--    $cars = [--}}
{{--        ['model'=> 'AA'],--}}
{{--        ['model'=> 'BB']--}}
{{--];--}}
{{--@endphp--}}

{{--@empty($arr)--}}
{{--    <p>empty Array</p>--}}
{{--@endempty--}}

{{--@switch($country)--}}
{{--    @case('eg')--}}
{{--    <p>Egypt</p>--}}
{{--    @break--}}
{{--    @case('us')--}}
{{--    <p>USA</p>--}}
{{--    @break--}}
{{--    @default--}}
{{--    <p>Unknown Country</p>--}}
{{--@endswitch--}}

{{--@foreach($cars as $car)--}}
{{--    <p>car model is {{$car['model']}}</p>--}}
{{--@endforeach--}}

{{--@php--}}
{{--    $cars = [];--}}
{{--@endphp--}}

{{--@forelse($cars as $car)--}}
{{--    <h3>{{$car['model']}}</h3>--}}
{{--@empty--}}
{{--    <p>there are no cars </p>--}}
{{--@endforelse--}}

{{--@while(false)--}}
{{--    <p>this while loop</p>--}}
{{--@endwhile--}}

{{--@foreach([1,2,3,4,5] as $n)--}}
{{--    @continue($n == 2)--}}
{{--    <p>{{$n}}</p>--}}
{{--    @break($n==4)--}}
{{--@endforeach--}}

{{--<div @if($country == 'eg') class="egy-class"@endif--}}
{{-->--}}
{{--    some text...--}}
{{--</div>--}}


{{--@php--}}
{{--    $isActive = false;--}}
{{--    $hasError = true;--}}
{{--@endphp--}}
{{--<div>--}}
{{--    <span @class([--}}
{{--    'p-4',--}}
{{--    'font-bold' => $isActive,--}}
{{--    'text-gray-500' => ! $isActive,--}}
{{--    'bg-red' => $hasError,--}}
{{--    ])--}}

{{--</div>--}}
{{--<br>--}}

{{--@php--}}
{{--    $isActive = true;--}}
{{--@endphp--}}

{{--<div>--}}
{{--    <span @style([--}}
{{--    'background-color: red',--}}
{{--    'font-weight: bold' => $isActive,--}}
{{--    ])>Active user</span>--}}
{{--</div>--}}
{{--<br>--}}


{{--@include('shared.button', ['color'=>'cyan', 'text'=>'include'])--}}

{{--@includeIf ( 'shared.search_form', ['year' => 2019])--}}

{{--@includeWhen ($isActive, 'shared.button', ['color'=>'#0f0', 'text'=>'includeWhen'])--}}
{{--@includeUnless (!$isActive, 'shared.button', ['color'=>'red', 'text'=>'includeUnless'])--}}

{{--@includeFirst (['admin.button', 'shared.button'], ['color'=>'#0ff', 'text'=>'includeFirst'])--}}
{{--<br>--}}

{{--@php--}}
{{--    $cars = [1,2,3,4,5];--}}
{{--@endphp--}}

{{--@foreach($cars as $car)--}}
{{--    @include('car.view', ['car'=>$car])--}}
{{--@endforeach--}}

{{--<br>--}}
{{--@each('car.view', $cars, 'car', 'car.empty')--}}

{{--<br>--}}
{{--@include('shared.alert', ['message'=>'this is dangers alert', 'color'=>'#f00'])--}}

{{--<h1>Index Form View/blade </h1>--}}
{{--<script>--}}
{{--    const hobbies = {{\Illuminate\Support\Js::from($hobbies)}}--}}
{{--</script>--}}


{{--<p>welcome {{$name}} {{$surname}}</p>--}}
{{--<p>global shared : {{$year}}</p>--}}
{{--<p>{{strtoupper($name .' '. $surname )}}</p>--}}
{{--<p>app-version: {{\Illuminate\Foundation\Application::VERSION}}</p>--}}
{{--<p>php-version: {{PHP_VERSION}}</p>--}}
{{--{!! $bold !!}--}}
{{--@{{name}}--}}
{{--@verbatim--}}
{{--    <div>--}}
{{--        Name: {{name}}--}}
{{--        Age: {{age}}--}}
{{--    </div>--}}
{{--@endverbatim--}}

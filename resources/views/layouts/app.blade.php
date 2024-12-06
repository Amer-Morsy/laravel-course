@extends('layouts.clean')

@section('childContent')

    @include('layouts.partials.header')

    @yield('content')

    @hasSection('footerLinks')
        <footer>
            @section('footerLinks')
                <a href="">Link1</a>
                <a href="">Link2</a>
            @show
        </footer>
    @endif

@endsection


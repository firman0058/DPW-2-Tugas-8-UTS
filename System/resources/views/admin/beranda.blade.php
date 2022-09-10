@extends('template.base')

@section('content')
    <h1>
        Selamat Datang
        @if(Auth::check())
            {{request()->user()->nama}}
        @endif
    </h1>
@endsection

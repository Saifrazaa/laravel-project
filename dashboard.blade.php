<header>@extends('layout.header')</header>
<body>
@section('body')

@if(session()->has('users'))

@section('dashboard','DASHBOARD')
@else
@section('login','LOG IN')
@endif
@include('contents.partial.message')




@endsection
</body>
@extends('layout.footer')
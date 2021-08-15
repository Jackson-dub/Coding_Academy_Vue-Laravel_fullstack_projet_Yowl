@extends('layouts.app')
@section('content')

@if( Auth::user())
    <router-view :user={{ auth()->user() }}></router-view> 
@else
<router-view></router-view>
@endif

@endsection
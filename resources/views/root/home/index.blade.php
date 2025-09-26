@extends('layouts.root.layout',['pageActive'=>'root'])
@section('headTitle') Home @endsection
@section('content')
            @include('root.home.sections.showCase')
            @include('root.home.sections.register')
            @include('root.home.sections.content')
            @include('root.home.sections.featurings')
            @include('root.home.sections.leagueHall')
            @include('root.home.sections.parallax')
            @include('root.home.sections.signup_db')
            @include('root.home.sections.footer')
@endsection

@extends('master')
@section('head')
    <title>Ubuntu Fan</title>
@stop
@section('content')

    <div class="col-xs-12">
        <div class="row text-center">

            <h1>Er is iets mis gegaan!</h1>

            <h3>We konden deze pagina niet vinden.</h3>

            <div class="clearfix"></div>

            <h4><a href="{{url('/')}}">Terug naar home.</a> </h4>

            <hr>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/t3otBjVZzT0?rel=0" frameborder="0" allowfullscreen></iframe>

            <div class="clearfix"></div><br>

        </div>
    </div>

@stop
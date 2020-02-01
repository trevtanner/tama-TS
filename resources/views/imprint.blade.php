@extends('layouts.app')

@section('title')
    <title>Tama Team Sports - Decoration/Art Generation Information</title>
    <meta name="description" content="Tama Team Sports has many different options for customizing anything you can think of
    with any design you can imagine. We specialize in heat press, screen printing, embroidery, and laser engraving.">
@endsection

@section('content')
    {{--<div class="container pt-4 tama">
        <div class="row text-center">
            <div class="col-12">
            <h1> Decoration/Art Generation</h1>
            </div>
        </div>
        <div class="row text-center">
            <div class="col-12">
        <h4>by Tama Team Sports</h4>
        </div>
        </div>
        <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h6 class="text-center">
                    Tama Team sports offers many different ways to get your custom logo onto different products. This
                    list
                    will hopefully help you decide which is the best option for the project. As always please feel free
                    to
                    <a href="{{ route('contact') }}">contact us</a> if you have any other questions.
                </h6>
            </div>
        </div>--}}
    <app-imprint-section></app-imprint-section>
        {{--Heat press component--}}
        <app-heat-press></app-heat-press>
        <br>
        <hr>
        <br>
        {{--Screen printing component--}}
        <app-screen-printing></app-screen-printing>
        <br>
        <hr>
        <br>
        {{--Embroidery component--}}
        <app-embroidery></app-embroidery>
        <br>
        <hr>
        <br>
        {{--Laser engraving component--}}
        <app-laser-engraving></app-laser-engraving>
    <br>
    <hr>
    <br>
    {{--Laser engraving component--}}
    <app-pad-printing></app-pad-printing>
    <br>
    <hr>
    <br>
    {{--Laser engraving component--}}
    <app-debossing></app-debossing>
@endsection

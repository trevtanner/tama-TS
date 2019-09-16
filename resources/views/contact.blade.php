@extends('layouts.app')

@section('title')
    <title>Contact Us - Tama Team Sports</title>
    @endsection

@section('content')
<div class="container pt-4 tama">
    <div class="row justify-content-center">
        <h1>Contact Us</h1>
    </div>
    <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
            <h5 class="text-center">
                To submit any order please contact us at the following information. For any general questions please visit
                our <a href="{{ route('faq') }}">FAQ</a> page. For any specific questions don't hesitate to call or e-mail
                us from the info below.
            </h5>
        </div>
        </div>
    <br>
    <hr>
    <br>
    <div class="row justify-content-center">
        <h4 class="text-center col-md-8">
Eric Tanner
        </h4>
    </div>
    <br>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <ul class="list-group">
                    <li class="list-group-item text-center">Email: <a href = "mailto: testemail@tamateamsports.com">testemail@tamateamsports.com</a></li>
                    <li class="list-group-item text-center">Phone: +1-555-123-4567</li>

                </ul>
            </div>
        </div>
    <br>
    <hr>
    <br>
    <div class="row justify-content-center">
        <h4 class="text-center col-md-8">
            Brian Stewart
        </h4>
    </div>
    <br>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <ul class="list-group">
                <li class="list-group-item text-center">Email: <a href = "mailto: testemail@tamateamsports.com">testemail@tamateamsports.com</a></li>
                <li class="list-group-item text-center">Phone: +1-555-123-4567</li>

            </ul>
        </div>
    </div>
    </div>
@endsection

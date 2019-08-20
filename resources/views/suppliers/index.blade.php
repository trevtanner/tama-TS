@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="d-flex justify-content-start pb-2">
            <a href="{{ route('suppliers.create') }}" class="btn btn-success"> Add Supplier</a>
        </div>
        <div class="row">
        <div class="col-md-8">
    <card class="card-default">
        <div class="card-header">
            Suppliers
        </div>

    </card>
    </div>
        <div class="col-md-4">
        @include('includes.authsidebar')
    </div>
        </div>
    </div>
@endsection
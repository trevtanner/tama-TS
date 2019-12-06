@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row">
            <div class="d-flex col-md-4">
                @include('includes.supplierssidebar')
            </div>
            <div class="col-md-8">
                <card class="card-default">
                    <div class="card-header">
                        {{ isset($supplier) ? 'Edit Supplier' : 'Create Supplier' }}
                    </div>
                    <div class="card-body">
                        @include('partials.errors')
                        <form action="{{ isset($supplier) ? route('suppliers.update', $supplier->id) : route('suppliers.store') }}"
                              method="POST">
                            @csrf
                            @if(isset($supplier))
                                @method('PUT')
                            @endif
                            <div class="form-group">
                                <label for="name">Supplier Name:</label>
                                <input type="text" id="name" class="form-control" name="name"
                                       value="{{ isset($supplier) ? $supplier->name : '' }}">
                            </div>
                            <div class="form-group">
                                <button class="btn btn-success">
                                    {{ isset($supplier) ? 'Update Supplier' : 'Add Supplier' }}
                                </button>
                            </div>
                        </form>
                    </div>
                </card>
            </div>
        </div>
    </div>
@endsection

@section('scripts')

    <script>
        function handleDelete(id) {
            var form = document.getElementById('deleteSupplierForm');
            form.action = '/suppliers/' + id;
            $('#deleteModel').modal('show');
        }
    </script>
@endsection

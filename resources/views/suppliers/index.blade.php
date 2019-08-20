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
        <div class="card-body">
            @if($suppliers->count() > 0)
                <table class="table">

                    <thead>
                    <th>Name</th>
                    <th></th>
                    <th></th>
                    </thead>
                    <tbody>
                    @foreach($suppliers as $supplier)
                        <tr>
                            <td>
                                {{ $supplier->name }}
                            </td>
                            <td></td>
                            <td class="d-flex justify-content-end">
                                <div class="pr-2">
                                <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-info btn-sm">
                                    Edit
                                </a>
                                </div>
                                <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $supplier->id }})">Delete</button>
                            </td>
                        </tr>
                    @endforeach

                    </tbody>
                </table>
                <!-- Modal -->
                <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <form action="" method="POST" id="deleteSupplierForm">
                            @csrf
                            @method('DELETE')
                            <div class="modal-content">
                                <div class="modal-header">
                                    <h5 class="modal-title" id="deleteModalLabel">Delete Supplier</h5>
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                    </button>
                                </div>
                                <div class="modal-body">
                                    <p class="text-center text-bold">
                                        Are you sure you want to delete this supplier?
                                    </p>
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">No, back</button>
                                    <button type="submit" class="btn btn-danger">Yes, Delete</button>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            @else
                <h3 class="text-center">
                    No Suppliers Yet
                </h3>
            @endif
        </div>

    </card>
    </div>
        <div class="col-md-4">
        @include('includes.authsidebar')
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
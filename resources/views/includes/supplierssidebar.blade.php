<card class="card-default w-100 tamasidebar">
    <div class="card-header">
        Manufacturers
    </div>
    <div class="card-body">
        <ul class="list-group">
            @foreach($suppliers as $supplier)

                <li class="list-group-item">
                    <div class="d-flex justify-content-between align-items-baseline">
                        {{$supplier->name}}
                        <div class="d-flex justify-content-end">
                            <div class="pr-2">
                                <a href="{{ route('suppliers.edit', $supplier->id) }}" class="btn btn-info btn-sm">
                                    Edit
                                </a>
                            </div>
                            <button class="btn btn-danger btn-sm" onclick="handleDelete({{ $supplier->id }})">Delete
                            </button>
                        </div>
                    </div>
                </li>
            @endforeach
        </ul>
        <!-- Modal -->
        <div class="modal fade" id="deleteModel" tabindex="-1" role="dialog" aria-labelledby="deleteModalLabel"
             aria-hidden="true">
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
    </div>
</card>

{{--
TODO: ADD FUCTIONALITY TO CUT OFF SUPPLIER NAME AFTER A CERTIAN AMOUNT OF CHARACTERS
--}}


@extends('layouts.app')
@section('title')
    <title>Suppliers - Team Tama Sports</title>
    @endsection
@section('content')
  {{--  <div class="container">
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
        </div>
    </div>
--}}
  <div class="container">

      <div class="row">

          @include('includes.tagssidebar')

          <div class="col-lg-8 col-md-8 col-sm-12 col-xs-12">
              <div class="text-center pt-4">
                  <h1>Suppliers</h1>
              </div>
           {{--   <div id="carouselExampleIndicators" class="carousel slide my-4" data-ride="carousel">
                  <ol class="carousel-indicators">
                      <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
                      <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
                  </ol>
                  <div class="carousel-inner" role="listbox">
                      <div class="carousel-item active">
                          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="First slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Second slide">
                      </div>
                      <div class="carousel-item">
                          <img class="d-block img-fluid" src="http://placehold.it/900x350" alt="Third slide">
                      </div>
                  </div>
                  <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
                      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                      <span class="sr-only">Previous</span>
                  </a>
                  <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
                      <span class="carousel-control-next-icon" aria-hidden="true"></span>
                      <span class="sr-only">Next</span>
                  </a>
              </div>
              --}}

              <div class="row pt-3">

                  @foreach ($suppliers as $supplier)
                      <div class="col-lg-4 col-md-6 mb-4">
                          <div class="card h-100 w-100">
                              <div class="card-head">
                                  <h5 class="card-title text-center pt-3 pb-1">
                                      <a href="{{ route('supplier', $supplier->id) }}">{{ $supplier->name }}</a>
                                  </h5>
                              </div>
                          </div>
                      </div>
                  @endforeach


              </div>
              <!-- /.row -->

          </div>
          <!-- /.col-lg-9 -->

      </div>
      <!-- /.row -->

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

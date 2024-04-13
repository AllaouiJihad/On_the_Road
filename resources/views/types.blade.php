@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Les Types de voyage</h3>
                </div>
                @if (session('success'))
                <div class="alert alert-success">
                    {{ session('success') }}
                </div>
            @endif


                <button type="button" class="btn btn-primary " data-toggle="modal" data-target="#addModal">
                    Ajouter Type
                </button>
                <!-- Modal -->
                <div class="modal fade" id="addModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
                    aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Ajouter Type de voyage</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            <form action="{{ route('add.type') }}" method="POST">
                                @csrf
                                <div class="modal-body">

                                    <div class="form-group">
                                        <label for="type"><i class="fa-solid fa-suitcase-rolling"></i>
                                            Type :</label>
                                        <input type="text" name="type" class="form-control " id="type"
                                            placeholder="Type Name" />

                                    </div>

                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" class="btn btn-primary">Add</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
               

                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">type</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($types as $type)
                                <tr>
                                    <td class="txt-oflo">{{ $type->id }}</td>
                                    <td class="txt-oflo">{{ $type->type }}</td>
                                    <td class="d-flex">

                                        <button type="button" class="border-0 bg-transparent" data-toggle="modal"
                                            data-target="#deleteModal{{ $type->id }}">
                                            <i class="fa-solid fa-trash" style="color: #f46d6d;"></i>
                                        </button>

                                        <button type="button" data-toggle="modal"
                                            data-target="#exampleModal{{ $type->id }}" class="border-0 bg-transparent">
                                            <i class="fa-solid fa-pen" style="color: #407cdd;"></i>
                                        </button>
                                    </td>


                                </tr>


                                <!-- update Modal -->
                                <div class="modal fade" id="exampleModal{{ $type->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update type</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('update.type', $type->id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    @error('type')
                                                        <div class="alert alert-danger "> {{ $message }}</div>
                                                    @enderror
                                                    <div class="form-group">
                                                        <label for="name"><i class="fa-solid fa-suitcase-rolling"></i>
                                                            Type:</label>
                                                        <input type="text" name="type" class="form-control "
                                                            id="name" placeholder="Type Name"
                                                            value="{{ $type->type }}" />

                                                    </div>




                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <button type="submit" class="btn btn-primary">Save changes</button>
                                            </div>
                                            </form>

                                        </div>
                                    </div>
                                </div>

                                <!-- end update modal -->

                                <!-- delete Modal -->
                                <div class="modal fade" id="deleteModal{{ $type->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete type</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <form action="{{ route('delete.type', $type->id) }}" method="POST">
                                                    @csrf
                                                    @method('delete')
                                                    <button type="submit" class="btn btn-danger">Delete</button>

                                                </form>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            @endforeach


                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Les Guides</h3>
                </div>





                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif

                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">nom</th>
                                <th class="border-top-0">email</th>
                                <th class="border-top-0">telephone</th>
                                <th class="border-top-0">Specialty</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($guides as $guide)
                                <tr>
                                    <td class="txt-oflo">{{ $guide->user->name }}</td>
                                    <td class="txt-oflo">{{ $guide->user->email }}</td>
                                    <td class="txt-oflo">{{ $guide->user->tel }}</td>

                                    <td class="txt-oflo">{{ $guide->specialty }}</td>
                                    <td class="d-flex">

                                        <button type="button" class="border-0 bg-transparent" data-toggle="modal"
                                            data-target="#deleteModal{{ $guide->user_id }}">
                                            <i class="fa-solid fa-trash" style="color: #f46d6d;"></i>
                                        </button>

                                        <button type="button" data-toggle="modal"
                                            data-target="#exampleModal{{ $guide->user_id }}"
                                            class="border-0 bg-transparent">
                                            <i class="fa-solid fa-pen" style="color: #407cdd;"></i>
                                        </button>
                                    </td>


                                </tr>


                                <!-- update Modal -->
                                <div class="modal fade" id="exampleModal{{ $guide->user_id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update guide</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="{{ route('update.guide', $guide->user_id) }}" method="POST">
                                                    @csrf
                                                    @method('PUT')
                                                    @error('name')
                                                        <div class="alert alert-danger "> {{ $message }}</div>
                                                    @enderror
                                                    <div class="form-group">
                                                        <label for="name"><i class="fa-solid fa-user"> </i>
                                                            Name:</label>
                                                        <input type="text" name="name" class="form-control "
                                                            id="name" placeholder="Your Name"
                                                            value="{{ $guide->user->name }}" />

                                                    </div>


                                                    @error('email')
                                                        <div class="alert alert-danger "> {{ $message }}</div>
                                                    @enderror
                                                    <div class="form-group">
                                                        <label for="email"><i class="fa-solid fa-envelope"> </i>
                                                            Email:</label>
                                                        <input type="text" class="form-control " name="email"
                                                            id="email" placeholder="Your Email"
                                                            value="{{ $guide->user->email }}" />

                                                    </div>

                                                    @error('tel')
                                                        <div class="alert alert-danger "> {{ $message }}</div>
                                                    @enderror
                                                    <div class="form-group">
                                                        <label for="re-pass"><i class="fa-solid fa-phone"> </i>
                                                            Telephone:</label>
                                                        <input type="text" class="form-control " name="tel"
                                                            id="re_pass" placeholder="Your phone"
                                                            value="{{ $guide->user->tel }}" />

                                                    </div>


                                                    @error('specialty')
                                                        <div class="alert alert-danger "> {{ $message }}</div>
                                                    @enderror
                                                    <div class="form-group">
                                                        <label for="specialty"><i class="fa-solid fa-suitcase"> </i>
                                                            Specialty:</label>
                                                        <input type="text" class="form-control " name="specialty"
                                                            id="email" placeholder="Your specialty"
                                                            value="{{ $guide->specialty }}" />

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
                                <div class="modal fade" id="deleteModal{{ $guide->user_id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete Guide</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <form action="{{ route('delete.guide',$guide->user_id) }}" method="POST">
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

@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Les Voyages</h3>
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
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">titre</th>
                                <th class="border-top-0">date_depart</th>
                                <th class="border-top-0">prix</th>
                                <th class="border-top-0">nbr_places</th>
                                <th class="border-top-0">region</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>

                            @foreach ($voyages as $voyage)
                                <tr>
                                    <td class="txt-oflo">{{ $voyage->id }}</td>
                                    <td class="txt-oflo">{{ $voyage->titre }}</td>
                                    <td class="txt-oflo">{{ $voyage->date_depart }}</td>
                                    <td class="txt-oflo">{{ $voyage->prix }}</td>
                                    <td class="txt-oflo">{{ $voyage->nbr_places }}</td>
                                    <td class="txt-oflo">{{ $voyage->region }}</td>
                                    <td class="d-flex">

                                        <button type="button" class="border-0 bg-transparent" data-toggle="modal"
                                            data-target="#deleteModal{{ $voyage->id }}">
                                            <i class="fa-solid fa-trash" style="color: #f46d6d;"></i>
                                        </button>

                                        <button type="button" data-toggle="modal"
                                            data-target="#exampleModal{{ $voyage->id }}" class="border-0 bg-transparent">
                                            <i class="fa-solid fa-pen" style="color: #407cdd;"></i>
                                        </button>
                                    </td>


                                </tr>


                                <!-- update Modal -->
                                <div class="modal fade" id="exampleModal{{ $voyage->id }}" tabindex="-1" role="dialog"
                                    aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Update voyage</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <form action="{{ route('update.voyage', $voyage->id) }}" method="POST">
                                                @csrf
                                                @method('PUT')
                                            <div class="modal-body">
                                                <div class="form-group">
                                                    <label for="form-control">Titre</label>
                                                    <input type="text" name="titre" class="form-control" placeholder="Name"
                                                        value="{{ $voyage->titre }}">
                                                </div>
                
                
                                                <div class="form-group">
                                                    <label for="form-control">Destination</label>
                                                    <select name="destination" id="destination" class="form-control">
                                                        <option value="{{$voyage->destination->id}}"> {{$voyage->destination->destination}} </option>
                                                        @foreach ($destinations as $destination)
                                                            <option value="{{ $destination->id }}">{{ $destination->destination }}
                                                            </option>
                                                        @endforeach
                
                                                    </select>
                                                </div>
                
                
                                                <div class="form-group">
                                                    <label for="">description</label>
                                                    <textarea name="description" type="text" class="form-control"> {{ $voyage->description }}</textarea>
                                                </div>
                
                
                                                <div class="form-group">
                                                    <label for="">date Depart</label>
                                                    <input name="date_depart" type="date" class="form-control" placeholder="Phone number"
                                                        value="{{ $voyage->date_depart }}">
                                                </div>
                
                
                                                <div class="form-group">
                                                    <label for="">date Reteur</label>
                                                    <input name="date_reteur" type="date" class="form-control" placeholder="Phone number"
                                                        value="{{ $voyage->date_reteur }}">
                                                </div>
                
                
                                                <div class="form-group">
                                                    <label for="">Prix</label>
                                                    <input name="prix" type="number" class="form-control" placeholder="Street address"
                                                        value="{{ $voyage->prix }}">
                                                </div>
                
                
                                                <div class="form-group">
                                                    <label for="">nombre de places</label>
                                                    <input type="number" name="nbr_places" value="{{ $voyage->nbr_places }}"
                                                        class="form-control" placeholder="Street address">
                                                </div>
                
                
                                                <div class="form-group">
                                                    <label for="form-control">Region</label>
                                                    <select name="region" id="region" class="form-control">
                                                        <option value="{{$voyage->region}}"> {{$voyage->region}} </option>
                                                        <option value="Tanger-Tétouan-Al Hoceïma">Tanger-Tétouan-Al Hoceïma</option>
                                                        <option value="L'Oriental">L'Oriental</option>
                                                        <option value="Fès-Meknès">Fès-Meknès</option>
                                                        <option value="Rabat-Salé-Kénitra">Rabat-Salé-Kénitra</option>
                                                        <option value="Béni Mellal-Khénifra">Béni Mellal-Khénifra</option>
                                                        <option value="Marrakech-Safi">Marrakech-Safi</option>
                                                        <option value="Drâa-Tafilalet">Drâa-Tafilalet</option>
                                                        <option value="Souss-Massa">Souss-Massa</option>
                                                        <option value="Guelmim-Oued Noun">Guelmim-Oued Noun</option>
                                                        <option value="Laâyoune-Sakia El Hamra">Laâyoune-Sakia El Hamra</option>
                                                        <option value="Dakhla-Oued Ed-Dahab">Dakhla-Oued Ed-Dahab</option>
                                                        <option value="Casablanca-Settat">Casablanca-Settat</option>
                                                    </select>
                
                                                </div>
                
                
                                                <div class="form-group">
                                                    <label for="form-control">Defecult</label>
                                                    <select name="defecult" id="defecult" class="form-control">
                                                        <option value="{{$voyage->defecult}}"> {{$voyage->defecult}} </option>
                                                        <option value="Facile">Facile</option>
                                                        <option value="Moyen">Moyen</option>
                                                        <option value="Soutenu">Soutenu</option>
                                                    </select>
                
                                                </div>
                
                
                                                <div class="form-group">
                                                    <label for="form-control">Type</label>
                                                    <select name="type" id="type" class="form-control">
                                                        <option value="{{$voyage->type->id}}"> {{$voyage->type->type}} </option>
                                                        @foreach ($types as $type)
                                                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                                                        @endforeach
                                                    </select>
                
                                                </div>
                
                
                                                <div class="form-group">
                                                    <label for="form-control">category</label>
                                                    <select name="category" id="category" class="form-control">
                                                        <option value="{{$voyage->category->id}}"> {{$voyage->category->category}} </option>
                                                        @foreach ($categories as $category)
                                                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                                                        @endforeach
                                                    </select>
                
                                                </div>
                
                                                {{-- <div class="form-group">
                                                    <label for="form-control">Guide</label>
                                                    <select name="guide" id="guide" class="form-control">
                                                        <option value="">--Please choose an option--</option>
                                                        @foreach ($guides as $guide)
                                                            <option value="{{$guide->id}}">{{$guide->user->name}}</option>
                                                        @endforeach
                                                    </select>
                
                                                </div> --}}
                
                
                                                <div class="form-group">
                                                    <label for="">Impact</label>
                                                    <textarea name="impact" type="text" class="form-control"> {{ $voyage->impact }}</textarea>
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
                                <div class="modal fade" id="deleteModal{{ $voyage->id }}" tabindex="-1"
                                    role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                    <div class="modal-dialog" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h5 class="modal-title" id="exampleModalLabel">Delete voyage</h5>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>

                                            <div class="modal-footer">

                                                <button type="button" class="btn btn-secondary"
                                                    data-dismiss="modal">Close</button>
                                                <form action="{{ route('delete.voyage', $voyage->id) }}" method="POST">
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

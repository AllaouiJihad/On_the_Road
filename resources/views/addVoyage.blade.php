@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <!-- JQUERY STEP -->
                <div class="wrapper">
                    <h2>Ajouter un voyage :</h2>
                    <form action="{{ route('addVoyage') }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div id="wizard">
                            <!-- SECTION 1 -->
                            <h4></h4>
                            <section>

                                @if (session('success'))
                                    <div class="alert alert-success">
                                        {{ session('success') }}
                                    </div>
                                @endif


                                <div class="form-group">
                                    <label for="form-control">Titre</label>
                                    <input type="text" name="titre" class="form-control" placeholder="Name"
                                        value="{{ old('titre') }}">
                                </div>
                                @error('titre')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="form-control">Destination</label>
                                    <select name="destination" id="destination" class="form-control">
                                        <option value="">--Please choose an option--</option>
                                        @foreach ($destinations as $destination)
                                            <option value="{{ $destination->id }}">{{ $destination->destination }}
                                            </option>
                                        @endforeach

                                    </select>
                                </div>
                                @error('destination')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="">description</label>
                                    <textarea name="description" type="text" class="form-control"> {{ old('description') }}</textarea>
                                </div>
                                @error('description')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="">date Depart</label>
                                    <input name="date_depart" type="date" class="form-control" placeholder="Phone number"
                                        value="{{ old('date_depart') }}">
                                </div>
                                @error('date_depart')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="">date Reteur</label>
                                    <input name="date_reteur" type="date" class="form-control" placeholder="Phone number"
                                        value="{{ old('date_reteur') }}">
                                </div>
                                @error('date_reteur')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="">Prix</label>
                                    <input name="prix" type="number" class="form-control" placeholder="Street address"
                                        value="{{ old('prix') }}">
                                </div>
                                @error('prix')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="">nombre de places</label>
                                    <input type="number" name="nbr_places" value="{{ old('nbr_places') }}"
                                        class="form-control" placeholder="Street address">
                                </div>
                                @error('nbr_places')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="form-control">Region</label>
                                    <select name="region" id="region" class="form-control">
                                        <option value="">--Please choose an option--</option>
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
                                @error('region')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="form-control">Defecult</label>
                                    <select name="defecult" id="defecult" class="form-control">
                                        <option value="">--Please choose an option--</option>
                                        <option value="Facile">Facile</option>
                                        <option value="Moyen">Moyen</option>
                                        <option value="Soutenu">Soutenu</option>
                                    </select>

                                </div>
                                @error('defecult')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="form-control">Type</label>
                                    <select name="type" id="type" class="form-control">
                                        <option value="">--Please choose an option--</option>
                                        @foreach ($types as $type)
                                            <option value="{{ $type->id }}">{{ $type->type }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                @error('type')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="form-control">category</label>
                                    <select name="category" id="category" class="form-control">
                                        <option value="">--Please choose an option--</option>
                                        @foreach ($categories as $category)
                                            <option value="{{ $category->id }}">{{ $category->category }}</option>
                                        @endforeach
                                    </select>

                                </div>
                                @error('category')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror

                                <div class="form-group">
                                    <label for="form-control">Guide</label>
                                    <select name="guide" id="guide" class="form-control">
                                        <option value="">--Please choose an option--</option>
                                        @foreach ($guides as $guide)
                                            <option value="{{$guide->id}}">{{$guide->user->name}}</option>
                                        @endforeach
                                    </select>

                                </div>
                                @error('guide')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="form-group">
                                    <label for="">Impact</label>
                                    <textarea name="impact" type="text" class="form-control"> {{ old('impact') }}</textarea>
                                </div>
                                @error('impact')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror

                                <div class="mb-3">
                                    <label for="media" class="form-label">Choose an image</label>
                                    <input type="file" class="form-control" id="media" name="media"
                                        aria-label="file example">
                                    <div class="invalid-feedback">Example invalid form file feedback</div>
                                </div>
                                @error('media')
                                    <div class="alert alert-danger"> {{ $message }}</div>
                                @enderror


                                <div class="mb-3">
                                    <button type="submit">submit</button>
                                </div>

                            </section> <!-- SECTION 2 -->


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

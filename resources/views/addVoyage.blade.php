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
                                    <input type="text" name="destination" class="form-control" placeholder="destination"
                                        value="{{ old('destination') }}">
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

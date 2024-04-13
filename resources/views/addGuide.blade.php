@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">

                <!-- JQUERY STEP -->
                <div class="wrapper">
                    <h2>Ajouter un guide :</h2>
                    <form action="{{ route('addGuide') }}" method="POST" enctype="multipart/form-data">
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

                                @error('name')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="name"><i class="fa-solid fa-user">  </i> Name:</label>
                                    <input type="text" name="name" class="form-control w-25" id="name"
                                        placeholder="Your Name" value="{{ old('name') }}" />

                                </div>
                                

                                @error('email')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="email"><i class="fa-solid fa-envelope">  </i> Email:</label>
                                    <input type="text" class="form-control w-25" name="email" id="email"
                                        placeholder="Your Email" value="{{ old('email') }}" />

                                </div>
                                
                                @error('tel')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="re-pass"><i class="fa-solid fa-phone">  </i> Telephone:</label>
                                    <input type="text" class="form-control w-25" name="tel" id="re_pass"
                                        placeholder="Your phone" value="{{ old('tel') }}" />

                                </div>
                                

                                @error('specialty')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="specialty"><i class="fa-solid fa-suitcase">  </i> Region:</label>

                                        <select name="region" id="region" class="form-control w-25">
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
                                
                                @error('password')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group">
                                    <label for="pass"><i class="fa-solid fa-lock">  </i> Password:</label>
                                    <input class="form-control w-25" type="password" name="password" id="pass"
                                        placeholder="Password" value="{{ old('password') }}" />

                                </div>

                                @error('media')
                                    <div class="alert alert-danger w-25"> {{ $message }}</div>
                                @enderror
                                <div class="form-group w-25">
                                    <label for="media" class="form-label">Choose an image</label>
                                    <input type="file" class="form-control" id="media" name="media"
                                        aria-label="file example">

                                </div>

                                <div class="mb-3  ">
                                    <button class="btn btn-primary" type="submit">submit</button>

                                </div>
                            </section> <!-- SECTION 2 -->


                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection

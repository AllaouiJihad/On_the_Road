<div class="row bottom-ab-grids" id="search_result">
    <!--/row-grids-->

    @foreach ($voyages as $voyage)
        <div class="col-lg-6 subject-card mt-lg-0 mt-4">
            <div class="subject-card-header p-4">
                <a href="{{ route('voyage.details', $voyage->id) }}" class="card_title p-lg-4d-block">
                    <div class="row align-items-center">
                        <div class="col-sm-5 subject-img">
                            <img src="{{ asset('storage/' . $voyage->media) }}" alt="Nom de l'image"
                                class="img-fluid">
                        </div>
                        <div class="col-sm-7 subject-content mt-sm-0 mt-4">
                            <h4>{{ $voyage->titre }}</h4>
                            <p> {{ \Carbon\Carbon::parse($voyage->date_depart)->format('M j') }},
                                {{ \Carbon\Carbon::parse($voyage->date_reteur)->format('M j') }} </p>
                            <div class="dst-btm">
                                <h6 class=""> Price </h6>
                                <span> {{ $voyage->prix }} DH </span>
                            </div>
                            <p class="sub-para">Per person on twin sharing</p>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    @endforeach


</div>

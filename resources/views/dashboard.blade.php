@extends('layouts.main')
@section('content')
    <div class="row">
        <div class="col-md-12 col-lg-12 col-sm-12">
            <div class="white-box">
                <div class="d-md-flex mb-3">
                    <h3 class="box-title mb-0">Les voyages</h3>
                </div>


                




                <div class="table-responsive">
                    <table class="table no-wrap">
                        <thead>
                            <tr>
                                <th class="border-top-0">#</th>
                                <th class="border-top-0">Title</th>
                                <th class="border-top-0">date de creation</th>
                                <th class="border-top-0">date d'événements</th>
                                <th class="border-top-0">fondateur</th>
                                <th>action</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($events as $event) --}}
                                <tr>
                                    {{-- <td>{{ $event->id }}</td>
                                    <td class="txt-oflo">{{ $event->title }}</td>
                                    <td class="txt-oflo">{{ $event->created_at->format('d-m-y') }}</td>
                                    <td class="txt-oflo">{{ $event->date }}</td>
                                    <td class="txt-oflo">{{ $event->user->name }}</td>
                                    <td>
                                        <form method="POST" action="{{ route('accept.event',$event->id) }}">
                                            @csrf
                                            @method('PUT')
                                            <button type="submit"><i class="fa-solid fa-check"
                                                    style="color: #4c9a82;"></i></button>

                                        </form>
                                    </td> --}}


                                </tr>
                            {{-- @endforeach --}}

                            <!-- Modal add tag -->
                            {{-- <div class="modal fade" id="edit<?php ?>" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                        <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLongTitle">Modifier Tag</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                        
                            
                            
                            <form method="post" >
                                <div class="form-group">
                                    <input type="hidden" name="id" value="">
                                    <label >Tag name</label>
                                    <input class="form-control" type="text" value="" name="name" required>
                                    
                                </div>
                                <div class="form-group">
                                    <label >description</label>
                                    <input class="form-control" type="text" value="" name="description" required>
                                    
                                </div>
                                
                                
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                                    <button type="submit" name="submit" value="modifier" class="btn btn-save">modifier</button>
                                </div>

                            </form>
                            
                        
                        </div>
                        
                        </div>
                    </div>
                    </div>
                       --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection

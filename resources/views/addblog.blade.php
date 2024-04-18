@extends('layouts.app')
@section('content')
    <!-- about breadcrumb -->


    @if (session('error'))
        <script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'Erreur!',
                    text: "{{ session('error') }}",
                });
            });
        </script>
    @endif
    <section class="w3l-about-breadcrumb text-left">
        <div class="breadcrumb-bg breadcrumb-bg-about py-sm-5 py-4">
            <div class="container py-2">
                <h2 class="title">Blog</h2>
                <ul class="breadcrumbs-custom-path mt-2">
                    <li><a href="/">Home</a></li>
                    <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Blog </li>
                </ul>
            </div>
        </div>
    </section>
    <!-- //about breadcrumb -->
    <!-- contact-form -->
    <section class="w3l-contact" id="contact">
        <div class="contact-infubd py-5">
            <div class="container py-lg-3">
                <div style="margin: 8px auto; display: block; text-align:center;">

                    <!---728x90--->


                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div class="contact-grids row">

                    <div class="col-lg mt-lg-0 mt-5 contact-right">
                        <form action="{{ route('add.blog') }}" method="POST"class="signin-form">
                            @csrf
                            <div class="input-grids">
                                <div class="form-group">
                                    <input type="text" name="title" id="w3lName" placeholder="Titre*"
                                        class="contact-input" />
                                </div>
                                <div class="mb-3">
                                    <label for="media" class="form-label">Choose an image</label>
                                    <input type="file" id="media" name="media" aria-label="file example">
                                    <div class="invalid-feedback">Example invalid form file feedback</div>
                                </div>
                            </div>
                            <div class="form-group">
                                <textarea name="content" id="message" placeholder="Type your article here*" required=""></textarea>
                            </div>
                            <div class="text-right">
                                <button type="submit" class="btn btn-style btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>

                </div>

            </div>
    </section>
    <!-- /contact-form -->
    <div style="margin: 8px auto; display: block; text-align:center;">

        <!---728x90--->

    </div>
@endsection

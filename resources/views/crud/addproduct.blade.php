@extends('layouts.main')
@section('content')

<div  class="d-flex justify-content-end">
    <a href="{{route("view_product")}}" class="btn btn-primary" >View Product</a>
</div>

    <main class="my-cart my-5">
        <div class="my-account-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="myaccount-page-wrapper">
                            <div class="row">
                                <div class="col-lg-9 col-md-8 acc-tab-content-start">
                                    <div class="tab-content" id="myaccountContent">
                                        <h1 class="text">Add Job</h1>

                                        @if (session('success'))
                                            <div class="alert alert-success">
                                                {{ session('success') }}
                                            </div>
                                        @endif

                                        <!-- Error Message -->
                                        @if (session('error'))
                                            <div class="alert alert-danger">
                                                {{ session('error') }}
                                            </div>
                                        @endif

                                        @if ($errors->any())
                                            <div class="alert alert-danger">
                                                <ul>
                                                    @foreach ($errors->all() as $error)
                                                        <li>{{ $error }}</li>
                                                    @endforeach
                                                </ul>
                                            </div>
                                        @endif

                                        <form class=" text" method="POST" action="{{ route('add_product.store') }}" enctype="multipart/form-data">
                                            @csrf

                                            <div class="mb-3">
                                                <label for="job_title" class="form-label">Job Title</label>
                                                <input type="text" name="job_title" id="job_title"
                                                    class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label for="feature_job" class="form-label">Feature Job</label>
                                                <select name="feature_job" id="feature_job" class="form-control"
                                                required>
                                                {{-- <option value="" disabled selected>Select Category</option> --}}
                                                <option value="1">Yes</option>
                                                <option value="0">No</option>
                                                <!-- Add more categories as needed -->
                                            </select>
                                        </div>

                                        <div class="mb-3">
                                            <label for="categery" class="form-label">categery</label>
                                            <select name="categery" id="categery" class="form-control"
                                                required>
                                                {{-- <option value="" disabled selected>Select Category</option> --}}
                                                <option disabled selected>Select Categery</option>
                                                <option>Backend Developnment</option>
                                                <option>frontend Developnment</option>
                                                <option>full stack Developnment</option>
                                                <option>SEO Marketing</option>
                                                <option>Content Writer</option>
                                                <option>Graphic Designer</option>
                                                <option>Word Press</option>
                                            </select>
                                        </div>

                                            <div class="mb-3">
                                                <label for="salary" class="form-label">Salary</label>
                                                <input type="number" name="salary" id="salary" class="form-control">
                                            </div>

                                            <div class="mb-3">
                                                <label for="description" class="form-label">Job Description</label>
                                                <textarea id="description" name="description" class="form-control" placeholder="Write something.."></textarea>
                                            </div>

                                            <div class="mb-3">
                                                <label for="image" class="form-label">Company Image</label>
                                                <input type="file" name="image" id="image" class="form-control">
                                            </div>
                                            <button type="submit" class="btn btn-primary">Submit</button>
                                            
                                        </form>


                                    </div>
                                </div> <!-- My Account Tab Content End -->
                            </div>
                        </div> <!-- My Account Page End -->
                    </div>
                </div>
            </div>
        </div>
        <!-- my account wrapper end -->


        <!-- main content end -->
    </main>


@endsection
    <script type="text/javascript">
        $(document).on('click', ".btn1", function(e) {
            // alert('it works');
            $('.loginForm').submit();
        });


        if ($('#summary-ckeditor').length != 0) {
            CKEDITOR.replace('summary-ckeditor');
        }
    </script>


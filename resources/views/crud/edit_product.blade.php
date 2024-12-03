@extends('layouts.main')
@section('content')

    <main class="my-cart my-5">
        <div class="my-account-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="myaccount-page-wrapper">
                            <div class="row">
                                <div class="col-lg-9 col-md-8 acc-tab-content-start">
                                    <div class="tab-content" id="myaccountContent">
                                        <h1 class="text">Edit Products</h1>

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
                                        
                                        @foreach ($job as $job)
                                            <form class="text" action="{{ route('update_product', $job->id) }}"
                                                method="POST" enctype="multipart/form-data">
                                                @csrf
                                                <div class="mb-3">
                                                    <label for="job_title" class="form-label">Job Title</label>
                                                    <input type="text" name="job_title" id="job_title"
                                                        class="form-control" value="{{ $job->job_title }}" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="feature_job" class="form-label">Feature Job</label>
                                                    <select name="feature_job" id="feature_job" class="form-control"
                                                        required>
                                                        <option value="1"
                                                            {{ $job->feature_job == 1 ? 'selected' : '' }}>Yes</option>
                                                        <option value="0"
                                                            {{ $job->feature_job == 0 ? 'selected' : '' }}>No</option>
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="categery" class="form-label">categery</label>
                                                    <select name="categery" id="categery" class="form-control" required>
                                                        {{-- <option value="" disabled selected>Select Category</option> --}}
                                                        <option disabled selected>Select Categery</option>
                                                        <option>Backend Developnment</option>
                                                        <option>frontend Developnment</option>
                                                        <option>full stack Developnment</option>
                                                        <option>SEO Marketing</option>
                                                        <option>Content Writer</option>
                                                        <option>Graphic Designer</option>
                                                        <option>Word Press</option>
                                                        <!-- Add more categories as needed -->
                                                    </select>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="salary" class="form-label">Salary</label>
                                                    <input type="number" name="salary" id="salary" class="form-control"
                                                        value="{{ $job->salary }}" min="0" required>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="description" class="form-label">Product Description</label>
                                                    <textarea name="description" id="description" class="form-control" required>{{ $job->description }}</textarea>
                                                </div>

                                                <div class="mb-3">
                                                    <label for="image" class="form-label">Product Image</label>
                                                    <input type="file" name="image" id="image"
                                                        class="form-control">
                                                    @if ($job->image)
                                                        <img src="{{ asset($job->image) }}" alt=""
                                                            style="width: 100px; height: auto; padding-top: 8px">
                                                    @endif
                                                </div>

                                                <button type="submit" class="btn btn-primary">Update Product</button>
                                            </form>
                                        @endforeach


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
    @if (session('error'))
        <script>
            alert('{{ session('error') }}')
        </script>
    @endif

    @if (session('success'))
        <script>
            alert('{{ session('success') }}')
        </script>
    @endif

@endsection
<script type="text/javascript">
    $(document).on('click', ".btn1", function(e) {
        // alert('it works');
        $('.loginForm').submit();
    });

    if ($('#summary-ckeditor').length != 0) {
        CKEDITOR.replace('summary-ckeditor');
    }


    document.addEventListener('DOMContentLoaded', function() {
        // Add event listeners to all delete buttons
        document.querySelectorAll('.delete-image').forEach(button => {
            button.addEventListener('click', function() {
                const imageId = this.dataset.imageId;

                if (confirm('Are you sure you want to delete this image?')) {
                    // Make an AJAX call to delete the image from the server
                    fetch(`/delete-image/${imageId}`, {
                            method: 'get',
                            headers: {
                                'X-CSRF-TOKEN': '{{ csrf_token() }}'
                            }
                        })
                        .then(response => response.json())
                        .then(data => {
                            if (data.success) {
                                // Remove the image container from the DOM
                                this.parentElement.remove();
                            } else {
                                alert('Failed to delete image.');
                            }
                        })
                        .catch(error => {
                            console.error('Error:', error);
                            alert('Failed to delete image.');
                        });
                }
            });
        });
    });
</script>




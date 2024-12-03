@extends('layouts.main')
@section('title', 'Order')
@section('content')

    <?php $segment = Request::segments(); ?>


    <section class="banner">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="banner-wrapper inner-banner-wrapper">
                        <div class="row justify-content-center">
                            <div class="col-lg-10">
                                <div class="section-heading text-center">
                                    <h1>Your Apply Job</h1>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>


    <main class="my-cart">

        <!-- my account wrapper start -->
        <div class="my-account-wrapper">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        <!-- My Account Page Start -->
                        <div class="myaccount-page-wrapper">
                            <!-- My Account Tab Menu Start -->
                            <div class="row">
                                @include('account.sidebar')
                                <!-- My Account Tab Menu End -->

                                <!-- My Account Tab Content Start -->
                                <div class="col-lg-9 col-md-8">
                                    <div class="tab-content" id="myaccountContent">

                                        <!-- Single Tab Content Start -->
                                        <div class="tab-pane fade show active" id="orders" role="#">
                                            <div class="myaccount-content">
                                                <div class="section-heading">
                                                    <h2>History</h2>
                                                </div>
                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th>Email</th>
                                                                {{-- <th>Company Name</th> --}}
                                                                <th>Skill</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>

                                                            @if ($job)
                                                                @foreach ($job as  $index => $val)
                                                                    {{-- @dd($job) --}}
                                                                    {{-- @foreach ($post_job as $post) --}}
                                                                    <tr>
                                                                        <td>{{ $index + 1 }}</td>
                                                                        <td>{{ $val->user->email }}</td>
                                                                        {{-- <td>{{ $val->job->company_name }}</td> --}}
                                                                        <td>{{ $val->job->job_title }}</td>
                                                                        <td>{{ date('d F, Y h:i a', strtotime($val->created_at)) }}
                                                                        </td>
                                                                        <td>
                                                                            @if($val->status === 'approved')
                                                                            {{-- @dd('status') --}}
                                                                                <span class="text-success">Your request was Approved wait for Interview</span>
                                                                            @else
                                                                                <a href="" class="btn btn-primary">Wait for <br> Response</a>
                                                                            @endif
                                                                        </td>
                                                                        
                                                                    </tr>
                                                                @endforeach
                                                            @endif
                                                        </tbody>
                                                    </table>
                                                </div>
                                            </div>
                                        </div>
                                        <!-- Single Tab Content End -->


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
@section('css')
    <style type="text/css">

    </style>
@endsection
@section('js')
    <script type="text/javascript">
        $(document).on('click', ".btn1", function(e) {
            // alert('it works');
            $('.loginForm').submit();
        });
    </script>
@endsection

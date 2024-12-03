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
                                    <h1>Job Applyes</h1>
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
                                                    <h2>Reviews</h2>
                                                </div>

                                                <div class="myaccount-table table-responsive text-center">
                                                    <table class="table table-bordered">
                                                        <thead class="thead-light">
                                                            <tr>
                                                                <th>#</th>
                                                                <th>User Name</th>
                                                                <th>Email</th>
                                                                <th>Skill</th>
                                                                <th>Date</th>
                                                                <th>Status</th>
                                                            </tr>
                                                        </thead>

                                                        <tbody>

                                                            @if ($job)
                                                                @foreach ($job as $index => $a)
                                                                    <tr>
                                                                        <td>{{ $index + 1 }}</td>
                                                                        <td>{{ $a->user->name }}</td>
                                                                        <td>{{ $a->user->email }}</td>
                                                                        <td>{{ $a->job->job_title }}</td>
                                                                        <td>{{ date('d F, Y h:i a', strtotime($a->created_at)) }}
                                                                        </td>
                                                                        <td>            
                                                                            @if ($a->status !== 'approved')
                                                                                <a class="btn btn-primary"
                                                                                    href="{{ route('approvaled', ['id' => $a->id]) }}">Approved
                                                                                </a>
                                                                            @else
                                                                                <span class="text-success">Approved</span>
                                                                                <!-- Show a text instead of the button -->
                                                                            @endif
                                                                            <hr>
                                                                            <form
                                                                                action="{{ route('approval.delete', ['id' => $a->id]) }}"
                                                                                method="POST">
                                                                                @csrf
                                                                                @method('DELETE')
                                                                                <button class="btn btn-danger"
                                                                                    type="submit">Reject</button>
                                                                            </form>
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
{{-- https://www.crazygames.com/game/thief-puzzle --}}

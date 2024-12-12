<?php $segment = Request::segments(); ?>
<div class="header">
    <div class="container">
        <div class="row">
            <div class="col-md-2 col-sm-3 col-xs-12 navbar-light"> <a href="{{ route('home') }}" class="logo"><img
                        src="{{ url('asset/images/logo.png') }}" alt="" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#nav-main"
                    aria-controls="navMain" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>


            </div>
            <div class="col-md-10 col-sm-12 col-xs-12">
                <!-- Nav start -->
                <div class="navbar navbar-expand-lg navbar-light" role="navigation">
                    <div class="collapse navbar-collapse" id="nav-main">
                        <ul class="navbar-nav ms-auto">
                            <li class="nav-item dropdown active"><a href="{{ route('home') }}" class="nav-link">Home
                                    <span class="caret"></span></a>
                                <!-- dropdown start -->
                                <ul class="dropdown-menu">
                                    <li class="active"><a href="index.html" class="nav-link">Home Static Image</a></li>
                                    <li><a href="index2.html" class="nav-link">Home With Map</a>

                                        <ul class="dropdown-menu">
                                            <li class="nav-item"><a href="index.html" class="nav-link">Home Static
                                                    Image</a></li>
                                            <li class="nav-item"><a href="index2.html" class="nav-link">Home With
                                                    Map</a>

                                                <ul class="dropdown-menu">
                                                    <li class="nav-item"><a href="index.html" class="nav-link">Home
                                                            Static Image</a></li>
                                                    <li class="nav-item"><a href="index2.html" class="nav-link">Home
                                                            With Map</a></li>
                                                    <li class="nav-item"><a href="index3.html" class="nav-link">Home
                                                            With Slider</a></li>
                                                </ul>

                                            </li>
                                            <li class="nav-item"><a href="index3.html" class="nav-link">Home With
                                                    Slider</a></li>
                                        </ul>

                                    </li>
                                    <li class="nav-item"><a href="index3.html" class="nav-link">Home With Slider</a>
                                    </li>
                                </ul>
                                <!-- dropdown end -->
                            </li>
                            <li class="nav-item"><a href="about" class="nav-link">About us</a></li>
                            <li class="nav-item dropdown"><a href="#." class="nav-link">Pages <span
                                        class="caret"></span></a>
                                <!-- dropdown start -->
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="about" class="nav-link">About Us</a></li>
                                    <li class="nav-item"><a href="login.html" class="nav-link">Login</a></li>
                                    <li class="nav-item"><a href="register.html" class="nav-link">Register</a></li>
                                    <li class="nav-item"><a href="job-listing.html" class="nav-link">Job Listing</a>
                                    </li>
                                    <li class="nav-item"><a href="job-detail.html" class="nav-link">Job Detail</a></li>
                                    <li class="nav-item"><a href="candidate-listing.html" class="nav-link">Candidate
                                            Listing</a></li>
                                    <li class="nav-item"><a href="candidate-detail.html" class="nav-link">Candidate
                                            Detail</a></li>
                                    <li class="nav-item"><a href="company-detail.html" class="nav-link">Company
                                            Profile</a></li>
                                    <li class="nav-item"><a href="edit-profile.html" class="nav-link">Edit Profile</a>
                                    </li>
                                    <li class="nav-item"><a href="post-job.html" class="nav-link">Post a Job</a></li>
                                    <li class="nav-item"><a href="packages.html" class="nav-link">Packages</a></li>
                                    <li class="nav-item"><a href="faqs.html" class="nav-link">FAQs</a></li>
                                    <li class="nav-item"><a href="404.html" class="nav-link">404 Page</a></li>
                                    <li class="nav-item"><a href="typography.html" class="nav-link">Typography</a>
                                    </li>
                                </ul>
                                <!-- dropdown end -->
                            </li>
                            <li class="nav-item dropdown"><a href="blog.html" class="nav-link">Blog <span
                                        class="caret"></span></a>
                                <!-- dropdown start -->
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="blog.html" class="nav-link">Blog List</a></li>
                                    <li class="nav-item"><a href="blog-detail.html" class="nav-link">Blog Detail</a>
                                    </li>
                                    <li class="nav-item"><a href="blog-grid.html" class="nav-link">Blog Grid</a></li>
                                    <li class="nav-item"><a href="blog-full-width.html" class="nav-link">Blog Grid
                                            Full Width</a></li>
                                </ul>
                                <!-- dropdown end -->
                            </li>
                            <li class="nav-item"><a href="contact" class="nav-link">Contact</a></li>
                            @if (Auth::check())
                                @if (Auth::user()->status == 3)
                                    <li class="nav-item postjob"><a href="javascript:void(0)" class="nav-link" onclick="MaNageR()">Post a
                                            job</a></li>
                                @else
                                    <li class="nav-item postjob"><a href="post_job" class="nav-link">Post a job</a>
                                    </li>
                                @endif
                            @else
                                <li class="nav-item postjob"><a href="javascript:void(0)" class="nav-link" onclick="RaNDoM()">Post a
                                        job</a></li>
                            @endif

                            <li class="nav-item jobseeker"><a href="candidate-listing.html" class="nav-link">Job
                                    Seeker</a></li>
                            <li class="nav-item dropdown userbtn"><a href="" class="nav-link"><img
                                        src="{{ url('asset/images/candidates/01.jpg') }}" alt=""
                                        class="userimg" /></a>
                                <ul class="dropdown-menu">
                                    <li class="nav-item"><a href="account" class="nav-link"><i
                                                class="fa fa-tachometer" aria-hidden="true"></i> Dashboard</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-pencil"
                                                aria-hidden="true"></i> Edit Profilt</a></li>
                                    <li class="nav-item"><a href="#" class="nav-link"><i
                                                class="fa fa-briefcase" aria-hidden="true"></i> My Jobs</a></li>
                                    <li role="separator" class="nav-item divider"></li>
                                    @auth
                                        <form id="logout-form" action="{{ route('signout') }}" method="POST"
                                            style="display: none;">
                                            @csrf
                                        </form>
                                        <li class="nav-item">
                                            <a href="#"
                                                onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                <i class="fa fa-sign-out" aria-hidden="true"></i>Logout
                                            </a>
                                        </li>
                                    @else
                                        <li><a href="{{ route('signin') }}" style="color: black">Sign In</a></li>
                                        <li><a href="{{ route('signup') }}" style="color: black">Sign Up</a></li>
                                    @endauth
                                    {{-- <li class="nav-item"><a href="#" class="nav-link"><i class="fa fa-sign-out" aria-hidden="true"></i> Logout</a></li> --}}
                                </ul>
                            </li>
                        </ul>
                        <!-- Nav collapes end -->
                    </div>
                    <div class="clearfix"></div>
                </div>
                <!-- Nav end -->
            </div>
        </div>
        <!-- row end -->
    </div>
    <!-- Header container end -->
</div>


<script>

    function MaNageR() {
        alert('Only Manager Can Post A Job');
    }

    function RaNDoM() {
            alert('If You want Some Employees And post A Job First Login With The Manager Account');
            // Optionally, redirect to the login page
            window.location.href = "{{ route('signup') }}"; // Redirect to login page
        }
</script>

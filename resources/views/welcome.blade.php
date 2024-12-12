@extends('layouts.main')
@section('content')
    <!-- ============================================================== -->
    <!-- BODY START HERE -->
    <!-- ============================================================== -->
    <div class="searchwrap">

        <div class="container">
            <h3>One million success stories. <span>Start yours today.</span></h3>
            <p>Find 40,000+ Jobs, Employment & Career Opportunities</p>
            <div class="searchbar">

                <form method="post" action="{{ route('searchJobs') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="row">
                        <div class="col-md-6">
                            <input type="text" class="form-control" name="query" placeholder="Job Title" />
                        </div>
                        {{-- <div class="col-md-3">
                                <select class="form-control">
                                <option name="company_name">Select Company</option>
                                <option>Resource Innovations</option>
                                <option>Gecko</option>
                                <option>Creative Force</option>
                                <option>
                                    Lead Engineer - Full Stack (Laravel, Vue, MySQL, MongoDB)</option>
                                <option>
                                    Senior PHP/Laravel Developer</option>
                                <option>Senior Full Stack Software Developer</option> 
                            </select>
                        </div> --}}
                        <div class="col-md-4">
                            <select class="form-control" name="location">
                                <option value="">Location</option>
                                <option>Pakistan</option>
                                <option>Turkey</option>
                                <option>Dubai</option>
                                <option>Goa</option>
                                <option>Germany</option>
                                <option>Thailand</option>
                                <option>America</option>
                                <option>Singapore</option>
                                <!-- <option>52 Muslimabad Karachi</option>
                                <option>Hyderabad Colony 255</option>
                                <option>DHA</option> -->
                            </select>
                        </div>
                        <div class="col-md-2">
                            <input type="submit" class="btn" value="Search Job">
                        </div>
                    </div>
                </form>

            </div>
            <!-- button start -->
            <div class="getstarted">
                <a href="#"><i class="fa fa-briefcase" aria-hidden="true"></i> Post Your Job</a>
                <a href="#"><i class="fa fa-user-o" aria-hidden="true"></i> Search Jobs</a>
            </div>
            <!-- button end -->

        </div>
    </div>
    <!-- Search End -->

    <!-- Top Employers start -->
    <div class="section greybg">
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <div class="subtitle">Here You Can See</div>
                <h3>Top <span>Employers</span></h3>
            </div>
            <!-- title end -->

            <ul class="employerList owl-carousel">
                <!--employer-->
                @foreach ($data as $key => $value)
                    <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a
                            href="#"><img src="{{ $value->image }}" alt="Company Name" /></a></li>
                @endforeach
                <!--employer-->
                {{-- <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo2.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo3.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo4.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo5.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo6.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo7.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo8.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo9.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo10.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo11.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo12.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo12.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo14.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo15.jpg")}}" alt="Company Name" /></a></li>
        <!--employer-->
        <li data-toggle="tooltip" data-placement="top" title="" data-original-title="Company Name"><a href="company-detail.html"><img src="{{url("asset/images/employers/emplogo16.jpg")}}" alt="Company Name" /></a></li> --}}
            </ul>
        </div>
    </div>
    <!-- Top Employers ends -->


    <!-- How it Works start -->
    <div class="section howitwrap">
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <div class="subtitle">Here You Can See</div>
                <h3>How It <span>Works?</span></h3>
            </div>
            <!-- title end -->
            <ul class="howlist row">
                <!--step 1-->
                <li class="col-md-4 col-sm-4">
                    <div class="iconcircle"><i class="fa fa-user" aria-hidden="true"></i></div>
                    <h4>Create An Account</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et
                        dolore magna aliqua.</p>
                </li>
                <!--step 1 end-->

                <!--step 2-->
                <li class="col-md-4 col-sm-4">
                    <div class="iconcircle"><i class="fa fa-black-tie" aria-hidden="true"></i></div>
                    <h4>Search Desired Job</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et
                        dolore magna aliqua.</p>
                </li>
                <!--step 2 end-->

                <!--step 3-->
                <li class="col-md-4 col-sm-4">
                    <div class="iconcircle"><i class="fa fa-file-text" aria-hidden="true"></i></div>
                    <h4>Send Your Resume</h4>
                    <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incidid ut labore et
                        dolore magna aliqua.</p>
                </li>
                <!--step 3 end-->
            </ul>
        </div>
    </div>
    <!-- How it Works Ends -->



    <!-- Popular Searches start -->
    <div class="section greybg">
        <div class="container">
            <div class="topsearchwrap">
                <div class="tabswrap">
                    <div class="row">
                        <div class="col-md-4">
                            <h3>Browse Jobs By</h3>
                        </div>
                        <div class="col-md-8">


                            <ul class="nav nav-tabs" id="myTab" role="tablist">
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link active" id="byfunctional-tab" data-bs-toggle="tab"
                                        data-bs-target="#byfunctional" type="button" role="tab" aria-controls="home"
                                        aria-selected="true">Home</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="bycities-tab" data-bs-toggle="tab"
                                        data-bs-target="#bycities" type="button" role="tab" aria-controls="bycities"
                                        aria-selected="false">Profile</button>
                                </li>
                                <li class="nav-item" role="presentation">
                                    <button class="nav-link" id="byindustries-tab" data-bs-toggle="tab"
                                        data-bs-target="#byindustries" type="button" role="tab" aria-controls="contact"
                                        aria-selected="false">Contact</button>
                                </li>
                            </ul>




                        </div>
                    </div>
                </div>
                <div class="tab-content" id="jobsby">
                    <div class="tab-pane fade show active" id="byfunctional" role="tabpanel"
                        aria-labelledby="byfunctional-tab">
                        <div class="srchbx">
                            <!--Categories start-->

                            <div class="srchint">
                                <ul class="row catelist">
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Business Management">Business
                                            Management <span>(3)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Creative Design">Creative
                                            Design <span>(3)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Admin">Admin
                                            <span>(2)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Web Developer">Web Developer
                                            <span>(2)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#"
                                            title="Database Administration (DBA)">Database Administration (DBA)
                                            <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Advertising">Advertising
                                            <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Bank Operation">Bank Operation
                                            <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Graphic Design">Graphic Design
                                            <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Medicine">Medicine
                                            <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Marketing">Marketing
                                            <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#"
                                            title="Business Systems Analyst">Business Systems Analyst <span>(1)</span></a>
                                    </li>
                                    <li class="col-md-4 col-sm-6"><a href="#"
                                            title="Accounts, Finance &amp; Financial Services">Accounts, Finance &amp;
                                            Financial Services <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#"
                                            title="Software &amp; Web Development">Software &amp; Web Development
                                            <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#"
                                            title="Electronics Technician">Electronics Technician <span>(1)</span></a>
                                    </li>
                                </ul>
                                <!--Categories end-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="bycities" role="tabpanel" aria-labelledby="bycities-tab">
                        <div class="srchbx">
                            <!--Cities start-->

                            <div class="srchint">
                                <ul class="row catelist">
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#"
                                            title="Barrington">Barrington <span>(2)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Durant">Durant
                                            <span>(2)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Bessemer">Bessemer
                                            <span>(2)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Alabaster">Alabaster
                                            <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Milton">Milton
                                            <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#"
                                            title="Clarksville">Clarksville <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#"
                                            title="Kaneohe Station">Kaneohe Station <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Arnold">Arnold
                                            <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="El Dorado">El Dorado
                                            <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Blaine">Blaine
                                            <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Casas Adobes">Casas
                                            Adobes <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Tonga">Tonga
                                            <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Auburn">Auburn
                                            <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#"
                                            title="Bainbridge">Bainbridge <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Aventura">Aventura
                                            <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Canon City">Canon
                                            City <span>(1)</span></a></li>
                                    <li class="col-md-3 col-sm-4 col-xs-6"><a href="#" title="Atlanta">Atlanta
                                            <span>(1)</span></a></li>
                                </ul>
                                <!--Cities end-->
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane fade show" id="byindustries" role="tabpanel"
                        aria-labelledby="byindustries-tab">
                        <div class="srchbx">
                            <!--Categories start-->

                            <div class="srchint">
                                <ul class="row catelist">
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Manufacturing">Manufacturing
                                            <span>(6)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Fashion">Fashion
                                            <span>(2)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Electronics">Electronics
                                            <span>(2)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#"
                                            title="Information Technology">Information Technology <span>(2)</span></a>
                                    </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="AutoMobile">AutoMobile
                                            <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#"
                                            title="Courier/Logistics">Courier/Logistics <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#"
                                            title="Travel/Tourism/Transportation">Travel/Tourism/Transportation
                                            <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#"
                                            title="Banking/Financial Services">Banking/Financial Services
                                            <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#"
                                            title="Education/Training">Education/Training <span>(1)</span></a> </li>
                                    <li class="col-md-4 col-sm-6"><a href="#" title="Health &amp; Fitness">Health
                                            &amp; Fitness <span>(1)</span></a> </li>
                                </ul>
                                <!--Categories end-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Popular Searches ends -->


    <!-- Featured Jobs start -->
    <div class="section">
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <div class="subtitle">Here You Can See</div>
                <h3>Featured <span>Jobs</span></h3>
            </div>
            <!-- title end -->

            <!--Featured Job start-->
            <ul class="jobslist row">
                <!--Job start-->
                @foreach ($post as $key => $value)
                    <li class="col-md-6">
                        <div class="jobint">
                            <div class="row">
                                <div class="col-md-2 col-sm-2"><img src="{{ $value->image }}" alt="Job Name" /></div>
                                <div class="col-md-7 col-sm-7">
                                    <h4><a href="#.">{{ $value->job_title }}</a></h4>
                                    {{-- <div class="company"><a href="#.">Datebase Management Company</a></div> --}}
                                    <div class="jobloc"><label class="fulltime">{{ $value->employment }}</label> -
                                        <span>New York</span>
                                    </div>
                                </div>
                                <div class="col-md-3 col-sm-3">
                                    {{-- @dd(Auth::user()->status == 3) --}}
                                    @if (Auth::check())
                                        @if (Auth::user()->status == 3)
                                            <!-- User is logged in and has role 3, allow them to apply -->
                                            <a href="{{ route('applyJob', ['id' => $value->id]) }}" class="applybtn"
                                                onclick="roleAlert()">Apply
                                                Now</a>
                                        @else
                                        @endif
                                    @else
                                        <!-- User is not logged in -->
                                        <a href="javascript:void(0)" class="applybtn" onclick="showLoginAlert()">Apply
                                            Now</a>
                                    @endif
                                </div>
                                {{-- <input type="submit"
                                                style="color: black; background-color:  rgb(47, 143, 239)"
                                                value="REGISTER" class="btn form-btn form-control my-3"> --}}
                            </div>
                        </div>
                    </li>
                @endforeach
                <!--Job end-->
                <!--Job start-->
                {{-- <li class="col-md-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-2 col-sm-2"><img src="{{url("asset/images/employers/emplogo2.jpg")}}" alt="Job Name" /></div>
              <div class="col-md-7 col-sm-7">
                <h4><a href="#.">Technical Database Engineer</a></h4>
                <div class="company"><a href="#.">Datebase Management Company</a></div>
                <div class="jobloc"><label class="partTime">Part Time</label>   - <span>New York</span></div>
              </div>
              <div class="col-md-3 col-sm-3"><a href="#." class="applybtn">Apply Now</a></div>
            </div>
          </div>
        </li>
        <!--Job end-->

        <!--Job start-->
        <li class="col-md-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-2 col-sm-2"><img src="{{url("asset/images/employers/emplogo3.jpg")}}" alt="Job Name" /></div>
              <div class="col-md-7 col-sm-7">
                <h4><a href="#.">Technical Database Engineer</a></h4>
                <div class="company"><a href="#.">Datebase Management Company</a></div>
                <div class="jobloc"><label class="freelance">Free Lancer</label>   - <span>New York</span></div>
              </div>
              <div class="col-md-3 col-sm-3"><a href="#." class="applybtn">Apply Now</a></div>
            </div>
          </div>
        </li>
        <!--Job end-->

        <!--Job start-->
        <li class="col-md-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-2 col-sm-2"><img src="{{url("asset/images/employers/emplogo4.jpg")}}" alt="Job Name" /></div>
              <div class="col-md-7 col-sm-7">
                <h4><a href="#.">Technical Database Engineer</a></h4>
                <div class="company"><a href="#.">Datebase Management Company</a></div>
                <div class="jobloc"><label class="fulltime">Full Time</label>   - <span>New York</span></div>
              </div>
              <div class="col-md-3 col-sm-3"><a href="#." class="applybtn">Apply Now</a></div>
            </div>
          </div>
        </li>
        <!--Job end-->

        <!--Job start-->
        <li class="col-md-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-2 col-sm-2"><img src="{{url("asset/images/employers/emplogo5.jpg")}}" alt="Job Name" /></div>
              <div class="col-md-7 col-sm-7">
                <h4><a href="#.">Technical Database Engineer</a></h4>
                <div class="company"><a href="#.">Datebase Management Company</a></div>
                <div class="jobloc"><label class="partTime">Part Time</label>   - <span>New York</span></div>
              </div>
              <div class="col-md-3 col-sm-3"><a href="#." class="applybtn">Apply Now</a></div>
            </div>
          </div>
        </li>
        <!--Job end-->

        <!--Job start-->
        <li class="col-md-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-2 col-sm-2"><img src="{{url("asset/images/employers/emplogo6.jpg")}}" alt="Job Name" /></div>
              <div class="col-md-7 col-sm-7">
                <h4><a href="#.">Technical Database Engineer</a></h4>
                <div class="company"><a href="#.">Datebase Management Company</a></div>
                <div class="jobloc"><label class="freelance">Free Lancer</label>   - <span>New York</span></div>
              </div>
              <div class="col-md-3 col-sm-3"><a href="#." class="applybtn">Apply Now</a></div>
            </div>
          </div>
        </li>
        <!--Job end-->

        <!--Job start-->
        <li class="col-md-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-2 col-sm-2"><img src="{{url("asset/images/employers/emplogo7.jpg")}}" alt="Job Name" /></div>
              <div class="col-md-7 col-sm-7">
                <h4><a href="#.">Technical Database Engineer</a></h4>
                <div class="company"><a href="#.">Datebase Management Company</a></div>
                <div class="jobloc"><label class="fulltime">Full Time</label>   - <span>New York</span></div>
              </div>
              <div class="col-md-3 col-sm-3"><a href="#." class="applybtn">Apply Now</a></div>
            </div>
          </div>
        </li>
        <!--Job end-->

        <!--Job start-->
        <li class="col-md-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-2 col-sm-2"><img src="{{url("asset/images/employers/emplogo8.jpg")}}" alt="Job Name" /></div>
              <div class="col-md-7 col-sm-7">
                <h4><a href="#.">Technical Database Engineer</a></h4>
                <div class="company"><a href="#.">Datebase Management Company</a></div>
                <div class="jobloc"><label class="partTime">Part Time</label>   - <span>New York</span></div>
              </div>
              <div class="col-md-3 col-sm-3"><a href="#." class="applybtn">Apply Now</a></div>
            </div>
          </div>
        </li>
        <!--Job end-->

        <!--Job start-->
        <li class="col-md-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-2 col-sm-2"><img src="{{url("asset/images/employers/emplogo9.jpg")}}" alt="Job Name" /></div>
              <div class="col-md-7 col-sm-7">
                <h4><a href="#.">Technical Database Engineer</a></h4>
                <div class="company"><a href="#.">Datebase Management Company</a></div>
                <div class="jobloc"><label class="freelance">Free Lancer</label>   - <span>New York</span></div>
              </div>
              <div class="col-md-3 col-sm-3"><a href="#." class="applybtn">Apply Now</a></div>
            </div>
          </div>
        </li>
        <!--Job end-->

        <!--Job start-->
        <li class="col-md-6">
          <div class="jobint">
            <div class="row">
              <div class="col-md-2 col-sm-2"><img src="{{url("asset/images/employers/emplogo10.jpg")}}" alt="Job Name" /></div>
              <div class="col-md-7 col-sm-7">
                <h4><a href="#.">Technical Database Engineer</a></h4>
                <div class="company"><a href="#.">Datebase Management Company</a></div>
                <div class="jobloc"><label class="freelance">Free Lancer</label>   - <span>New York</span></div>
              </div>
              <div class="col-md-3 col-sm-3"><a href="#." class="applybtn">Apply Now</a></div>
            </div>
          </div>
        </li> --}}
                <!--Job end-->

            </ul>
            <!--Featured Job end-->

            <!--button start-->
            <div class="viewallbtn"><a href="job">View All Featured Jobs</a></div>
            <!--button end-->
        </div>
    </div>
    <!-- Featured Jobs ends -->

    <!-- Video start -->
    <div class="videowraper section">
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <div class="subtitle">Here You Can See</div>
                <h3>Watch Our <span>Video</span></h3>
            </div>
            <!-- title end -->

            <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere lacus,
                id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper orci.</p>
            <a href="#."><i class="fa fa-play-circle-o" aria-hidden="true"></i></a>
        </div>
    </div>
    <!-- Video end -->

    <!-- Latest Jobs start -->
    <div class="section greybg">
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <div class="subtitle">Here You Can See</div>
                <h3>Latest <span>Jobs</span></h3>
            </div>
            <!-- title end -->

            <ul class="jobslist row">
                <!--Job 1-->
                <li class="col-md-4 col-sm-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"><img src="{{ url('asset/images/employers/emplogo1.jpg') }}"
                                    alt="Job Name" /></div>
                            <div class="col-md-9 col-sm-9">
                                <h4><a href="#.">Technical Database Engineer</a></h4>
                                <div class="company"><a href="#.">Datebase Management Company</a></div>
                                <div class="jobloc"><label class="fulltime">Full Time</label> - <span>New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->

                <!--Job 2-->
                <li class="col-md-4 col-sm-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"><img src="{{ url('asset/images/employers/emplogo11.jpg') }}"
                                    alt="Job Name" /></div>
                            <div class="col-md-9 col-sm-9">
                                <h4><a href="#.">Technical Database Engineer</a></h4>
                                <div class="company"><a href="#.">Datebase Management Company</a></div>
                                <div class="jobloc"><label class="freelance">Free Lancer</label> - <span>New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->

                <!--Job 3-->
                <li class="col-md-4 col-sm-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"><img src="{{ url('asset/images/employers/emplogo12.jpg') }}"
                                    alt="Job Name" /></div>
                            <div class="col-md-9 col-sm-9">
                                <h4><a href="#.">Technical Database Engineer</a></h4>
                                <div class="company"><a href="#.">Datebase Management Company</a></div>
                                <div class="jobloc"><label class="partTime">Part Time</label> - <span>New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->

                <!--Job 4-->
                <li class="col-md-4 col-sm-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"><img src="{{ url('asset/images/employers/emplogo13.jpg') }}"
                                    alt="Job Name" /></div>
                            <div class="col-md-9 col-sm-9">
                                <h4><a href="#.">Technical Database Engineer</a></h4>
                                <div class="company"><a href="#.">Datebase Management Company</a></div>
                                <div class="jobloc"><label class="freelance">Free Lancer</label> - <span>New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->

                <!--Job 5-->
                <li class="col-md-4 col-sm-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"><img src="{{ url('asset/images/employers/emplogo14.jpg') }}"
                                    alt="Job Name" /></div>
                            <div class="col-md-9 col-sm-9">
                                <h4><a href="#.">Technical Database Engineer</a></h4>
                                <div class="company"><a href="#.">Datebase Management Company</a></div>
                                <div class="jobloc"><label class="fulltime">Full Time</label> - <span>New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->

                <!--Job 6-->
                <li class="col-md-4 col-sm-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"><img src="{{ url('asset/images/employers/emplogo15.jpg') }}"
                                    alt="Job Name" /></div>
                            <div class="col-md-9 col-sm-9">
                                <h4><a href="#.">Technical Database Engineer</a></h4>
                                <div class="company"><a href="#.">Datebase Management Company</a></div>
                                <div class="jobloc"><label class="fulltime">Full Time</label> - <span>New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->

                <!--Job 7-->
                <li class="col-md-4 col-sm-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"><img src="{{ url('asset/images/employers/emplogo16.jpg') }}"
                                    alt="Job Name" /></div>
                            <div class="col-md-9 col-sm-9">
                                <h4><a href="#.">Technical Database Engineer</a></h4>
                                <div class="company"><a href="#.">Datebase Management Company</a></div>
                                <div class="jobloc"><label class="partTime">Part Time</label> - <span>New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->

                <!--Job 8-->
                <li class="col-md-4 col-sm-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"><img src="{{ url('asset/images/employers/emplogo2.jpg') }}"
                                    alt="Job Name" /></div>
                            <div class="col-md-9 col-sm-9">
                                <h4><a href="#.">Technical Database Engineer</a></h4>
                                <div class="company"><a href="#.">Datebase Management Company</a></div>
                                <div class="jobloc"><label class="freelance">Free Lancer</label> - <span>New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->

                <!--Job 9-->
                <li class="col-md-4 col-sm-6">
                    <div class="jobint">
                        <div class="row">
                            <div class="col-md-3 col-sm-3"><img src="{{ url('asset/images/employers/emplogo3.jpg') }}"
                                    alt="Job Name" /></div>
                            <div class="col-md-9 col-sm-9">
                                <h4><a href="#.">Technical Database Engineer</a></h4>
                                <div class="company"><a href="#.">Datebase Management Company</a></div>
                                <div class="jobloc"><label class="fulltime">Full Time</label> - <span>New York</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
                <!--Job end-->
            </ul>
            <!--view button-->
            <div class="viewallbtn"><a href="#.">View All Latest Jobs</a></div>
            <!--view button end-->
        </div>
    </div>
    <!-- Latest Jobs ends -->

    <!-- Testimonials start -->
    <div class="section">
        <div class="container">
            <!-- title start -->
            <div class="titleTop">
                <div class="subtitle">Here You Can See</div>
                <h3>Success <span>Stories</span></h3>
            </div>
            <!-- title end -->

            <ul class="testimonialsList owl-carousel">
                <!--user 1 Start-->
                <li class="item">
                    <div class="testimg"><img src="{{ url('asset/images/userimg.jpg') }}" alt="Your alt text here" />
                    </div>
                    <div class="clientname">Garry Miller Jr</div>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus.
                        Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue
                        nec aliquet aliquet."</p>
                    <div class="clientinfo">CEO - Gates Inc</div>
                </li>
                <!--user 1 end-->

                <!--user 2 Start-->
                <li class="item">
                    <div class="testimg"><img src="{{ url('asset/images/userimg.jpg') }}" alt="Your alt text here" />
                    </div>
                    <div class="clientname">Garry Miller Jr</div>
                    <p>"Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vestibulum viverra id nunc at finibus.
                        Etiam sollicitudin faucibus cursus. Proin luctus cursus nulla sed iaculis. Quisque vestibulum augue
                        nec aliquet aliquet."</p>
                    <div class="clientinfo">CEO - Gates Inc</div>
                </li>
                <!--user 2 end-->
            </ul>
        </div>
    </div>
    <!-- Testimonials End -->

    <!-- App Start -->
    <div class="appwraper">
        <div class="container">
            <div class="row">
                <div class="col-md-5 col-sm-6">
                    <!--app image Start-->
                    <div class="appimg"><img src="{{ url('asset/images/app-mobile.png') }}" alt="Your alt text here" />
                    </div>
                    <!--app image end-->
                </div>
                <div class="col-md-7 col-sm-6">
                    <!--app info Start-->
                    <div class="titleTop">
                        <div class="subtitle">Step Forword Now</div>
                        <h3>The Jobee APP</h3>
                    </div>
                    <div class="subtitle2">A world of oppertunity in your hand</div>
                    <p>Aliquam vestibulum cursus felis. In iaculis iaculis sapien ac condimentum. Vestibulum congue posuere
                        lacus, id tincidunt nisi porta sit amet. Suspendisse et sapien varius, pellentesque dui non, semper
                        orci. Curabitur blandit, diam ut ornare ultricies.</p>
                    <div class="appbtn">
                        <div class="row">
                            <div class="col-md-6 col-sm-6 col-xs-6"><a href="#."><img
                                        src="{{ url('asset/images/apple-btn.png') }}" alt="Your alt text here"></a></div>
                            <div class="col-md-6 col-sm-6 col-xs-6"><a href="#."><img
                                        src="{{ url('asset/images/andriod-btn.png') }}" alt="Your alt text here"></a>
                            </div>
                        </div>
                    </div>
                    <!--app info end-->
                </div>
            </div>
        </div>
    </div>
    <!-- App End -->

    <!-- Subscribe -->
    <div class="subscribe">
        <div class="container">
            <h6>Subscribe To Our Newsletters</h6>
            <p>sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr</p>
            <div class="row">
                <div class="col-md-6 col-md-offset-3">
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Enter Your Email">
                        <span class="input-group-btn">
                            <button class="btn btn-default" type="button">Subscrbe</button>
                        </span>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@section('css')
    <style>

    </style>
@endsection

@section('js')
    <script>
        // Show an alert if the user does not have the required role
        function showRoleAlert() {
            alert('You do not have permission to apply for this job.');
        }

        function roleAlert() {
            alert('your detail was send please wait for response for your approval');
        }

        // Show an alert if the user is not logged in
        function showLoginAlert() {
            alert('Please log in to your account before applying for this job.');
            // Optionally, redirect to the login page
            window.location.href = "{{ route('signin') }}"; // Redirect to login page
        }
    </script>
@endsection

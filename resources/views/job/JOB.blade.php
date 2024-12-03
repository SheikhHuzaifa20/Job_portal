@extends('layouts.main')
@section('content')

{{-- <h1>hello</h1> --}}
<div class="container my-5">

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
                                <span>{{ $value->location    }}</span>
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
                            {{-- <a href="javascript:void(0)" class="applybtn applyjob" data-job_id="{{ $value->id }}">
                                Apply Now
                            </a> --}}
                        </div>
                        {{-- <input type="submit"
                                        style="color: black; background-color:  rgb(47, 143, 239)"
                                        value="REGISTER" class="btn form-btn form-control my-3"> --}}
                    </div>
                </div>
            </li>
        @endforeach
    </ul>

</div>

@endsection

@extends('layouts.main')
@section('content')
    <section>
        <div class="container">
            <div>
                <h1>POST A JOB</h1>

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

                <form method="POST" action="{{ route('jobs') }}" enctype="multipart/form-data">
                    @csrf
                    <div class="mb-3">
                        <label style="color: blue;" for="job_title" class="form-label"><b>Job Title</b></label>
                        <input type="text" name="job_title" id="job_title" class="form-control">
                    </div>

                    <div class="mb-3">
                        <label style="color: blue;" for="location" class="form-label my-2"><b>Job Country</b></label>
                        {{-- <input type="text" name="location" id="location" class="form-control"> --}}
                        <select name="location" id="location" class="form-control" required>
                            <option disabled selected>Select Country</option>
                            <option style="color: blue;">Pakistan</option>
                            <option style="color: blue;">Turki</option>
                            <option style="color: blue;">Dubai</option>
                            <option style="color: blue;">GOA</option>
                            <option style="color: blue;">Germany</option>
                            <option style="color: blue;">Thailand</option>
                            <option style="color: blue;">America</option>
                            <option style="color: blue;">Singapoor</option>
                            <!-- Add more categories as needed -->
                        </select>
                    </div>

                    <div class="mb-3">
                            <label for="employment" style="color: blue; my-2" class="form-label"><b>Employment Type</b></label>
                            <select name="employment" id="employment" class="form-control" required>
                                <option disabled selected>Select employment</option>
                                <option style="color: blue;">Full Time</option>
                                <option style="color: blue;">Part Time</option>
                                <option style="color: blue;">Contractor</option>
                                <option style="color: blue;">Temporary</option>
                                <option style="color: blue;">Intern</option>
                                <option style="color: blue;">Volunteer</option>
                                <option style="color: blue;">Per Diem</option>
                                <option style="color: blue;">Other</option>
                                <!-- Add more categories as needed -->
                            </select>
                    </div>

                    <div class="flex flex-col mb-6">
                        <label style="color: blue;" for="organization"
                            class="block my-2 font-bold text-sm text-gray-700"><b>Company Name</b></label>
                        <div class="flex rounded-md shadow-sm">
                            <input type="text" name="company_name"
                                class="form-control bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                wire:model.lazy="job.organization" id="organization">
                        </div>
                    </div>

                    <div class="flex flex-col mb-6">
                        <label style="color: blue;" for="salary"
                            class="block my-2 font-bold text-sm text-gray-700"><b>Salary (optional)</b></label>
                        <div class="flex rounded-md shadow-sm">
                            <input type="text" name="salary"
                                class="form-control bg-gray-50 border-gray-300 focus:border-indigo-300 focus:ring focus:ring-indigo-200 focus:ring-opacity-50 rounded-md shadow-sm mt-1 block w-full"
                                wire:model.lazy="job.salary" id="salary">
                        </div>
                        <p class="mt-2 text-sm text-gray-500">Examples: $120,000 – $145,000 USD, €80,000 — €102,000</p>
                    </div>

                    <div>
                        <label style="color: blue;" for="organization"
                            class="block my-2 font-bold text-sm text-gray-700"><b>Company Logo</b></label>
                        <div class="flex flex-col mb-6">
                            <input type="file" name="image" id="logo_image" class="form-control">
                        </div>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>

                </form>
            </div>
        </div>
    </section>
@endsection
@section('css')
    <style>

    </style>
@endsection

@section('js')
    <script type="text/javascript"></script>
@endsection

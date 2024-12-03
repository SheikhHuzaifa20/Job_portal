@extends('layouts.main')
@section('content')


    @foreach ($job as $val)
    <table class="table table-striped  my-5">
        <thead>
                <tr>
                    <th>#</th>
                    <th>Image</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Approved</th>
                    <th>Delete</th>
                </tr>
        </thead>

        <tbody>
            <tr>
                <th>{{ $val->id }}</th>
                <td><img height="80px" src="{{ $val->image }}" alt=""></td>
                <td>{{ $val->name }}</td>
                <td>{{ $val->email }}</td>
                <td>{{ $val->address }}</td>
                <td>{{ $val->phone }}</td>
                <td> <a href="{{ route('approved', $val->id) }}" class="btn btn-primary my-1">Approved</a></td>
                <td>
                    <form action="{{ route('delete_product', $val->id) }}" method="POST" style="display:inline;" onsubmit="return confirm('Are you sure you want to Rejeted?');">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger my-1">Rejected</button>
                    </form>
                </td>
            </tr>
        </tbody>
    </table>
    @endforeach
@endsection



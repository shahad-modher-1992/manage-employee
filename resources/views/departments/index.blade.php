@extends('layouts.main')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Departments</h1>
    </div>
    <div class="row">
        <div class="card mx-auto">

            @include('message')

            <div class="card-header">
                <div class="row">
                <div class="col">
                      <form method="GET" action="{{ route('departments.index') }}">
                        <div class="form-row align-items-center">
                            <div class="col-auto">
                                <label class="sr-only" for="inlineFormInput">Search</label>
                                <input type="search" name="search" class="form-control mb-2" id="inlineFormInput" placeholder="Search">
                            </div>

                            <div class="col-auto">
                                <button type="submit" class="btn btn-primary mb-2">Search</button>
                            </div>
                        </div>
                    </form>


                </div>
                <div>
                    <a href="{{ route('departments.create') }}" class="btn btn-primary mb-2">Create</a>
                </div>
            </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">department Name</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($departments as $department)
                            <tr>
                                <td scope="row">{{ $department->id }}</td>
                                <td>{{ $department->name }}</td>
                                <td>
                                    <a href="{{ route('departments.edit', $department->id) }}" class="btn btn-success"
                                        style="display: inline-block">Edit</a>
                                    <form action=" {{ route('departments.destroy', $department->id) }}  " method="POST"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"> Delete {{ $department->name }}</button>
                                    </form>
                                </td>
                            </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

@endsection

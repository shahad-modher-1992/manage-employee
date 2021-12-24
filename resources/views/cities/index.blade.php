@extends('layouts.main')
@section('content')

    <div class="d-sm-flex align-items-center justify-content-between mb-4">
        <h1 class="h3 mb-0 text-gray-800">Cites</h1>
    </div>
    <div class="row">
        <div class="card mx-auto">

            @include('message')

            <div class="card-header">
                <div class="row">
                <div class="col">
                      <form method="GET" action="{{ route('cities.index') }}">
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
                    <a href="{{ route('cities.create') }}" class="btn btn-primary mb-2">Create</a>
                </div>
            </div>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Id</th>
                            <th scope="col">City Name</th>
                            <th scope="col">State Name</th>
                            <th scope="col">Manage</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($cities as $city)
                            <tr>
                                <td scope="row">{{ $city->id }}</td>
                                <td>{{ $city->name }}</td>
                                <td>{{ $city->state->name }}</td>
                                <td>
                                    <a href="{{ route('cities.edit', $city->id) }}" class="btn btn-success"
                                        style="display: inline-block">Edit</a>
                                    <form action=" {{ route('cities.destroy', $city->id) }}  " method="POST"
                                        style="display: inline-block">
                                        @csrf
                                        @method('DELETE')
                                        <button class="btn btn-danger"> Delete {{ $city->name }}</button>
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

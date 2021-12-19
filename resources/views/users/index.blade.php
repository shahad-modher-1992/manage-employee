@extends('layouts.main')
@section('content')

         <div class="d-sm-flex align-items-center justify-content-between mb-4">
             <h1 class="h3 mb-0 text-gray-800">Users</h1>
        </div>
        <div class="row">
            <div class="card mx-auto">
                <div class="card-header">
                    <a href="{{ route('users.create') }}" class="float-right">Create</a>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">Id</th>
                                <th scope="col">UserName</th>
                                <th scope="col">Email</th>
                                <th scope="col">Manage</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($users as $user )
                            <tr>
                                <td scope="row">{{ $user->id }}</td>
                                <td>{{$user->username}}</td>
                                <td>{{ $user->email }}</td>
                                <td>Edit/Delete</td>
                            </tr>
                            @endforeach
                          
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
      
@endsection
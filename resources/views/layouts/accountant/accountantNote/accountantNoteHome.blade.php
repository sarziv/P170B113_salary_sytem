@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12">
                <div class="card">
                    <div class="card-header text-center">Users with notes
                        <div class="d-flex justify-content-end">
                            <a class="btn btn-primary" href="{{route('accountantNote.create',0)}}">New  note</a>
                        </div>
                    </div>
                    <div class="card-body">
                        <div class="text-center">
                            <table class="table">
                                @if(empty($users[0]))
                                    <div>Dam my system got No Users! :(</div>
                                @else
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Type</th>
                                        <th scope="col">Name</th>
                                        <th scope="col">Email</th>
                                        <th scope="col">Functions</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach ($users as $user)
                                        <tr>
                                            <th scope="row">{{ $user->id }}</th>
                                            <th scope="row">{{ $user->type }}</th>
                                            <th scope="row">{{ $user->name }}</th>
                                            <th scope="row">{{ $user->email}} </th>
                                            <th scope="row">
                                                <a href="{{ route('accountantNote.show',$user->id)}}"
                                                   class="btn btn-primary">View notes</a>
                                            </th>
                                        </tr>
                                    @endforeach
                                    @endif
                                    </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

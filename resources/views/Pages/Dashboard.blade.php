@extends('layout.master_layout')
@section('content')
    <div class="container">
        <h1 class="text-center ">All user</h1>
        <div class="row">
            {{-- <div class="col-12">
                <table class="table table-border  table-striped">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Name</th>
                            <th scope="col">Email</th>
                            <th scope="col">Age</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $key => $item)
                            <tr>
                                <th scope="row">{{ $loop->iteration }}</th>
                                <td>{{ $item->name }}</td>
                                <td>{{ $item->email }}</td>
                                <td>{{ $item->age }}</td>
                                <td>
                                    <a href="{{ route('profile', $item->id) }}" class="btn btn-primary">
                                        Show user profile
                                    </a>
                                </td>
                            </tr>
                        @endforeach


                    </tbody>
                </table>
            </div> --}}

            <div class="col-12">
                <div class="row">
                    @foreach ($users as $key => $item)
                        <div class="card p-3 m-3" style="width: 20%">
                            <img src={{ $item->image }} class="card-img-top" alt="Fissure in Sandstone" />
                            <div class="card-body">
                                <h5 class="card-title">Name:- {{ $item->name }}</h5>
                                <p>Age:- {{ $item->user_age }}</p>
                                <a href="{{ route('profile', $item->id) }}" class="btn btn-primary" data-mdb-ripple-init>
                                    show user profile</a>
                            </div>
                        </div>
                    @endforeach
                </div>

            </div>
        </div>

    </div>
@endsection

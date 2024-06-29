    @extends('layout.master_layout')
    @section('content')
        <div class="container">
            <h1 class="text-center ">show user</h1>
            <div class="row">
                <div class="col-12">
                    <div class="card" style="width: 20%">
                        <img src={{ $users->image }} class="card-img-top" alt="Fissure in Sandstone" />
                        <div class="card-body">
                            <h5 class="card-title">Name:- {{ $users->name }}</h5>
                            <p class="card-text">About:- {{ substr($users->about, 0, 50) }}</p>
                            <p>Age:- {{ $users->age }}</p>
                            <p>Phone:- {{ $users->phone }}</p>
                            <a href="{{ route('dashboard') }}" class="btn btn-primary" data-mdb-ripple-init>Back to
                                dashboard</a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    @endsection

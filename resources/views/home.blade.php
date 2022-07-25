@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header"><h2><b>My Profile</b></h2></div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    <p><h4><b>Name : </b> {{ Auth::user()->name }} </h4></p>
                    <p><h4><b>Email : </b> {{ Auth::user()->email }} </h4></p>
                    <p><h4><b>Address : </b> {{ Auth::user()->address }} </h4></p>
                    <p><h4><b>Phone: </b> {{ Auth::user()->phone }} </h4></p>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

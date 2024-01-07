@extends('component.master.dashboard-master')
@section('main-content')
    <div class="container-fluid">
        <!--  Row 1 -->
        <div class="row">
            <div class="card w-50 h-100">
                <div class="card-header">
                    {{ $userdata->name }}
                </div>
                <div class="card-body">
                    <h5 class="card-title">{{ $userdata->email }}</h5>
                    <p class="card-text">{{ $userdata->city }}</p>
                    <h5 class="card-text">{{ $userdata->state }}</h5>
                    <p class="card-title">{{ $userdata->country }}</p>
                    <a href="#" class="btn btn-primary w-full">{{ $userdata->gender }}</a>
                </div>
            </div>
        </div>

    </div>
@endsection

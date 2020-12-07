@extends('layout/main')

@section('title', 'Detail')

@section('container',)
    <!-- Page Content -->
    <div class="container">

        <!-- Portfolio Item Heading -->
        <h1 class="my-4">Page Heading
            <small>Secondary Text</small>
        </h1>

        <!-- Portfolio Item Row -->
        <div class="row text-left">

            <div class="col-md-4">
                <h3 class="my-3">{{ $event->title }} Description</h3>
                <p>{{ $event->description }}</p>
                <h3 class="my-3">{{ $event->title }} Details</h3>
                <ul>
                    <li>Creator : {{ $event->created_by }}</li>
                    <li>Date    : {{ $event->date }}</li>
                </ul>
            </div>

        </div>

        <div class="row">
            @include('roleview.creator.event.detail.guestlist')
        </div>

        <!-- /.row -->

    </div>
    <!-- /.container -->
@endsection

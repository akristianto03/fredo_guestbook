@extends('layout.main')

@section('title', 'List Data')

@section('container',)
@include('roleview.user.event.modal.add')

<div class="row" style="padding: 0;margin-top: 100px;margin-bottom: 20px;">
    <div class="col">
        <h1>List Data</h1>
    </div>
</div>

<div class="row mb-3" style="margin: auto; width: 60%;" >
    <div class="col-md-2 offset-md-10">
        <button type="button" class="mx-3 px-5 mb-3 btn btn-primary float-right" data-toggle="modal"
                data-target="#exampleModal">
            Join Event
        </button>
    </div>
</div>

<div class="row" style="width: 80%;margin: auto;">
    <div class="col">
        <div class="table-responsive text-center">
            <table class="table">
                <thead style="background: linear-gradient(120deg, #00e4d0, #5983e8);">
                    <tr>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Status</th>
                        <th>Owned By</th>
                        <th>Application Status</th>
                        <th>Action</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($attends as $event)

                    <tr>
                        <td>{{$event->title}}</td>
                        <td>{{$event->description}}</td>
                        <td>{{$event->status}}</td>
                        <td>{{$event->creator->name}}</td>
                        <td>@if($event->pivot->is_approved == 0) <p class="text-warning">Pending</p>
                            @elseif($event->pivot->is_approved == 1) <p class="text-success">Approved</p>
                            @else <p class="text-danger">Rejected</p> @endif </td>
                        <td>
                            <form action="{{route('user.event.destroy', $event->id)}}" method="POST">
                                {{ csrf_field() }}
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger btn-circle"
                                        title="Withdrawal from application"
                                        type="submit"
                                        @if($event->pivot->is_approved != 0) disabled @endif
                                >
                                    <i class="fas fa-trash"></i>
                                </button>
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

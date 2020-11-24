@extends('layout/main')

@section('title', 'List User')

@section('container',)
<div class="row" style="padding: 0;margin-top: 100px;margin-bottom: 20px;">
    <div class="col">
        <h1>List User</h1>
    </div>
</div>

<div class="row mb-3" style="margin: auto; width: 60%;" >
    <div class="col-md-2 offset-md-10">
        <a href="{{ route('event.create') }}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Tambah</a>
    </div>
</div>

<div class="row" style="width: 80%;margin: auto;">
    <div class="col">
        <div class="table-responsive text-center">
            <table class="table">
                <thead style="background: linear-gradient(120deg, #00e4d0, #5983e8);">
                    <tr>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Event List</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($users as $user)

                    <tr>
                        <td class="text-left">{{$user->name}}</td>
                        <td>{{$user->email}}</td>
                        <td class="text-left">
                            @foreach($user->events as $event)
                                <li>{{$event->title}}</li>
                            @endforeach
                        </td>
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@extends('layout.main')

@section('title', 'List Data')

@section('container',)
<div class="row" style="padding: 0;margin-top: 100px;margin-bottom: 20px;">
    <div class="col">
        <h1>List Data</h1>
    </div>
</div>

<div class="row mb-3" style="margin: auto; width: 60%;" >
    <div class="col-md-2 offset-md-10">
        <a href="{{ route('admin.event.create') }}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Tambah</a>
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
                        <th>Created At</th>
                        <th>Updated At</th>
                        @auth()
                        <th>Action</th>
                        @endauth
                    </tr>
                </thead>
                <tbody>

                @foreach($events as $event)

                    <tr>
                        <td><a href="@auth() {{route('admin.event.edit', $event)}} @endauth">{{$event->title}}</a></td>
                        <td>{{$event->description}}</td>
                        <td>{{$event->status}}</td>
                        <td>{{$event->creator->name}}</td>
                        <td>{{$event->created_at}}</td>
                        <td>{{$event->updated_at}}</td>
                        @auth()
                        <td>
                        <form action="{{ route('admin.event.destroy', $event) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
                        </form>
                        </td>
                        @endauth
                    </tr>

                @endforeach

                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection

@extends('layout/main')

@section('title', 'Add Event')

@section('container',)

    <div class="container" style="margin-top: 20px;">
        <div class="row">
            <h1>Masukkan Data</h1>
        </div>

        <div class="row">
            <div class="col">
                <form action="{{ route('event.update', $event) }}" method = "post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" class="form-control" name="title" value="{{ $event->title }}">
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea type="text" class="form-control" name="description">{{ $event->description }}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Event Date:</label>
                        <input type="text" class="form-control" name="event_date" value="{{ $event->event_date }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
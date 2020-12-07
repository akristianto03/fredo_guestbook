@extends('layout.main')

@section('title', 'Add Event')

@section('container',)

    <div class="container" style="margin-top: 20px;">
        <div class="row mt-5">
            <h1 class="mt-5">Masukkan Data</h1>
        </div>

        <div class="row">
            <div class="col">
                <form action="{{ route('creator.event.store') }}" method = "post">
                    @csrf
                    <div class="form-group">
                        <label>Title:</label>
                        <input type="text" class="form-control" name="title">
                    </div>
                    <div class="form-group">
                        <label>Description:</label>
                        <textarea type="text" class="form-control" name="description"></textarea>
                    </div>
                    <div class="form-group">
                        <select name="created_by" class="custom-select">
                            @foreach($users as $user)
                                <option value="{{ $user->id }}">{{ $user->name . ' (' . $user->email . ')' }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Event Date:</label>
                        <input type="date" class="form-control" name="event_date">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection

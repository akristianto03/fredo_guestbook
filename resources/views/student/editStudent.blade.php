@extends('layout/main')

@section('title', 'Edit Student')

@section('container',)

    <div class="container" style="margin-top: 20px;">
        <div class="row mt-5">
            <h1 class="mt-5">Masukkan Data</h1>
        </div>

        <div class="row">
            <div class="col">
                <form action="{{ route('student.update', $student) }}" method = "post">
                    @csrf
                    <input type="hidden" name="_method" value="PATCH">
                    <div class="form-group">
                        <label>Nama:</label>
                        <input type="text" class="form-control" name="name" value="{{ $student->name }}">
                    </div>
                    <div class="form-group">
                        <label>Nim:</label>
                        <input type="text" class="form-control" name="nim" value="{{ $student->nim }}">
                    </div>
                    <div class="form-group">
                        <label>Email:</label>
                        <input type="text" class="form-control" name="email" value="{{ $student->email }}">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>

@endsection
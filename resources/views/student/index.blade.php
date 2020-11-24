@extends('layout/main')

@section('title', 'List Data')

@section('container',)
<div class="row" style="padding: 0;margin-top: 100px;margin-bottom: 20px;">
    <div class="col">
        <h1>List Data</h1>
    </div>
</div>

<div class="row mb-3" style="margin: auto; width: 60%;" >
    <div class="col-md-2 offset-md-10">
        <a href="{{ route('student.create') }}" class="btn btn-primary btn-block" role="button" aria-pressed="true">Tambah</a>
    </div>
</div>

<div class="row" style="width: 80%;margin: auto;">
    <div class="col">
        <div class="table-responsive text-center">
            <table class="table">
                <thead style="background: linear-gradient(120deg, #00e4d0, #5983e8);">
                    <tr>
                        <th>Nama</th>
                        <th>Nim</th>
                        <th>Email</th>
                        <th>Created</th>
                        <th>Updated</th>
                        <th>Picture</th>
                    </tr>
                </thead>
                <tbody>

                @foreach($students as $student)

                    <tr>
                        <td><a href="{{ route('student.edit', $student) }}">{{ $student->name }}</a></td>
                        <td>{{$student->nim}}</td>
                        <td>{{$student->email}}</td>
                        <td>{{$student->updated_at}}</td>
                        <td>{{$student->created_at}}</td>
                        <td>{{$student->picture}}</td>
                        <td>
                        <form action="{{ route('student.destroy', $student) }}" method="post">
                            @csrf
                            <input type="hidden" name="_method" value="DELETE">
                            <button type="submit" class="btn btn-danger">Delete</button>
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

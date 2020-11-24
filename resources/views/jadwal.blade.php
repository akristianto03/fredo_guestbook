@extends('layout/main')

@section('title', 'Jadwal')

@section('container',)
<div class="row" style="padding: 0;margin-top: 100px;margin-bottom: 20px;">
    <div class="col">
        <h1>Jadwal Kuliah</h1>
    </div>
</div>
<div class="row" style="width: 80%;margin: auto;">
    <div class="col">
        <div class="table-responsive text-center">
            <table class="table">
                <thead style="background: linear-gradient(120deg, #00e4d0, #5983e8);">
                    <tr>
                        <th>Hari</th>
                        <th>Jam</th>
                        <th class="text-center">Mata Kuliah</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>Senin</td>
                        <td>08.20</td>
                        <td class="text-left">Mobile App Development</td>
                    </tr>
                    <tr>
                        <td>Selasa</td>
                        <td>09.10</td>
                        <td class="text-left">Database</td>
                    </tr>
                    <tr>
                        <td>Rabu</td>
                        <td>09.10</td>
                        <td class="text-left">Game Design</td>
                    </tr>
                    <tr>
                        <td>Kamis</td>
                        <td>10.50</td>
                        <td class="text-left">Matematika Diskrit</td>
                    </tr>
                    <tr>
                        <td>Jumat</td>
                        <td>07.30</td>
                        <td class="text-left">Web Development</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
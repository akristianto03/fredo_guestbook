@extends('layout/main')

@section('title', 'Home')

@section('container',)
<div class="row" style="padding: 0;margin-top: 100px;margin-bottom: 20px;">
    <div class="col">
        <h1>Kontak</h1>
    </div>
</div>
<div class="row" style="width: 80%;margin: auto;">
    <div class="col">
        <div class="table-responsive text-center">
            <table class="table">
                <thead style="background: linear-gradient(120deg, #00e4d0, #5983e8);">
                    <tr>
                        <th>Nama</th>
                        <th>No Wa/ID Line</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="text-left">Nicky</td>
                        <td>0813/nickysan</td>
                    </tr>
                    <tr>
                        <td class="text-left">Alfindi</td>
                        <td>0882/mrhacker</td>
                    </tr>
                    <tr>
                        <td class="text-left">Bryan</td>
                        <td>0212/bryanton</td>
                    </tr>
                    <tr>
                        <td class="text-left">Ray</td>
                        <td>0521/rayray</td>
                    </tr>
                    <tr>
                        <td class="text-left">Marshall</td>
                        <td>0871/shrall</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
</div>
@endsection
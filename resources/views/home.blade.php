@extends('layout/main')

@section('title', 'Home')

@section('container',)
    <div class="row">
        <div class="col">
            <div class="text-center profile-card" style="margin:15px;background-color:#ffffff;">
                <div style="margin-top: 115px;"><img class="rounded-circle" style="margin-top: -19px;" src="{{asset('pic/picme.jpg')}}" height="150px">
                    <h3>Alfredo Junio</h3>
                    <p style="padding: 10px;padding-bottom: 0;padding-top: 5px;font-size: 22px;height: 31px;margin-bottom: 15px;">Surabaya, 04 Juni 2001</p>
                </div>
            </div>
            <div class="row">
                <div class="col" style="margin: 0 70px 80px 70px;">
                    <p>Halo aku Alfredo, kini aku sedang berada di semester 3 jurusan IMT dan sedang belajar mengenai laravel, susah bats laravel tu, tapi ku menyukainya :v.</p>
                    <p style="font-size: 21px;">Hobi : Tak terdefiniskan</p>
                </div>
            </div>
        </div>
    </div>
@endsection

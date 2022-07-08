@extends('layouts.public.master')

@section('content')
    <div class="flex-container">
        <div class="flex-basis-fifty">
            <div class="flex-container flex-wrap " style="position:relative">
                <img src="{{ asset('images/thermite.png') }}" style="height:500px; width: 100%;" alt="">
                <div class="hi-title" style="background:transparent; color:white; ">Naotsugu12 MVP? Always Has Been</div>
            </div>
            <div class="flex-container flex-wrap " style="position: relative;">
                <img src="{{ asset('images/v.png') }}" style="height:250px; width: 50%; " alt="">
                <div class="sub-title" style="background:transparent; color:white; font-size:20px ">Review Valorant: Bayar
                    Pakai Mental!</div>

                <img src="{{ asset('images/himan.png') }}" style="height:250px; width: 50%; " alt="">
                <div class="sub-title-right" style="background:transparent; color:white; font-size:20px; ">Review Hitman
                    III: Sang Pembunuh Plontos Kembali Beraksi!</div>
            </div>
        </div>
        <div class="flex-basis-fifty">
            <div class="flex-container flex-wrap">
                <img src="{{ asset('images/mira.png') }}" style="height:250px; width: 50%; " alt="">
                <div class="hi-title-smol" style="background:transparent; color:white; font-size:20px ">Review Rainbow Six
                    Siege: Gameplay Taktis Tingkat Tinggi!</div>

                <img src="{{ asset('images/wicah.png') }}" style="height:250px; width: 50%; " alt="">
                <div class="hi-title-smol2" style="background:transparent; color:white; font-size:20px ">Review The Witcher
                    3: Lebih Dari Sebuah Game</div>

                <img src="{{ asset('images/sekiro.png') }}" style="height:250px; width: 50%; " alt="">
                <div class="mid-title-smol" style="background:transparent; color:white; font-size:20px ">Review Sekiro: Sang
                    Shinobi Seperempat Robot</div>

                <img src="{{ asset('images/tokyo2.png') }}" style="height:250px; width: 50%; " alt="">
                <div class="mid-title-smol2" style="background:transparent; color:white; font-size:20px ">Review
                    GhostWire-Tokyo: Jujutsu Kaisen Berbentuk Game?!</div>

                <img src="{{ asset('images/wd.png') }}" style="height:250px; width: 50%; " alt="">
                <div class="bot-title" style="background:transparent; color:white; font-size:20px ">Review Watch Dogs
                    Legion: Konsep Fantastis Eksekusi Manis</div>

                <img src="{{ asset('images/YK2.png') }}" style="height:250px; width: 50%; " alt="">
                <div class="bot-title2" style="background:transparent; color:white; font-size:20px ">Review Yakuza Kiwami 2:
                    Amukan Sang Naga!</div>

            </div>
        </div>
    </div>

    <div class="flex-container" style="margin-top: 30px;">
        <div class="flex-basis-fifty">
            <div class="flex-container flex-wrap">
                <img src="{{ asset('images/bak.png') }}" style="height:700px; width: 150%;" alt="">
                <div style="position: absolute; text-align:end; background:transparent; color:white;"><strong><a
                            class="text-a" href="artikel2"> Review Batman Arkham Knight: Berakhirnya Kisah Sang
                            Kelelawar!</a></div>
            </div>
        </div>
    </div>
    <div id="list">
        @foreach ($data as $item)
            <div class="flex-container contain-game" style="margin-top: 30px;">
                <div class="flex-basis-fifty">
                    <div class="flex-container flex-wrap">
                        <img src="{{ asset('images/toa.png') }}" style="height:400px; width: 100%;" alt="">
                    </div>
                </div>

                <div class="flex-basis-fifty" style="background-color: rgb(33, 32, 32);">
                    <div class="flex-container flex-wrap " style="margin-left: 60px;">
                        <a class="text-a" href="">{{ $item->title }}</a>

                        <div class="flex-basis-fifty" style="background-color: rgb(33, 32, 32);">
                            <div class="flex-container flex-wrap " style="margin-left: 60px;">
                                <div
                                    style="background-color: transparent; color:grey; font-size: 28px; font-style: normal;">
                                    {{ $item->preview }}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <button id="btn1">Hide/Show Video</button>

    <iframe id="vid" style="margin-top: 30px;" width="1880" height="1000"
        src="https://www.youtube.com/embed/EG057IQHkBs"></iframe>


    <div class="grid-container">
        <div class="item1">
            <h1><strong> Gaming Gear</strong></h1>
            <ul style="list-style-type:disc; text-align:start">
                <li><a class="text-a" href="">Review ROG Falchion: Design Minimalis Fungsi
                        Maksimalis</a></li>
                <li><a class="text-a" href="">Review Razer Viper Mini: Pahlawan Pengguna Claw Grip</a>
                </li>
                <li><a class="text-a" href="">Review Rexus Daxa M71 Classic: Keyboard Paling Ramah</a>
                </li>
            </ul>
        </div>

        <div class="item2">
            <h1><strong> Top List</strong></h1>
            <ul style="list-style-type:disc; text-align:start">
                <li><a class="text-a" href="">Upcoming Games Release: April 2022</a> </li>
                <li><a class="text-a" href="">Upcoming Games Release: Maret 2022</a> </li>
                <li><a class="text-a" href="">Upcoming Games Release: Februari 2022</a> </li>
            </ul>
        </div>
    </div>
    <div class="center">
        <div class="pagination" style="margin-left:40%">
            <a href="#">&laquo;</a>
            <a href="#">1</a>
            <a href="#" class="active">2</a>
            <a href="#">3</a>
            <a href="#">4</a>
            <a href="#">5</a>
            <a href="#">6</a>
            <a href="#">&raquo;</a>
        </div>
    </div>
@endsection

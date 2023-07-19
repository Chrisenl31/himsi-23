@extends('template.koneksi.template')

@section('title', 'Selamat Datang di Website HIMSI UNAIR!')
@section('seo-desc', ''){{-- ini buat deskripsi seo --}}
@section('seo-img', '') {{-- ini buat gambar seo --}}

@section('bodyclass', 'body') {{-- kalo butuh class buat body --}}
@section('container', 'landing')

@section('content')
    <div class="alumni">
        <nav class="sidebar">
            {{-- Sidebar --}}
            <h4 class="sidebar__title">Tahun Lulus</h4>
            <div class="sidebar__year">
                <button class="sidebar__btn selected" type="button">2019</button>
                <button class="sidebar__btn" type="button">2018</button>
                <button class="sidebar__btn" type="button">2017</button>
            </div>
        </nav>
        <main class="main">
            <div class="list">
                {{-- Search bar --}}
                <form class="search" autocomplete="off">
                    <h4 class="main__title">Data Alumni</h4>
                    <div class="search__bar">
                        <img src="{{ url('assets\img\mercusuar\icon\search.svg') }}" alt="">
                        <input type="search" class="search__bar__input" placeholder="Telusuri Data Alumni">
                    </div>
                </form>
                {{-- Main Content -> List of Alumni --}}
                <div class="table">
                    <table class="table__content">
                        <tr>
                            <th>Nama</th>
                            <th>Profil</th>
                            <th>Email</th>
                            <th>Bidang Pekerjaan</th>
                            <th></th>
                        </tr>
                        <tr>
                            <td>Darfito Danur</td>
                            <td><a href="">linkedin</a></td>
                            <td>darfito@gmail.com</td>
                            <td>Software Developer</td>
                            <td><a href=""><img src="{{ url('assets/img/mercusuar/icon/info.svg') }}"></a></td>
                        </tr>
                        <tr>
                            <td>Cakra Kusuma Erlangga Ramdani</td>
                            <td><a href="">linkedin</a></td>
                            <td>cak@gmail.com</td>
                            <td>Web Developer</td>
                            <td><a href=""><img src="{{ url('assets/img/mercusuar/icon/info.svg') }}"></a></td>
                        </tr>
                    </table>
                </div>
            </div>
            {{-- Pagination --}}
            <div class="pagination">
                <button>&lt</button>
                <button class="selected">1</button>
                <button>2</button>
                <button>&gt</button>
            </div>
        </main>
    </div>
@endsection

@section('extrajs')
    {{-- <script src="{{ url('assets/js/landing.js') }}"></script> --}}
@endsection

@extends('template.koneksi.template-admin')

@section('title')
    Halo, {{ Auth::User()->name }}
@endsection
@section('seo-desc', ''){{-- ini buat deskripsi seo --}}
@section('seo-img', '') {{-- ini buat gambar seo --}}

@section('bodyclass', '') {{-- kalo butuh class buat body --}}
@section('container', 'adm-alumniadd')


@section('content')

    <main class="main">
        <div class="list">
            {{-- Search bar --}}
            <form class="search" autocomplete="off">
                <div class="headline">
                    <div class="headline__wrapper">
                        <h4 class="headline__title">Data Alumni</h4>
                        <label for="tahun">
                            <select name="tahun" id="" class="headline__dropdown">
                                <option value="">2019</option>
                                <option value="">2018</option>
                                <option value="">2017</option>
                            </select>
                        </label>
                    </div>
                    <a href="{{ url('/admin/alumni/add') }}" class="headline__add">
                        <img src="{{ url('assets/img/alumni-add.svg') }}" alt="">
                        <span>Baru</span>
                    </a>
                </div>
                <div class="search__bar">
                    <img src="{{ url('assets/img/search-alumni.svg') }}" alt="">
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
                        <th>Action</th>
                    </tr>
                    <tr>
                        <td>Darfito Danur</td>
                        <td><a href="">linkedin</a></td>
                        <td>darfito@gmail.com</td>
                        <td>Software Developer</td>
                        <td>
                            <div class="icons">
                                <a href=""><img src="{{ url('assets/img/alumni-info.svg') }}"></a>
                                <a href=""><img src="{{ url('assets/img/alumni-edit.svg') }}"></a>
                                <a href=""><img src="{{ url('assets/img/alumni-delete.svg') }}"></a>
                            </div>
                        </td>
                    </tr>
                    <tr>
                        <td>Cakra Kusuma Erlangga Ramdani</td>
                        <td><a href="">linkedin</a></td>
                        <td>cak@gmail.com</td>
                        <td>Web Developer</td>
                        <td>
                            <div class="icons">
                                <a href=""><img src="{{ url('assets/img/alumni-info.svg') }}"></a>
                                <a href=""><img src="{{ url('assets/img/alumni-edit.svg') }}"></a>
                                <a href=""><img src="{{ url('assets/img/alumni-delete.svg') }}"></a>
                            </div>
                        </td>
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

@endsection

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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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
                                <button class="show-info" type="button"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
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

        {{-- modal --}}
        <dialog class="modal-box">
            <div class="modal-box__wrapper">
                <h2>Detail Info</h2>
                <div class="detail-info">
                    <div class="field">
                        <div class="field-left">
                            <div class="form-group-detail">
                                <label class="form-label" for="name">Nama</label>
                                <span id="name" class="form-control-plaintext">Darfito Danur</span>
                            </div>
                            <div class="form-group-detail">
                                <label class="form-label">Email</label>
                                <span class="form-control-plaintext">Himsi@gmail.com</span>
                            </div>
                            <div class="form-group-detail">
                                <label class="form-label">Nomor Telepon</label>
                                <span class="form-control-plaintext">+62*****</span>
                            </div>
                        </div>
                        <div class="field-right">
                            <div class="form-group-detail">
                                <label class="form-label">Jabatan</label>
                                <span class="form-control-plaintext">duduk aja</span>
                            </div>
                            <div class="form-group-detail">
                                <label class="form-label">Profil Linkedin</label>
                                <span class="form-control-plaintext">ini linknya gan</span>
                            </div>
                            <div class="form-group-detail">
                                <label class="form-label">Nama dan Alamat Perusahaan</label>
                                <span class="form-control-plaintext">krusty crab</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="buttons">
                    <button type="button" class="close-btn">Close</button>
                </div>
            </div>
        </dialog>
    </main>

@endsection

@section('extrajs')
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const btns = document.querySelectorAll(".show-info");
            const modal = document.querySelector(".modal-box");
            const close = document.querySelector(".close-btn");
            const body = document.querySelector("body");

            btns.forEach(function(btn)
            {
                btn.addEventListener("click", (event) => {
                    event.stopPropagation()
                    modal.showModal();
                });
            });

            body.addEventListener("click", function(e)
            {
                // console.log(e.target);
                if (e.target === modal || e.target === close) {
                    modal.close();
                }
            });
        });
    </script>

@endsection

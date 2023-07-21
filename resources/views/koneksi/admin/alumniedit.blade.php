@extends('template.koneksi.template-admin')

@section('title')
    Halo, {{ Auth::User()->name }}
@endsection
@section('seo-desc', ''){{-- ini buat deskripsi seo --}}
@section('seo-img', '') {{-- ini buat gambar seo --}}

@section('bodyclass', '') {{-- kalo butuh class buat body --}}
@section('container', 'adm-alumniadd')


@section('content')

    <div class="addContent">

        <div class="tittle-Add">
            <h1>Data Alumni</h1>
            <h4>Berikut adalah form tambah data alumni</h4>
        </div>
        <img src="{{ url('assets/image/mercusuar/logo-mercusuar.png') }}" alt="" class="adm-login__ornament-merc">
        <div class="add-box">
            <form action="">
                <div class="form-group-add">
                    <label class="form-label">Nama</label>
                    <input type="text" class="form-control" placeholder="Nama Lengkap">
                </div>
                <div class="form-group-add">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Email Aktif">
                </div>
                <div class="form-group-add">
                    <label class="form-label">Nomor Telepon</label>
                    <input type="tel" class="form-control" placeholder="+62*****">
                </div>
                <div class="form-group-add">
                    <label class="form-label">Jabatan</label>
                    <input type="text" class="form-control" placeholder="Posisi Kerja Saat ini">
                </div>
                <div class="form-group-add">
                    <label class="form-label">Profil Linkedin</label>
                    <input type="url" class="form-control" placeholder="Link Linkedin">
                </div>
                <div class="form-group-add">
                    <label class="form-label">Nama dan Alamat Perusahaan</label>
                    <input type="text" class="form-control" placeholder="Nama, Alamat, Perusahaan Tempat kerja saat ini">
                </div>
                <button type="submit" class="button btn-primary-mer">Submit</button>
            </form>
        </div>
    </div>

@endsection

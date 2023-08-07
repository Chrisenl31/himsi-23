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
            <h4>Berikut adalah form edit data alumni</h4>
        </div>
        <img src="{{ url('assets/image/mercusuar/logo-mercusuar.png') }}" alt="" class="adm-login__ornament-merc">
        <div class="add-box">
            <form action="/admin/alumni/edit" method="post">
                @csrf
                <input name="id" type="hidden" value="{{ $id }}">
                <div class="form-group-add">
                    <label class="form-label">Nama</label>
                    <input name="nama" type="text" class="form-control" placeholder="Nama Lengkap" value="{{ $nama }}">
                </div>
                <div class="form-group-add">
                    <label class="form-label">Angkatan</label>
                    <select name="angkatan" class="form-control-plaintext">
                        <option value="2008" {{ ($angkatan == '2008' ? "selected" : "") }}>2008</option>
                        <option value="2009" {{ ($angkatan == '2009' ? "selected" : "") }}>2009</option>
                        <option value="2010" {{ ($angkatan == '2010' ? "selected" : "") }}>2010</option>
                        <option value="2011" {{ ($angkatan == '2011' ? "selected" : "") }}>2011</option>
                        <option value="2012" {{ ($angkatan == '2012' ? "selected" : "") }}>2012</option>
                        <option value="2013" {{ ($angkatan == '2013' ? "selected" : "") }}>2013</option>
                        <option value="2014" {{ ($angkatan == '2014' ? "selected" : "") }}>2014</option>
                        <option value="2015" {{ ($angkatan == '2015' ? "selected" : "") }}>2015</option>
                        <option value="2016" {{ ($angkatan == '2016' ? "selected" : "") }}>2016</option>
                        <option value="2017" {{ ($angkatan == '2017' ? "selected" : "") }}>2017</option>
                        <option value="2018" {{ ($angkatan == '2018' ? "selected" : "") }}>2018</option>
                        <option value="2019" {{ ($angkatan == '2019' ? "selected" : "") }}>2019</option>
                        <option value="2020" {{ ($angkatan == '2020' ? "selected" : "") }}>2020</option>
                    </select>
                </div>
                <div class="form-group-add">
                    <label class="form-label">Email</label>
                    <input name="email" type="email" class="form-control" placeholder="Email Aktif" value="{{ $email }}">
                </div>
                <div class="form-group-add">
                    <label class="form-label">Nomor Telepon</label>
                    <input name="telp" type="tel" class="form-control" placeholder="+62*****" value="{{ $telp }}">
                </div>
                <div class="form-group-add">
                    <label class="form-label">Jabatan</label>
                    <input name="jabatan" type="text" class="form-control" placeholder="Posisi Kerja Saat ini" value="{{ $pekerjaan }}">
                </div>
                <div class="form-group-add">
                    <label class="form-label">Profil Linkedin</label>
                    <input name="linkedin" type="url" class="form-control" placeholder="Link Linkedin" value="{{ $linkedin }}">
                </div>
                <div class="form-group-add">
                    <label class="form-label">Nama dan Alamat Perusahaan</label>
                    <input name="perusahaan" type="text" class="form-control" placeholder="Nama, Alamat, Perusahaan Tempat kerja saat ini" value="{{ $perusahaan }}">
                </div>
                <button type="submit" class="button btn-primary-mer">Submit</button>
            </form>
        </div>
    </div>

@endsection

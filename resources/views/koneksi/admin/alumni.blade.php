@extends('template.koneksi.template-admin')

@section('title')
    Halo, {{ Auth::User()->name }}
@endsection
@section('seo-desc', ''){{-- ini buat deskripsi seo --}}
@section('seo-img', '') {{-- ini buat gambar seo --}}

@section('bodyclass', '') {{-- kalo butuh class buat body --}}
@section('container', 'adm-alumniadd')


@section('content')

    @livewire('show-alumni')

@endsection



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

@extends('template.koneksi.template')

@section('title')
    Kritik Saran untuk HIMSI
@endsection
@section('seo-desc', ''){{-- ini buat deskripsi seo --}}
@section('seo-img', '') {{-- ini buat gambar seo --}}

@section('bodyclass', '') {{-- kalo butuh class buat body --}}
@section('container', 'krisar')

@section('content')
    <div class="krisar__title-section">
        <h1 class="midnight-blue">Kritik dan Saran</h1>
        <p>Kami akan menampung aspirasi kinerja yang kalian berikan dalam kritik saran. Pilih bidang yang diinginkan dan
            kami akan menindaklanjutin tanggapan kalian.</p>
    </div>

    <div class="krisar__opsi">
        <div class="krisar__card" data-bidang="bph">
            <img src="{{ url('assets/img/mercusuar/BPH.svg') }}" width="60px">
            <p class="midnight-blue">Badan Pengurus Harian</p>
        </div>
        <div class="krisar__card" data-bidang="kestari">
            <img src="{{ url('assets/img/mercusuar/Kestari.svg') }}" width="60px">
            <p class="midnight-blue">Kewirausahaan dan Inventaris</p>
        </div>
        <div class="krisar__card" data-bidang="psdm">
            <img src="{{ url('assets/img/mercusuar/PSDM.svg') }}" width="60px">
            <p class="midnight-blue">Pengembangan Sumber Daya Mahasiswa</p>
        </div>
        <div class="krisar__card" data-bidang="hublu">
            <img src="{{ url('assets/img/mercusuar/Hublu.svg') }}" width="60px">
            <p class="midnight-blue">Hubungan Luar</p>
        </div>
        <div class="krisar__card" data-bidang="sera">
            <img src="{{ url('assets/img/mercusuar/Sera.svg') }}" width="60px">
            <p class="midnight-blue">Seni dan Olahraga</p>
        </div>
        <div class="krisar__card" data-bidang="media">
            <img src="{{ url('assets/img/mercusuar/Media.svg') }}" width="60px">
            <p class="midnight-blue">Media</p>
        </div>
        <div class="krisar__card" data-bidang="akademik">
            <img src="{{ url('assets/img/mercusuar/Akademik.svg') }}" width="60px">
            <p class="midnight-blue">Akademik</p>
        </div>
        <div class="krisar__card" data-bidang="ristek">
            <img src="{{ url('assets/img/mercusuar/Ristek.svg') }}" width="60px">
            <p class="midnight-blue">Riset dan Teknologi</p>
        </div>
    </div>

    {{-- modalss --}}
    <div class="krisar__dialog dialog dialog__card">
        <div class="krisar__dialog-left">
            <div class="krisar__dialog-title-section">
                <img src="{{ url('assets/img/bidang-bph.png') }}" alt="" class="krisar__dialog-img" height="60px" style="margin-right: 5px">
                <h3 class="midnight-blue krisar__dialog-title">Badan Pengurus Harian</h3>
            </div>
            <p class="grey krisar__dialog-desc"></p>
        </div>
        <form action="{{ route('kritik.submit') }}" method="post" class="krisar__dialog-right">
            <h4 class="midnight-blue">Kritik dan Saran untuk <span class="krisar__dialog-akronim">BPH</span></h4>

            @csrf
            <input type="hidden" name="bidang" id="kritik-nama-bidang" value="">
            <textarea name="krisar" rows="10" class="form__control-box"></textarea>


            <div class="dialog__btns">
                <button type="button" class="btn-close btn-secondary">Cancel</button>
                <button type="submit" class="btn-primary">Submit</button>
            </div>
        </form>
    </div>

    <div class="dialog__bg"></div>
@endsection

@section('extrajs')
    <script>
    const data = {
        "bph": {
            "nama" : "Badan Pengurus Harian",
            "akronim": "BPH",
            "desc": "Badan Pengurus Harian (BPH) merupakan badan yang melakukan fungsi kontrol, koordinasi, dan bertanggung jawab dalam sistem manajemen administrasi dan keuangan serta komunikasi dalam membbangun hubungan internal dan eksternal kepengurusan.",
            "img": "{{ url('assets/img/mercusuar/BPH.svg') }}"
        },

        "kestari": {
            "nama" : "Kewirausahaan dan Inventaris",
            "akronim": "Kestari",
            "desc": "Bidang KESTARI merupakan bidang yang bertanggung jawab atas kegiatan kewirausahaan dalam menambah pemasukan kas HIMSI serta pengelolaan sarana dan prasarana di kesekretariatan HIMSI UNAIR.",
            "img": "{{ url('assets/img/mercusuar/Kestari.svg') }}"
        },

        "psdm": {
            "nama" : "Pengembangan Sumber Daya Mahasiswa",
            "akronim": "PSDM",
            "desc": "Bidang PSDM merupakan salah satu bidang yang mempunyai peran penting dalam koordinasi maupun optimalisasi terhadap sumber daya mahasiswa S1 Sistem Informasi UNAIR. Bidang PSDM terdiri dari 2 divisi yang mempunyai fokusnya masing-masing, yaitu Divisi Kaderisasi dan Divisi Personalia.",
            "img": "{{ url('assets/img/mercusuar/PSDM.svg') }}"
        },

        "hublu": {
            "nama" : "Hubungan Luar",
            "akronim": "Hublu",
            "desc": "Bidang Hubungan Luar (Hublu) merupakan bidang yang mempunyai tanggung jawab dalam menjembatani pihak eksternal dengan internal HIMSI Unair. Hublu bertugas menerima informasi yang kemudian diolah, serta disebarkan ke ranah internal maupun eksternal sehingga hal ini membuat Hublu menjadi pintu informasi utama di HIMSI Unair.",
            "img": "{{ url('assets/img/mercusuar/Hublu.svg') }}"
        },

        "sera": {
            "nama" : "Seni dan Olahraga",
            "akronim": "Sera",
            "desc": "Bidang Sera merupakan bidang yang bertanggung jawab untuk mewadahi dan memfasilitasi minat dan bakat warga S1 Sistem Informasi UNAIR di bidang non akademik khususnya dalam seni dan olahraga.",
            "img": "{{ url('assets/img/mercusuar/Sera.svg') }}"
        },

        "media": {
            "nama" : "Media",
            "akronim": "Media",
            "desc": "Bidang Media merupakan bidang yang bertanggung jawab atas segala bentuk editing desain grafis, video, dan audio serta bertanggung jawab atas pengelolaan media sosial HIMSI UNAIR sebagai sarana informasi untuk warga S1 Sistem Informasi UNAIR dan pihak eksternal.",
            "img": "{{ url('assets/img/mercusuar/Media.svg') }}"
        },

        "akademik": {
            "nama" : "Akademik",
            "akronim": "Akademik",
            "desc": "Bidang akademik merupakan bidang yang bekerja dalam lingkup peningkatan kualitas akademik dan pendampingan dalam pengembangan prestasi mahasiswa S1 Sistem Informasi UNAIR.",
            "img": "{{ url('assets/img/mercusuar/Akademik.svg') }}"
        },

        "ristek": {
            "nama" : "Riset dan Teknologi",
            "akronim": "Ristek",
            "desc": "Bidang Ristek merupakan bidang yang berperan dalam mengembangkan minat dan bakat di bidang teknologi, menyediakan wadah informasi seputar keprofesian serta memotivasi mahasiswa S1 Sistem Informasi Unair.",
            "img": "{{ url('assets/img/mercusuar/Ristek.svg') }}"
        },
    }


    $('.krisar__card').click(e => {
        $('.krisar__dialog')[0].classList.add('active')
        $('.dialog__bg')[0].classList.add('active')

        switch (e.currentTarget.dataset.bidang) {
            case 'bph':
                $('.krisar__dialog-title')[0].innerHTML = data.bph.nama;
                $('.krisar__dialog-desc')[0].innerHTML = data.bph.desc;
                $('.krisar__dialog-akronim')[0].innerHTML = data.bph.akronim;
                $('#kritik-nama-bidang')[0].value = 'BPH';
                $('.krisar__dialog-img')[0].setAttribute("src", data.bph.img)
                break;
            case 'kestari':
                $('.krisar__dialog-title')[0].innerHTML = data.kestari.nama;
                $('.krisar__dialog-desc')[0].innerHTML = data.kestari.desc;
                $('.krisar__dialog-akronim')[0].innerHTML = data.kestari.akronim;
                $('#kritik-nama-bidang')[0].value = 'KESTARI';
                $('.krisar__dialog-img')[0].setAttribute("src", data.kestari.img)
                break;
            case 'psdm':
                $('.krisar__dialog-title')[0].innerHTML = data.psdm.nama;
                $('.krisar__dialog-desc')[0].innerHTML = data.psdm.desc;
                $('.krisar__dialog-akronim')[0].innerHTML = data.psdm.akronim;
                $('#kritik-nama-bidang')[0].value = 'PSDM';
                $('.krisar__dialog-img')[0].setAttribute("src", data.psdm.img)
                break;
            case 'hublu':
                $('.krisar__dialog-title')[0].innerHTML = data.hublu.nama;
                $('.krisar__dialog-desc')[0].innerHTML = data.hublu.desc;
                $('.krisar__dialog-akronim')[0].innerHTML = data.hublu.akronim;
                $('#kritik-nama-bidang')[0].value = 'HUBLU';
                $('.krisar__dialog-img')[0].setAttribute("src", data.hublu.img)
                break;
            case 'sera':
                $('.krisar__dialog-title')[0].innerHTML = data.sera.nama;
                $('.krisar__dialog-desc')[0].innerHTML = data.sera.desc;
                $('.krisar__dialog-akronim')[0].innerHTML = data.sera.akronim;
                $('#kritik-nama-bidang')[0].value = 'SERA';
                $('.krisar__dialog-img')[0].setAttribute("src", data.sera.img)
                break;
            case 'media':
                $('.krisar__dialog-title')[0].innerHTML = data.media.nama;
                $('.krisar__dialog-desc')[0].innerHTML = data.media.desc;
                $('.krisar__dialog-akronim')[0].innerHTML = data.media.akronim;
                $('#kritik-nama-bidang')[0].value = 'MEDIA';
                $('.krisar__dialog-img')[0].setAttribute("src", data.media.img)
                break;
            case 'akademik':
                $('.krisar__dialog-title')[0].innerHTML = data.akademik.nama;
                $('.krisar__dialog-desc')[0].innerHTML = data.akademik.desc;
                $('.krisar__dialog-akronim')[0].innerHTML = data.akademik.akronim;
                $('#kritik-nama-bidang')[0].value = 'AKADEMIK';
                $('.krisar__dialog-img')[0].setAttribute("src", data.akademik.img)
                break;
            case 'ristek':
                $('.krisar__dialog-title')[0].innerHTML = data.ristek.nama;
                $('.krisar__dialog-desc')[0].innerHTML = data.ristek.desc;
                $('.krisar__dialog-akronim')[0].innerHTML = data.ristek.akronim;
                $('#kritik-nama-bidang')[0].value = 'RISTEK';
                $('.krisar__dialog-img')[0].setAttribute("src", data.ristek.img)
                break;
            default:
                break;
        }
    })
    </script>
@endsection

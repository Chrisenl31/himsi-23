<div class="nav">
    {{-- Nav Mobile --}}
    <div class="nav__mobile">
        <div class="nav__mobile__left">
            <img onclick="location.href = '{{ route('home') }}'" src="{{ url('assets/image/logo.svg') }}" alt=""
                style="transform:scale(1.5)">
            <img onclick="location.href = '{{ route('about-us') }}'"
                src="{{ url('assets/image//kalibraksi/logo-kalibraksi-notitle-1.jpg') }}" alt=""
                style="transform:scale(2.2)">
        </div>
        <div class="nav__burger">
            <span class="line"></span>
            <span class="line"></span>
        </div>
    </div>

    {{-- Nav Dekstop --}}
    <div class="nav__group">
        <div class="nav__left">
            <img onclick="location.href = '{{ route('home') }}'" src="{{ url('assets/image/logo.svg') }}" alt=""
                width="45px">
            <img onclick="location.href = '{{ route('about-us') }}'"
                src="{{ url('assets/image//kalibraksi/logo-kalibraksi.png') }}" alt="" width="150px">
        </div>
        <div class="nav__menu">
            <a href="{{ route('about-us') }}" class="nav__item">About Us</a>
            <button class="dropdown">Feature</button>
            <div class="dropdown__content">
                <a href="{{ route('akademik') }}" class="nav__item">Akademik</a>
                <a href="{{ route('f.form.index') }}" class="nav__item">Form</a>
                <a href="{{ route('curhat.index') }}" class="nav__item">Curhat - CHSI</a>
                <a href="{{ route('kritik.index') }}" class="nav__item">Kritik Saran</a>
            </div>
        </div>
    </div>

</div>

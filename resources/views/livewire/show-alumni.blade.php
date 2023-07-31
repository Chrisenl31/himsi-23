<div>
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
                    <input wire:model="search" type="search" class="search__bar__input" placeholder="Telusuri Data Alumni">
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

                    @foreach ($alumnis as $entry)
                    <tr>
                        <td>{{ $entry["nama"] }}</td>
                        <td><a href="//{{ $entry["linkedin"] }}">linkedin</a></td>
                        <td>{{ $entry["email"] }}</td>
                        <td>{{ $entry["pekerjaan"] }}</td>
                        <td>
                            <div class="icons">
                                <button class="show-info" type="button" id="show-info-{{ $loop->iteration }}"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-delete.svg') }}"></button>
                            </div>

                        </td>
                    </tr>
                    {{-- modal --}}
                    <dialog class="modal-box" id="modal-box-{{ $loop->iteration }}">
                        <div class="modal-box__wrapper">
                            <h2>Detail Info</h2>
                            <div class="detail-info">
                                <div class="field">
                                    <div class="field-left">
                                        <div class="form-group-detail">
                                            <label class="form-label" for="name">Nama</label>
                                            <span id="name" class="form-control-plaintext">{{ $entry["nama"] }}</span>
                                        </div>
                                        <div class="form-group-detail">
                                            <label class="form-label">Email</label>
                                            <span class="form-control-plaintext">{{ $entry["email"] }}</span>
                                        </div>
                                        <div class="form-group-detail">
                                            <label class="form-label">Nomor Telepon</label>
                                            <span class="form-control-plaintext">{{ $entry["telp"] }}</span>
                                        </div>
                                    </div>
                                    <div class="field-right">
                                        <div class="form-group-detail">
                                            <label class="form-label">Jabatan</label>
                                            <span class="form-control-plaintext">{{ $entry["pekerjaan"] }}</span>
                                        </div>
                                        <div class="form-group-detail">
                                            <label class="form-label">Profil Linkedin</label>
                                            <span class="form-control-plaintext">{{ $entry["linkedin"] }}</span>
                                        </div>
                                        <div class="form-group-detail">
                                            <label class="form-label">Nama dan Alamat Perusahaan</label>
                                            <span class="form-control-plaintext">{{ $entry["perusahaan"] }}</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="buttons">
                                <button type="button" class="close-btn">Close</button>
                            </div>
                        </div>
                    </dialog>
                    @endforeach
                </table>
            </div>
        </div>
        {{-- Pagination --}}
        {{ $alumnis->links('livewire.custom-pagination') }}

    </main>
</div>


    <script>


            @foreach ($alumnis as $entry)
            var btn{{ $loop->iteration }} = document.getElementById('show-info-{{ $loop->iteration }}')
            var dialog{{ $loop->iteration }} = document.getElementById('modal-box-{{ $loop->iteration }}')
            btn{{ $loop->iteration }}.addEventListener("click", (event) => {
                    event.stopPropagation()
                    dialog{{ $loop->iteration }}.showModal();
                });

            @endforeach

            const body = document.querySelector("body");
            body.addEventListener("click", function(e)
            {
                document.querySelector("[open='']").close()
            });

            const close = document.querySelectorAll(".close-btn");
            close.forEach(function(closeBtn)
            {
                closeBtn.addEventListener("click", (event) => {
                    document.querySelector("[open='']").close()
                })
            })




        /*document.addEventListener("DOMContentLoaded", function() {
            const btns = document.querySelectorAll(".show-info");
            const modal = document.querySelector(".modal-box");
            const close = document.querySelector(".close-btn");
            const body = document.querySelector("body");

            btns.forEach(function(btn)
            {
                btn.addEvsentListener("click", (event) => {
                    event.stopPropagation()
                    modal.showModal();
                });
            });

        });*/
    </script>


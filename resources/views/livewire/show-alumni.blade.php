<div>
    <main class="main">
        <div class="list">
            {{-- Search bar --}}
            <form class="search" autocomplete="off">
                <div class="headline">
                    <div class="headline__wrapper">
                        <h4 class="headline__title">Data Alumni</h4>
                        <label for="tahun">
                            <select wire:model="angkatan" name="tahun" id="" class="headline__dropdown">
                                <option value="">Semua</option>
                                <option value="2008">2008</option>
                                <option value="2019">2019</option>
                                <option value="2018">2018</option>
                                <option value="2017">2017</option>
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
                    <tr wire:key="row-{{ $entry['id'] }}">
                        <td>{{ $entry["nama"] }}</td>
                        <td><a href="//{{ $entry["linkedin"] }}">linkedin</a></td>
                        <td>{{ $entry["email"] }}</td>
                        <td>{{ $entry["pekerjaan"] }}</td>
                        <td>
                            <div class="icons" wire:key="icons-{{ $entry['id'] }}">

                                {{-- tombol show info --}}
                                <button onclick="buttonShowInfo(this)" class="show-info" type="button" id="show-info-{{ $entry['id'] }}" modal-id="modal-box-{{ $entry['id'] }}"><img
                                        src="{{ url('assets/img/alumni-info.svg') }}"></button>
                                <button type="button"><img src="{{ url('assets/img/alumni-edit.svg') }}"></button>
                                {{-- remove --}}
                                <form method="post" action="{{ url("/admin/alumni/remove") }}" wire:key="form-{{ $entry['id'] }}" id="form-{{ $entry['id'] }}">
                                    @csrf
                                    <input name="id" type="hidden" value="{{ $entry['id'] }}" wire:key="value-{{ $entry['id'] }}">
                                    {{-- tombol remove --}}
                                    <div onclick="buttonRemove(this)" id="btn-remove-{{ $entry['id'] }}" modal-id="remove-modal-{{ $entry['id'] }}" form-id="form-{{ $entry['id'] }}"><img src="{{ url('assets/img/alumni-delete.svg') }}"></div>
                                </form>
                            </div>

                        </td>
                    </tr>

                    {{-- modals show info --}}
                    <dialog class="modal-box" id="modal-box-{{ $entry['id'] }}" wire:key="dialog-{{ $entry['id'] }}">
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
                                    <button onclick="closeModal(this)" type="button" class="close-btn" modal-id="modal-box-{{ $entry['id'] }}">Close</button>
                                </div>
                        </div>
                    </dialog>


                    {{-- modals remove --}}
                    <dialog class="modal-box" id="remove-modal-{{ $entry['id'] }}">
                        <div class="modal-box__remove">
                            <div class="modal-box__wrapper">
                                <h2>Remove Data</h2>
                                <p>Apakah anda yakin ingin menghapus data ini?</p>
                                <div class="buttons">
                                    <button type="button" class="cancel-btn">Cancel</button>
                                    <button type="button" class="remove-btn">Remove</button>
                                </div>
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
    <script>

        // script buat permodalan dan dialog remove alumni
        function buttonRemove(element) {
            var modal_id = element.getAttribute('modal-id');
            var modal = document.getElementById(modal_id);

            var form_id = element.getAttribute('form-id');
            var form = document.getElementById(form_id);

            modal.showModal();

            var dialog = $('#'+modal_id)

            dialog.find('.cancel-btn').click(function() {
                dialog.get()[0].close();

            });
            dialog.find('.remove-btn').click(function() {
                dialog.get()[0].close();
                form.submit();

            });
        }

        function buttonShowInfo(element) {
            var modal_id = element.getAttribute('modal-id');
            var modal = document.getElementById(modal_id);
            modal.showModal();
        }

        function closeModal(element) {
            var modal_id = element.getAttribute('modal-id');
            var modal = document.getElementById(modal_id);
            modal.close();
        }
// script buat permodalan dan dialog remove alumni
{{--
            /*function dialog(modal, form) {
                var dialog = $('#' + modal)
                var formRemove = $('#' + form)
                dialog.get()[0].showModal()

                dialog.find('.cancel-btn').click(function() {
                    dialog.get()[0].close();

                });
                dialog.find('.remove-btn').click(function() {
                    dialog.get()[0].close();
                    formRemove.get()[0].submit();

                });
            }

            @foreach ($alumnis as $entry)
            //tombolnya
            var btn{{ $entry['id'] }} = document.getElementById('show-info-{{ $entry['id'] }}')
            var btnRemove{{ $entry['id'] }} = document.getElementById('btn-remove-{{ $entry['id'] }}')
            var form{{ $entry['id'] }} = document.getElementById('form-{{ $entry['id'] }}')
            //modalnya
            var dialog{{ $entry['id'] }} = document.getElementById('modal-box-{{ $entry['id'] }}')
            var dialogRemove{{ $entry['id'] }} = document.getElementById('remove-modal-{{ $entry['id'] }}')

            btn{{ $entry['id'] }}.addEventListener("click", (event) => {
                    event.stopPropagation();
                    dialog{{ $entry['id'] }}.showModal();
                });

            btnRemove{{ $entry['id'] }}.addEventListener("click", (event) => {
                    event.stopPropagation()
                    dialog('remove-modal-{{ $entry['id'] }}', 'form-{{ $entry['id'] }}')
                });

            @endforeach

            const body = document.querySelector("body");
            body.addEventListener("click", function(e)
            {
                if(document.querySelector("[open='']") != null)
                {
                    document.querySelector("[open='']").close()
                }
            });

            const close = document.querySelectorAll(".close-btn");
            close.forEach(function(closeBtn)
            {
                closeBtn.addEventListener("click", (event) => {
                    document.querySelector("[open='']").close()
                })
            })*/
--}}


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
</div>





<x-default-layout>
    <!--begin::Shared Files-->
    <div class="card card-flush">
        <!--begin::Card header-->
        <div class="card-header align-items-center py-5 gap-2 gap-md-5">
            <!--begin::Card title-->
            <div class="card-title">
                <!--begin::Search-->
                <div class="d-flex align-items-center position-relative my-1">
                    <i class="ki-duotone ki-magnifier fs-3 position-absolute ms-4">
                        <span class="path1"></span>
                        <span class="path2"></span>
                    </i>
                    <input type="text" data-kt-shared-files-filter="search" class="form-control form-control-solid w-250px ps-12" placeholder="Search files" />
                </div>
                <!--end::Search-->
            </div>
            <!--end::Card title-->
            <!--begin::Card toolbar-->
            <div class="card-toolbar flex-row-fluid justify-content-end gap-5">
                <div class="card-toolbar gap-3">
                    <div id="kt_shared_files_export_buttons"></div>
                </div>
                @hasanyrole('admin|pjk_prov')
                <!--begin::Tambah file-->
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#modal_add_shared_file">
                    <i class="ki-duotone ki-plus fs-2 me-1"></i>
                    Tambah File
                </button>
                <!--end::Tambah file-->
                @endhasanyrole
            </div>
            <!--end::Card toolbar-->
        </div>
        <!--end::Card header-->
        <!--begin::Card body-->
        <div class="card-body pt-0">
            <!--begin::Table-->
            <table class="table align-middle table-row-dashed fs-6 gy-5" id="kt_shared_files_table">
                <thead>
                    <tr class="text-start text-gray-500 fw-bold fs-7 text-uppercase gs-0">
                        <th class="min-w-25px">No</th>
                        <th class="text-center min-w-100px">Nama File</th>
                        <th class="text-center min-w-70px">Jenis</th>
                        <th class="text-center min-w-100px">Download</th>
                        <th class="text-center min-w-100px">Tanggal</th>
                        <th class="text-center min-w-70px">Actions</th>
                    </tr>
                </thead>
                <tbody class="fw-semibold text-gray-600">
                    @foreach($data as $k => $d)
                    <tr>
                        <td class="text-center">{{ ($k+1) }}</td>
                        <td class="text-start ps-0">
                            <span class="fw-bold" data-kt-shared-files-filter="file_name">{{ $d->nama }}</span>
                        </td>
                        <td class="text-center">{{ $d->jenis }}</td>
                        <td class="text-center">
                            <a href="{{ asset('storage/'. $d->file_path) }}" class="btn btn-sm btn-light-primary" target="_blank">
                                <i class="ki-outline ki-file-down fs-5"></i>
                            </a>
                        </td>
                        <td class="text-center">{{ $d->updated_at }}</td>
                        <td class="text-end">
                            @if (auth()->check() && auth()->user()->hasAnyRole(['admin', 'pjk_prov']))
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-bs-toggle="modal" data-bs-target="#modal_edit_shared_file"
                                        data-id="{{ $d->id }}"
                                        data-nama="{{ $d->nama }}"
                                        data-file="{{ $d->file_path }}">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-shared-files-filter="delete_row"
                                        data-id="{{ $d->id }}"
                                        data-delete-url="{{ route('snlik.shared-files.destroy', $d->id) }}">
                                        Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
                            @else
                            -
                            @endif
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
            <!--end::Table-->
        </div>
        <!--end::Card body-->
    </div>
    <!--end::Shared Files-->

    <!--begin::Modals-->
    <!--begin::Modal Tambah File-->
    <div class="modal fade" id="modal_add_shared_file" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">

                <!--begin::Modal header-->
                <div class="modal-header">
                    <h2>Tambah File</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"></i>
                    </div>
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <form id="form_add_shared_file" enctype="multipart/form-data">
                        @csrf

                        <!-- Nama File -->
                        <div class="mb-5">
                            <label class="required form-label">Nama File</label>
                            <input type="text" name="nama"
                                class="form-control form-control-solid"
                                placeholder="Contoh: Surat Tugas Pendataan"
                                required>
                        </div>

                        <!-- Jenis File (opsional) -->
                        <div class="mb-5">
                            <label class="form-label">Jenis File</label>
                            <select name="jenis" class="form-select form-select-solid">
                                <option value="" hidden>-- Pilih Jenis --</option>
                                <option value="Format Template">Format Template</option>
                            </select>
                        </div>

                        <!-- Upload File -->
                        <div class="mb-5">
                            <label class="required form-label">Upload File</label>
                            <input type="file" name="file"
                                class="form-control form-control-solid"
                                accept=".pdf,.doc,.docx,.xls,.xlsx,.zip"
                                required>
                            <div class="form-text">
                                Format yang diizinkan: PDF, DOC, DOCX, XLS, XLSX, ZIP
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="text-center">
                            <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Simpan</span>
                            </button>
                        </div>

                    </form>
                </div>
                <!--end::Modal body-->

            </div>
        </div>
    </div>
    <!--end::Modal Tambah File-->
    <!--begin::Modal Edit File-->
    <div class=" modal fade" id="modal_edit_shared_file" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered mw-650px">
            <div class="modal-content">
                <!--begin::Modal header-->
                <div class="modal-header">
                    <h2>Edit File</h2>
                    <div class="btn btn-sm btn-icon btn-active-color-primary" data-bs-dismiss="modal">
                        <i class="ki-duotone ki-cross fs-1"></i>
                    </div>
                </div>
                <!--end::Modal header-->

                <!--begin::Modal body-->
                <div class="modal-body scroll-y mx-5 mx-xl-15 my-7">
                    <form id="form_edit_shared_file" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')

                        <input type="hidden" name="id" id="edit_file_id">

                        <!-- Nama File -->
                        <div class="mb-5">
                            <label class="required form-label">Nama File</label>
                            <input type="text" name="nama" id="edit_nama"
                                class="form-control form-control-solid" required>
                        </div>

                        <!-- File Lama -->
                        <div class="mb-5">
                            <label class="form-label">File Saat Ini</label>
                            <div id="old_file_wrapper">
                                <a href="#" target="_blank"
                                    id="old_file_link"
                                    class="btn btn-sm btn-light-primary">
                                    <i class="ki-outline ki-file-down fs-5 me-1"></i>
                                    Lihat File
                                </a>
                            </div>
                        </div>

                        <!-- Upload Baru -->
                        <div class="mb-5">
                            <label class="form-label">Upload File Baru (opsional)</label>
                            <input type="file" name="file"
                                class="form-control form-control-solid"
                                accept=".pdf,.doc,.docx,.xls,.xlsx">
                            <div class="form-text">
                                Kosongkan jika tidak ingin mengganti file
                            </div>
                        </div>

                        <!-- Actions -->
                        <div class="text-center">
                            <button type="button" class="btn btn-light me-3" data-bs-dismiss="modal">
                                Cancel
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <span class="indicator-label">Simpan</span>
                            </button>
                        </div>
                    </form>
                </div>
                <!--end::Modal body-->
            </div>
        </div>
    </div>
    <!--end::Modal Edit File-->
    <!--end::Modals-->


    @push('scripts')
    <script src="{{ asset('assets/js/custom/pages/shared_files.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script>
        "use strict";

        // isi modal saat klik Edit
        document.addEventListener('click', function(e) {
            const btn = e.target.closest('[data-bs-target="#modal_edit_shared_file"]');
            if (!btn) return;

            document.getElementById('edit_file_id').value = btn.dataset.id;
            document.getElementById('edit_nama').value = btn.dataset.nama;

            const oldFileLink = document.getElementById('old_file_link');
            if (btn.dataset.file) {
                oldFileLink.href = `/storage/${btn.dataset.file}`;
                oldFileLink.classList.remove('d-none');
            } else {
                oldFileLink.classList.add('d-none');
            }
        });

        // submit ajax
        $('#form_edit_shared_file').on('submit', function(e) {
            e.preventDefault();

            const form = this;
            const formData = new FormData(form);
            formData.append('_method', 'PUT');
            const id = $('#edit_file_id').val();
            const urlTemplate = "{{ route('snlik.shared-files.update', ['id' => '__id__']) }}";
            const url = urlTemplate.replace('__id__', id);

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                processData: false,
                contentType: false,
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                beforeSend: function() {
                    Swal.fire({
                        title: 'Menyimpan...',
                        allowOutsideClick: false,
                        didOpen: () => Swal.showLoading()
                    });
                },
                success: function(res) {
                    Swal.fire({
                        icon: 'success',
                        text: res.message ?? 'File berhasil diperbarui',
                        confirmButtonText: 'OK'
                    }).then(() => {
                        location.reload(); // atau update row tanpa reload
                    });
                },
                error: function(xhr) {
                    let msg = 'Terjadi kesalahan';
                    if (xhr.responseJSON?.message) {
                        msg = xhr.responseJSON.message;
                    }

                    Swal.fire({
                        icon: 'error',
                        text: msg
                    });
                }
            });
        });

        $('#form_add_shared_file').on('submit', function(e) {
            e.preventDefault();

            const formData = new FormData(this);

            $.ajax({
                url: "{{ route('snlik.shared-files.store') }}",
                type: "POST",
                data: formData,
                processData: false,
                contentType: false,
                beforeSend: function() {
                    Swal.fire({
                        title: 'Menyimpan...',
                        allowOutsideClick: false,
                        didOpen: () => Swal.showLoading()
                    });
                },
                success: function(res) {
                    Swal.fire({
                        icon: 'success',
                        text: res.message ?? 'File berhasil ditambahkan'
                    }).then(() => {
                        location.reload(); // atau insert row DataTable
                    });
                },
                error: function(xhr) {
                    Swal.fire({
                        icon: 'error',
                        text: xhr.responseJSON?.message ?? 'Gagal menyimpan file'
                    });
                }
            });
        });
    </script>

    @endpush
</x-default-layout>
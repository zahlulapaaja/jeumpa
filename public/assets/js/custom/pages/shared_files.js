"use strict";

var KTAppSharedFiles = (function () {
    var tableEl;
    var datatable;

    var handleDeleteRows = function () {
        tableEl
            .querySelectorAll('[data-kt-shared-files-filter="delete_row"]')
            .forEach((btn) => {
                btn.addEventListener("click", function (e) {
                    e.preventDefault();

                    const row = e.target.closest("tr");
                    const fileName = row.querySelector(
                        '[data-kt-shared-files-filter="file_name"]'
                    ).innerText;

                    const id = btn.dataset.id; // ⬅ ambil ID dari tombol

                    Swal.fire({
                        text: "Yakin ingin menghapus file " + fileName + "?",
                        icon: "warning",
                        showCancelButton: true,
                        buttonsStyling: false,
                        confirmButtonText: "Ya, hapus",
                        cancelButtonText: "Batal",
                        customClass: {
                            confirmButton: "btn fw-bold btn-danger",
                            cancelButton: "btn fw-bold btn-light",
                        },
                    }).then(function (result) {
                        if (!result.isConfirmed) return;
                        const url = btn.dataset.deleteUrl;

                        $.ajax({
                            url: url,
                            type: "DELETE",
                            data: {
                                _token: $('meta[name="csrf-token"]').attr('content')
                            },
                            beforeSend: function () {
                                Swal.fire({
                                    title: "Menghapus...",
                                    allowOutsideClick: false,
                                    didOpen: () => Swal.showLoading(),
                                });
                            },
                            success: function (res) {
                                Swal.fire({
                                    icon: "success",
                                    text:
                                        res.message ?? "File berhasil dihapus",
                                });

                                // 🔥 hapus row tanpa reload
                                datatable.row($(row)).remove().draw();
                            },
                            error: function () {
                                Swal.fire({
                                    icon: "error",
                                    text: "Gagal menghapus file",
                                });
                            },
                        });
                    });
                });
            });
    };

    return {
        init: function () {
            tableEl = document.querySelector("#kt_shared_files_table");
            if (!tableEl) return;

            datatable = $(tableEl).DataTable({
                info: false,
                order: [],
                pageLength: 10,
                buttons: [
                    {
                        extend: 'excel',
                        text: '<i class="ki-outline ki-file-down fs-5"></i> Excel',
                        className: 'btn btn-sm btn-light-success',
                        exportOptions: { columns: [0,1,2,4] }
                    },
                    {
                        extend: 'print',
                        text: '<i class="ki-outline ki-printer fs-5"></i> Print',
                        className: 'btn btn-sm btn-light-primary',
                        exportOptions: { columns: [0,1,2,4] }
                    }
                ],    
                columnDefs: [{ orderable: false, targets: [0, 3, 5] }],
            });
            datatable.buttons().container()
                .appendTo('#kt_shared_files_export_buttons');

            // search
            document
                .querySelector('[data-kt-shared-files-filter="search"]')
                .addEventListener("keyup", function (e) {
                    datatable.search(e.target.value).draw();
                });

            datatable.on("draw", function () {
                handleDeleteRows();
            });

            handleDeleteRows();
        },
    };
})();

KTUtil.onDOMContentLoaded(function () {
    KTAppSharedFiles.init();
});

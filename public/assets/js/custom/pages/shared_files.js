"use strict";

var KTAppSharedFiles = (function () {
    var tableEl;
    var datatable;

    var handleDeleteRows = function () {
        tableEl.querySelectorAll(
            '[data-kt-shared-files-filter="delete_row"]'
        ).forEach((btn) => {
            btn.addEventListener("click", function (e) {
                e.preventDefault();

                const row = e.target.closest("tr");
                const fileName = row.querySelector(
                    '[data-kt-shared-files-filter="file_name"]'
                ).innerText;

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
                    if (result.isConfirmed) {
                        datatable.row($(row)).remove().draw();
                    }
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
                columnDefs: [
                    { orderable: false, targets: [0, 3, 5] },
                ],
            });

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

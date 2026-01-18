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
                <!--begin::Tambah file-->
                <a href="#" class="btn btn-primary">Tambah File</a>
                <!--end::Tambah file-->
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
                            <a href="#"
                                class="btn btn-sm btn-light-primary">
                                <i class="ki-outline ki-file-down fs-5"></i>
                            </a>
                        </td>
                        <td class="text-center">{{ $d->updated_at }}</td>
                        <td class="text-end">
                            <a href="#" class="btn btn-sm btn-light btn-flex btn-center btn-active-light-primary" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">Actions
                                <i class="ki-duotone ki-down fs-5 ms-1"></i></a>
                            <!--begin::Menu-->
                            <div class="menu menu-sub menu-sub-dropdown menu-column menu-rounded menu-gray-600 menu-state-bg-light-primary fw-semibold fs-7 w-125px py-4" data-kt-menu="true">
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3">Edit</a>
                                </div>
                                <!--end::Menu item-->
                                <!--begin::Menu item-->
                                <div class="menu-item px-3">
                                    <a href="#" class="menu-link px-3" data-kt-shared-files-filter="delete_row">Delete</a>
                                </div>
                                <!--end::Menu item-->
                            </div>
                            <!--end::Menu-->
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

    @push('scripts')
    <script src="{{ asset('assets/js/custom/pages/shared_files.js') }}"></script>
    <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    @endpush
</x-default-layout>
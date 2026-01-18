<!--begin::Aside-->
<div id="kt_aside" class="aside aside-extended" data-kt-drawer="true" data-kt-drawer-name="aside" data-kt-drawer-activate="{default: true, lg: false}" data-kt-drawer-overlay="true" data-kt-drawer-width="auto" data-kt-drawer-direction="start" data-kt-drawer-toggle="#kt_aside_mobile_toggle">
    <!--begin::Primary-->
    <div class="aside-primary d-flex flex-column align-items-lg-center flex-row-auto">
        <!--begin::Logo-->
        <div class="aside-logo d-none d-lg-flex flex-column align-items-center flex-column-auto py-10" id="kt_aside_logo">
            <a href="#">
                <img alt="Logo" src="{{ asset('assets/media/logos/demo7.svg') }}" class="h-35px" />
            </a>
        </div>
        <!--end::Logo-->
        <!--begin::Nav-->
        <div class="aside-nav d-flex flex-column align-items-center flex-column-fluid w-100 pt-5 pt-lg-0" id="kt_aside_nav">
            <!--begin::Wrapper-->
            <div class="hover-scroll-overlay-y mb-5 scroll-ms px-5" data-kt-scroll="true" data-kt-scroll-activate="{default: false, lg: true}" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_nav" data-kt-scroll-dependencies="#kt_aside_logo, #kt_aside_footer" data-kt-scroll-offset="0px">
                @include('layout.partials.aside._nav_menu')
            </div>
            <!--end::Nav-->
        </div>
        <!--end::Nav-->
        <!--begin::Footer-->
        <div class="aside-footer d-flex flex-column align-items-center flex-column-auto" id="kt_aside_footer">
            @include('layout.partials.aside._footer_menu')
        </div>
        <!--end::Footer-->
    </div>
    <!--end::Primary-->
    <!--begin::Secondary-->
    <div class="aside-secondary d-flex flex-row-fluid">
        <!--begin::Workspace-->
        <div class="aside-workspace my-5 p-5" id="kt_aside_wordspace">
            <div class="d-flex h-100 flex-column">
                <!--begin::Wrapper-->
                <div class="flex-column-fluid hover-scroll-y" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-wrappers="#kt_aside_wordspace" data-kt-scroll-dependencies="#kt_aside_secondary_footer" data-kt-scroll-offset="0px">
                    @include('layout.partials.aside._tab_content')
                </div>
                <!--end::Wrapper-->
                <!--begin::Footer-->
                <div class="flex-column-auto pt-10 px-5" id="kt_aside_secondary_footer">
                    <a href="https://preview.keenthemes.com/html/metronic/docs" class="btn btn-bg-light btn-color-gray-600 btn-flex btn-active-color-primary flex-center w-100" data-bs-toggle="tooltip" data-bs-custom-class="tooltip-dark" data-bs-trigger="hover" data-bs-offset="0,5" data-bs-dismiss-="click" title="200+ in-house components and 3rd-party plugins">
                        <span class="btn-label">Template Dokumen</span>
                        <i class="ki-duotone ki-document btn-icon fs-4 ms-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </a>
                </div>
                <!--end::Footer-->
            </div>
        </div>
        <!--end::Workspace-->
    </div>
    <!--end::Secondary-->
    <!--begin::Aside Toggle-->
    <button id="kt_aside_toggle" class="aside-toggle btn btn-sm btn-icon bg-body btn-color-gray-700 btn-active-primary position-absolute translate-middle start-100 end-0 bottom-0 shadow-sm d-none d-lg-flex mb-5" data-kt-toggle="true" data-kt-toggle-state="active" data-kt-toggle-target="body" data-kt-toggle-name="aside-minimize">
        <i class="ki-duotone ki-arrow-left fs-2 rotate-180">
            <span class="path1"></span>
            <span class="path2"></span>
        </i>
    </button>
    <!--end::Aside Toggle-->
</div>
<!--end::Aside-->
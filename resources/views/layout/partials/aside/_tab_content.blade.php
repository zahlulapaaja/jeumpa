<!--begin::Tab content-->
<div class="tab-content">
    <!--begin::Tab pane-->
    <div class="tab-pane fade active show" id="kt_aside_nav_tab_projects" role="tabpanel">
        <!--begin::Wrapper-->
        <div class="m-0">
            <!--begin::Toolbar-->
            <div class="d-flex mb-10 d-none">
                <!--begin::Search-->
                <div id="kt_header_search" class="header-search d-flex align-items-center w-100" data-kt-search-keypress="true" data-kt-search-min-length="2" data-kt-search-enter="enter" data-kt-search-layout="menu" data-kt-search-responsive="false" data-kt-menu-trigger="auto" data-kt-menu-permanent="true" data-kt-menu-placement="bottom-start">
                    <!--begin::Tablet and mobile search toggle-->
                    <div data-kt-search-element="toggle" class="search-toggle-mobile d-flex d-lg-none align-items-center">
                        <div class="d-flex">
                            <i class="ki-duotone ki-magnifier fs-1">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </div>
                    </div>
                    <!--end::Tablet and mobile search toggle-->
                    <!--begin::Form(use d-none d-lg-block classes for responsive search)-->
                    <form data-kt-search-element="form" class="d-none d-lg-block w-100 position-relative mb-5 mb-lg-0" autocomplete="off">
                        <!--begin::Hidden input(Added to disable form autocomplete)-->
                        <input type="hidden" />
                        <!--end::Hidden input-->
                        <!--begin::Icon-->
                        <i class="ki-duotone ki-magnifier search-icon fs-2 text-gray-500 position-absolute top-50 translate-middle-y ms-5">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                        <!--end::Icon-->
                        <!--begin::Input-->
                        <input type="text" class="search-input form-control form-control-solid ps-13" name="search" value="" placeholder="Search..." data-kt-search-element="input" />
                        <!--end::Input-->
                        <!--begin::Spinner-->
                        <span class="search-spinner position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-5" data-kt-search-element="spinner">
                            <span class="spinner-border h-15px w-15px align-middle text-gray-500"></span>
                        </span>
                        <!--end::Spinner-->
                        <!--begin::Reset-->
                        <span class="search-reset btn btn-flush btn-active-color-primary position-absolute top-50 end-0 translate-middle-y lh-0 d-none me-4" data-kt-search-element="clear">
                            <i class="ki-duotone ki-cross fs-2 fs-lg-1 me-0">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <!--end::Reset-->
                    </form>
                    <!--end::Form-->
                    <!--begin::Menu-->
                    <div data-kt-search-element="content" class="menu menu-sub menu-sub-dropdown py-7 px-7 overflow-hidden w-300px w-md-350px">
                        <!--begin::Wrapper-->
                        <div data-kt-search-element="wrapper">
                            <!--begin::Recently viewed-->
                            <div data-kt-search-element="results" class="d-none">
                                <!--begin::Items-->
                                <div class="scroll-y mh-200px mh-lg-350px">
                                    <!--begin::Category title-->
                                    <h3 class="fs-5 text-muted m-0 pb-5" data-kt-search-element="category-title">Users</h3>
                                    <!--end::Category title-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Karina Clark</span>
                                            <span class="fs-7 fw-semibold text-muted">Marketing Manager</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <img src="{{ asset('assets/media/avatars/300-2.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Olivia Bold</span>
                                            <span class="fs-7 fw-semibold text-muted">Software Engineer</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Ana Clark</span>
                                            <span class="fs-7 fw-semibold text-muted">UI/UX Designer</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <img src="{{ asset('assets/media/avatars/300-14.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Nick Pitola</span>
                                            <span class="fs-7 fw-semibold text-muted">Art Director</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <img src="{{ asset('assets/media/avatars/300-11.jpg') }}" alt="" />
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Edward Kulnic</span>
                                            <span class="fs-7 fw-semibold text-muted">System Administrator</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Category title-->
                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Customers</h3>
                                    <!--end::Category title-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="{{ asset('assets/media/svg/brand-logos/volicity-9.svg') }}" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Company Rbranding</span>
                                            <span class="fs-7 fw-semibold text-muted">UI Design</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="{{ asset('assets/media/svg/brand-logos/tvit.svg') }}" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Company Re-branding</span>
                                            <span class="fs-7 fw-semibold text-muted">Web Development</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="{{ asset('assets/media/svg/misc/infography.svg') }}" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Business Analytics App</span>
                                            <span class="fs-7 fw-semibold text-muted">Administration</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="{{ asset('assets/media/svg/brand-logos/leaf.svg') }}" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">EcoLeaf App Launch</span>
                                            <span class="fs-7 fw-semibold text-muted">Marketing</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <img class="w-20px h-20px" src="{{ asset('assets/media/svg/brand-logos/tower.svg') }}" alt="" />
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column justify-content-start fw-semibold">
                                            <span class="fs-6 fw-semibold">Tower Group Website</span>
                                            <span class="fs-7 fw-semibold text-muted">Google Adwords</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Category title-->
                                    <h3 class="fs-5 text-muted m-0 pt-5 pb-5" data-kt-search-element="category-title">Projects</h3>
                                    <!--end::Category title-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-notepad fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                    <span class="path5"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold">Si-Fi Project by AU Themes</span>
                                            <span class="fs-7 fw-semibold text-muted">#45670</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-frame fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold">Shopix Mobile App Planning</span>
                                            <span class="fs-7 fw-semibold text-muted">#45690</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-message-text-2 fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold">Finance Monitoring SAAS Discussion</span>
                                            <span class="fs-7 fw-semibold text-muted">#21090</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <a href="#" class="d-flex text-gray-900 text-hover-primary align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-profile-circle fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <span class="fs-6 fw-semibold">Dashboard Analitics Launch</span>
                                            <span class="fs-7 fw-semibold text-muted">#34560</span>
                                        </div>
                                        <!--end::Title-->
                                    </a>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Recently viewed-->
                            <!--begin::Recently viewed-->
                            <div class="" data-kt-search-element="main">
                                <!--begin::Heading-->
                                <div class="d-flex flex-stack fw-semibold mb-4">
                                    <!--begin::Label-->
                                    <span class="text-muted fs-6 me-2">Recently Searched:</span>
                                    <!--end::Label-->
                                    <!--begin::Toolbar-->
                                    <div class="d-flex" data-kt-search-element="toolbar">
                                        <!--begin::Preferences toggle-->
                                        <div data-kt-search-element="preferences-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-2 data-bs-toggle=" title="Show search preferences">
                                            <i class="ki-duotone ki-setting-2 fs-2">
                                                <span class="path1"></span>
                                                <span class="path2"></span>
                                            </i>
                                        </div>
                                        <!--end::Preferences toggle-->
                                        <!--begin::Advanced search toggle-->
                                        <div data-kt-search-element="advanced-options-form-show" class="btn btn-icon w-20px btn-sm btn-active-color-primary me-n1" data-bs-toggle="tooltip" title="Show more search options">
                                            <i class="ki-duotone ki-down fs-2"></i>
                                        </div>
                                        <!--end::Advanced search toggle-->
                                    </div>
                                    <!--end::Toolbar-->
                                </div>
                                <!--end::Heading-->
                                <!--begin::Items-->
                                <div class="scroll-y mh-200px mh-lg-325px">
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-laptop fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">BoomApp by Keenthemes</a>
                                            <span class="fs-7 text-muted fw-semibold">#45789</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-chart-simple fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                    <span class="path3"></span>
                                                    <span class="path4"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Kept API Project Meeting</a>
                                            <span class="fs-7 text-muted fw-semibold">#84050</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-chart fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"KPI Monitoring App Launch</a>
                                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Project Reference FAQ</a>
                                            <span class="fs-7 text-muted fw-semibold">#67945</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-sms fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"FitPro App Development</a>
                                            <span class="fs-7 text-muted fw-semibold">#84250</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-bank fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">Shopix Mobile App</a>
                                            <span class="fs-7 text-muted fw-semibold">#45690</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                    <!--begin::Item-->
                                    <div class="d-flex align-items-center mb-5">
                                        <!--begin::Symbol-->
                                        <div class="symbol symbol-40px me-4">
                                            <span class="symbol-label bg-light">
                                                <i class="ki-duotone ki-chart-line-down fs-2 text-primary">
                                                    <span class="path1"></span>
                                                    <span class="path2"></span>
                                                </i>
                                            </span>
                                        </div>
                                        <!--end::Symbol-->
                                        <!--begin::Title-->
                                        <div class="d-flex flex-column">
                                            <a href="#" class="fs-6 text-gray-800 text-hover-primary fw-semibold">"Landing UI Design" Launch</a>
                                            <span class="fs-7 text-muted fw-semibold">#24005</span>
                                        </div>
                                        <!--end::Title-->
                                    </div>
                                    <!--end::Item-->
                                </div>
                                <!--end::Items-->
                            </div>
                            <!--end::Recently viewed-->
                            <!--begin::Empty-->
                            <div data-kt-search-element="empty" class="text-center d-none">
                                <!--begin::Icon-->
                                <div class="pt-10 pb-10">
                                    <i class="ki-duotone ki-search-list fs-4x opacity-50">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </div>
                                <!--end::Icon-->
                                <!--begin::Message-->
                                <div class="pb-15 fw-semibold">
                                    <h3 class="text-gray-600 fs-5 mb-2">No result found</h3>
                                    <div class="text-muted fs-7">Please try again with a different query</div>
                                </div>
                                <!--end::Message-->
                            </div>
                            <!--end::Empty-->
                        </div>
                        <!--end::Wrapper-->
                        <!--begin::Preferences-->
                        <form data-kt-search-element="advanced-options-form" class="pt-1 d-none">
                            <!--begin::Heading-->
                            <h3 class="fw-semibold text-gray-900 mb-7">Advanced Search</h3>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="mb-5">
                                <input type="text" class="form-control form-control-sm form-control-solid" placeholder="Contains the word" name="query" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5">
                                <!--begin::Radio group-->
                                <div class="nav-group nav-group-fluid">
                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="type" value="has" checked="checked" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">All</span>
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="type" value="users" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Users</span>
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="type" value="orders" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Orders</span>
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="type" value="projects" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Projects</span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Radio group-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5">
                                <input type="text" name="assignedto" class="form-control form-control-sm form-control-solid" placeholder="Assigned to" value="" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5">
                                <input type="text" name="collaborators" class="form-control form-control-sm form-control-solid" placeholder="Collaborators" value="" />
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5">
                                <!--begin::Radio group-->
                                <div class="nav-group nav-group-fluid">
                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="attachment" value="has" checked="checked" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary">Has attachment</span>
                                    </label>
                                    <!--end::Option-->
                                    <!--begin::Option-->
                                    <label>
                                        <input type="radio" class="btn-check" name="attachment" value="any" />
                                        <span class="btn btn-sm btn-color-muted btn-active btn-active-primary px-4">Any</span>
                                    </label>
                                    <!--end::Option-->
                                </div>
                                <!--end::Radio group-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-5">
                                <select name="timezone" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="date_period" class="form-select form-select-sm form-select-solid">
                                    <option value="next">Within the next</option>
                                    <option value="last">Within the last</option>
                                    <option value="between">Between</option>
                                    <option value="on">On</option>
                                </select>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="row mb-8">
                                <!--begin::Col-->
                                <div class="col-6">
                                    <input type="number" name="date_number" class="form-control form-control-sm form-control-solid" placeholder="Lenght" value="" />
                                </div>
                                <!--end::Col-->
                                <!--begin::Col-->
                                <div class="col-6">
                                    <select name="date_typer" aria-label="Select a Timezone" data-control="select2" data-dropdown-parent="#kt_header_search" data-placeholder="Period" class="form-select form-select-sm form-select-solid">
                                        <option value="days">Days</option>
                                        <option value="weeks">Weeks</option>
                                        <option value="months">Months</option>
                                        <option value="years">Years</option>
                                    </select>
                                </div>
                                <!--end::Col-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="advanced-options-form-cancel">Cancel</button>
                                <a href="utilities/search/horizontal.html" class="btn btn-sm fw-bold btn-primary" data-kt-search-element="advanced-options-form-search">Search</a>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Preferences-->
                        <!--begin::Preferences-->
                        <form data-kt-search-element="preferences" class="pt-1 d-none">
                            <!--begin::Heading-->
                            <h3 class="fw-semibold text-gray-900 mb-7">Search Preferences</h3>
                            <!--end::Heading-->
                            <!--begin::Input group-->
                            <div class="pb-4 border-bottom">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Projects</span>
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Targets</span>
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Affiliate Programs</span>
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Referrals</span>
                                    <input class="form-check-input" type="checkbox" value="1" checked="checked" />
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="py-4 border-bottom">
                                <label class="form-check form-switch form-switch-sm form-check-custom form-check-solid flex-stack">
                                    <span class="form-check-label text-gray-700 fs-6 fw-semibold ms-0 me-2">Users</span>
                                    <input class="form-check-input" type="checkbox" value="1" />
                                </label>
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end pt-7">
                                <button type="reset" class="btn btn-sm btn-light fw-bold btn-active-light-primary me-2" data-kt-search-element="preferences-dismiss">Cancel</button>
                                <button type="submit" class="btn btn-sm fw-bold btn-primary">Save Changes</button>
                            </div>
                            <!--end::Actions-->
                        </form>
                        <!--end::Preferences-->
                    </div>
                    <!--end::Menu-->
                </div>
                <!--end::Search-->
                <!--begin::Filter-->
                <div class="flex-shrink-0 ms-2">
                    <!--begin::Menu toggle-->
                    <button type="button" class="btn btn-icon btn-bg-light btn-active-icon-primary btn-color-gray-500" data-kt-menu-trigger="click" data-kt-menu-placement="bottom-end">
                        <i class="ki-duotone ki-filter fs-2">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </button>
                    <!--end::Menu toggle-->
                    <!--begin::Menu-->
                    <!--begin::Menu 1-->
                    <div class="menu menu-sub menu-sub-dropdown w-250px w-md-300px" data-kt-menu="true" id="kt_menu_654c7263e6305">
                        <!--begin::Header-->
                        <div class="px-7 py-5">
                            <div class="fs-5 text-gray-900 fw-bold">Filter Options</div>
                        </div>
                        <!--end::Header-->
                        <!--begin::Menu separator-->
                        <div class="separator border-gray-200"></div>
                        <!--end::Menu separator-->
                        <!--begin::Form-->
                        <div class="px-7 py-5">
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Status:</label>
                                <!--end::Label-->
                                <!--begin::Input-->
                                <div>
                                    <select class="form-select form-select-solid" multiple="multiple" data-kt-select2="true" data-close-on-select="false" data-placeholder="Select option" data-dropdown-parent="#kt_menu_654c7263e6305" data-allow-clear="true">
                                        <option></option>
                                        <option value="1">Approved</option>
                                        <option value="2">Pending</option>
                                        <option value="2">In Process</option>
                                        <option value="2">Rejected</option>
                                    </select>
                                </div>
                                <!--end::Input-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Member Type:</label>
                                <!--end::Label-->
                                <!--begin::Options-->
                                <div class="d-flex">
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid me-5">
                                        <input class="form-check-input" type="checkbox" value="1" />
                                        <span class="form-check-label">Author</span>
                                    </label>
                                    <!--end::Options-->
                                    <!--begin::Options-->
                                    <label class="form-check form-check-sm form-check-custom form-check-solid">
                                        <input class="form-check-input" type="checkbox" value="2" checked="checked" />
                                        <span class="form-check-label">Customer</span>
                                    </label>
                                    <!--end::Options-->
                                </div>
                                <!--end::Options-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Input group-->
                            <div class="mb-10">
                                <!--begin::Label-->
                                <label class="form-label fw-semibold">Notifications:</label>
                                <!--end::Label-->
                                <!--begin::Switch-->
                                <div class="form-check form-switch form-switch-sm form-check-custom form-check-solid">
                                    <input class="form-check-input" type="checkbox" value="" name="notifications" checked="checked" />
                                    <label class="form-check-label">Enabled</label>
                                </div>
                                <!--end::Switch-->
                            </div>
                            <!--end::Input group-->
                            <!--begin::Actions-->
                            <div class="d-flex justify-content-end">
                                <button type="reset" class="btn btn-sm btn-light btn-active-light-primary me-2" data-kt-menu-dismiss="true">Reset</button>
                                <button type="submit" class="btn btn-sm btn-primary" data-kt-menu-dismiss="true">Apply</button>
                            </div>
                            <!--end::Actions-->
                        </div>
                        <!--end::Form-->
                    </div>
                    <!--end::Menu 1-->
                    <!--end::Menu-->
                </div>
                <!--end::Filter-->
            </div>
            <!--end::Toolbar-->
            <!--begin::Projects-->
            <div class="m-0">
                <!--begin::Heading-->
                <h1 class="text-gray-800 fw-semibold mb-6 mx-5">Kegiatan</h1>
                <!--end::Heading-->
                <!--begin::Items-->
                <div class="mb-10">
                    <!--begin::Item-->
                    <a href="{{ route('snlik.shared-files') }}" class="custom-list d-flex align-items-center px-5 py-4">
                        <!--begin::Symbol-->
                        <div class="symbol symbol-40px me-5">
                            <span class="symbol-label">
                                <img src="{{ asset('assets/media/svg/brand-logos/infography.svg') }}" class="h-50 align-self-center" alt="" />
                            </span>
                        </div>
                        <!--end::Symbol-->
                        <!--begin::Description-->
                        <div class="d-flex flex-column flex-grow-1">
                            <!--begin::Title-->
                            <h5 class="custom-list-title fw-semibold text-gray-800 mb-1">SNLIK</h5>
                            <!--end::Title-->
                            <!--begin::Link-->
                            <span class="text-gray-500 fw-bold">Tim Sosial</span>
                            <!--end::Link-->
                        </div>
                        <!--begin::Description-->
                    </a>
                    <!--end::Item-->
                    <!-- Disini tambah item nanti  -->
                </div>
                <!--end::Items-->
            </div>
            <!--end::Projects-->
        </div>
        <!--end::Wrapper-->
    </div>
    <!--end::Tab pane-->
    <!--begin::Tab pane-->
    <div class="tab-pane fade" id="kt_aside_nav_tab_menu" role="tabpanel">
        <!--begin::Menu-->
        <div class="menu menu-column menu-fit menu-rounded menu-title-gray-600 menu-icon-gray-500 menu-state-primary menu-state-icon-primary menu-state-bullet-primary menu-arrow-gray-500 fw-semibold fs-5 px-6 my-5 my-lg-0" id="kt_aside_menu" data-kt-menu="true">
            <div id="kt_aside_menu_wrapper" class="menu-fit">
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-element-11 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Dashboards</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link active" href="index.html">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Beranda</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <div class="menu-inner flex-column collapse" id="kt_app_sidebar_menu_dashboards_collapse">
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/bidding.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Bidding</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/pos.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">POS System</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/call-center.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Call Center</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/logistics.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Logistics</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/website-analytics.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Website Analytics</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/finance-performance.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Finance Performance</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/store-analytics.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Store Analytics</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/social.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Social</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/delivery.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Delivery</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/crypto.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Crypto</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/school.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">School</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="dashboards/podcast.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Podcast</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                            <!--begin:Menu item-->
                            <div class="menu-item">
                                <!--begin:Menu link-->
                                <a class="menu-link" href="landing.html">
                                    <span class="menu-bullet">
                                        <span class="bullet bullet-dot"></span>
                                    </span>
                                    <span class="menu-title">Landing</span>
                                </a>
                                <!--end:Menu link-->
                            </div>
                            <!--end:Menu item-->
                        </div>
                        <!-- <div class="menu-item">
                            <div class="menu-content">
                                <a class="btn btn-flex btn-color-primary d-flex flex-stack fs-base p-0 ms-2 mb-2 toggle collapsible collapsed" data-bs-toggle="collapse" href="#kt_app_sidebar_menu_dashboards_collapse" data-kt-toggle-text="Show Less">
                                    <span data-kt-toggle-text-target="true">Show 12 More</span>
                                    <i class="ki-duotone ki-minus-square toggle-on fs-2 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                    </i>
                                    <i class="ki-duotone ki-plus-square toggle-off fs-2 me-0">
                                        <span class="path1"></span>
                                        <span class="path2"></span>
                                        <span class="path3"></span>
                                    </i>
                                </a>
                            </div>
                        </div> -->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
                    <!--begin:Menu link-->
                    <span class="menu-link">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-address-book fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                        <span class="menu-title">SNLIK</span>
                        <span class="menu-arrow"></span>
                    </span>
                    <!--end:Menu link-->
                    <!--begin:Menu sub-->
                    <div class="menu-sub menu-sub-accordion">
                        <!--begin:Menu item-->
                        <div class="menu-item d-none">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="#">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Overview</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                        <!--begin:Menu item-->
                        <div class="menu-item">
                            <!--begin:Menu link-->
                            <a class="menu-link" href="{{ route('snlik.shared-files') }}">
                                <span class="menu-bullet">
                                    <span class="bullet bullet-dot"></span>
                                </span>
                                <span class="menu-title">Shared Files</span>
                            </a>
                            <!--end:Menu link-->
                        </div>
                        <!--end:Menu item-->
                    </div>
                    <!--end:Menu sub-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item pt-5">
                    <!--begin:Menu content-->
                    <div class="menu-content">
                        <span class="menu-heading fw-bold text-uppercase fs-7">Help</span>
                    </div>
                    <!--end:Menu content-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/base/utilities" target="_blank">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-rocket fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Components</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="https://preview.keenthemes.com/metronic8/demo7/layout-builder.html">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-abstract-13 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Layout Builder</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs" target="_blank">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-abstract-26 fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                        <span class="menu-title">Documentation</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
                <!--begin:Menu item-->
                <div class="menu-item">
                    <!--begin:Menu link-->
                    <a class="menu-link" href="https://preview.keenthemes.com/html/metronic/docs/getting-started/changelog" target="_blank">
                        <span class="menu-icon">
                            <i class="ki-duotone ki-code fs-2">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                            </i>
                        </span>
                        <span class="menu-title">Changelog v8.2.1</span>
                    </a>
                    <!--end:Menu link-->
                </div>
                <!--end:Menu item-->
            </div>
        </div>
        <!--end::Menu-->
    </div>
    <!--end::Tab pane-->
    <!--begin::Tab pane-->
    <div class="tab-pane fade" id="kt_aside_nav_tab_subscription" role="tabpanel">
        <!--begin::Subscription-->
        <div class="mx-5">
            <!--begin::Container-->
            <div class="text-center pt-10 mb-20">
                <!--begin::Title-->
                <h2 class="fs-2 fw-bold mb-7">My Subscription</h2>
                <!--end::Title-->
                <!--begin::Description-->
                <p class="text-gray-500 fs-4 fw-semibold mb-10">There are no customers added yet.
                    <br />Kickstart your CRM by adding a your first customer
                </p>
                <!--end::Description-->
                <!--begin::Action-->
                <a href="#" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#kt_modal_upgrade_plan">Upgrade Plan</a>
                <!--end::Action-->
            </div>
            <!--end::Container-->
            <!--begin::Illustration-->
            <div class="text-center px-4">
                <img src="{{ asset('assets/media/illustrations/sigma-1/18.png') }}" alt="" class="mw-100 mh-300px" />
            </div>
            <!--end::Illustration-->
        </div>
        <!--end::Subscription-->
    </div>
    <!--end::Tab pane-->
    <!--begin::Tab pane-->
    <div class="tab-pane fade" id="kt_aside_nav_tab_tasks" role="tabpanel">
        <!--begin::Tasks-->
        <div class="mx-5">
            <!--begin::Header-->
            <h3 class="fw-bold text-gray-900 mb-10 mx-0">Tasks Overview</h3>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="mb-12">
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-success">
                            <i class="ki-duotone ki-abstract-26 fs-2x text-success">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Text-->
                    <div class="d-flex flex-column">
                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Project Briefing</a>
                        <span class="text-muted fw-bold">Project Manager</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-warning">
                            <i class="ki-duotone ki-pencil fs-2x text-warning">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Text-->
                    <div class="d-flex flex-column">
                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Concept Design</a>
                        <span class="text-muted fw-bold">Art Director</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-primary">
                            <i class="ki-duotone ki-message-text-2 fs-2x text-primary">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Text-->
                    <div class="d-flex flex-column">
                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Functional Logics</a>
                        <span class="text-muted fw-bold">Lead Developer</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-danger">
                            <i class="ki-duotone ki-disconnect fs-2x text-danger">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                                <span class="path4"></span>
                                <span class="path5"></span>
                            </i>
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Text-->
                    <div class="d-flex flex-column">
                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Development</a>
                        <span class="text-muted fw-bold">DevOps</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-info">
                            <i class="ki-duotone ki-security-user fs-2x text-info">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Text-->
                    <div class="d-flex flex-column">
                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">Testing</a>
                        <span class="text-muted fw-bold">QA Managers</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-success">
                            <i class="ki-duotone ki-briefcase fs-2x text-success">
                                <span class="path1"></span>
                                <span class="path2"></span>
                            </i>
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Text-->
                    <div class="d-flex flex-column">
                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">HTML, CSS Coding</a>
                        <span class="text-muted fw-bold">Art Director</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Symbol-->
                    <div class="symbol symbol-50px me-5">
                        <span class="symbol-label bg-light-danger">
                            <i class="ki-duotone ki-chart-pie-4 fs-2x text-danger">
                                <span class="path1"></span>
                                <span class="path2"></span>
                                <span class="path3"></span>
                            </i>
                        </span>
                    </div>
                    <!--end::Symbol-->
                    <!--begin::Text-->
                    <div class="d-flex flex-column">
                        <a href="pages/user-profile/overview.html" class="text-gray-800 text-hover-primary fs-6 fw-bold">ReactJS Developer</a>
                        <span class="text-muted fw-bold">Web, UI/UX Design</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Tasks-->
    </div>
    <!--end::Tab pane-->
    <!--begin::Tab pane-->
    <div class="tab-pane fade" id="kt_aside_nav_tab_notifications" role="tabpanel">
        <!--begin::Notifications-->
        <div class="mx-5">
            <!--begin::Header-->
            <h3 class="fw-bold text-gray-900 mb-10 mx-0">Notifications</h3>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="mb-12">
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-warning rounded p-5 mb-7">
                    <!--begin::Icon-->
                    <span class="svg-icon text-warning me-5">
                        <i class="ki-duotone ki-abstract-26 fs-1 text-warning">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                        <a href="widgets/lists.html" class="fw-bold text-gray-800 text-hover-primary fs-6">Group lunch celebration</a>
                        <span class="text-muted fw-semibold d-block">Due in 29 Days</span>
                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->
                    <span class="fw-bold text-warning py-1">+28%</span>
                    <!--end::Lable-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-success rounded p-5 mb-7">
                    <!--begin::Icon-->
                    <span class="svg-icon text-success me-5">
                        <i class="ki-duotone ki-file-added fs-1 text-success">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                        <a href="widgets/lists.html" class="fw-bold text-gray-800 text-hover-primary fs-6">Navigation optimization</a>
                        <span class="text-muted fw-semibold d-block">Due in 2 Days</span>
                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->
                    <span class="fw-bold text-success py-1">+50%</span>
                    <!--end::Lable-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-danger rounded p-5 mb-7">
                    <!--begin::Icon-->
                    <span class="svg-icon text-danger me-5">
                        <i class="ki-duotone ki-message-text-2 fs-1 text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                            <span class="path3"></span>
                        </i>
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                        <a href="widgets/lists.html" class="fw-bold text-gray-800 text-hover-primary fs-6">Humbert Bresnen</a>
                        <span class="text-muted fw-semibold d-block">Due in 5 Days</span>
                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->
                    <span class="fw-bold text-danger py-1">-27%</span>
                    <!--end::Lable-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-info rounded p-5 mb-7">
                    <!--begin::Icon-->
                    <span class="svg-icon text-info me-5">
                        <i class="ki-duotone ki-briefcase fs-1 text-info">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                        <a href="widgets/lists.html" class="fw-bold text-gray-800 text-hover-primary fs-6">Air B & B - Real Estate</a>
                        <span class="text-muted fw-semibold d-block">Due in 8 Days</span>
                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->
                    <span class="fw-bold text-info py-1">+21%</span>
                    <!--end::Lable-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-primary rounded p-5 mb-7">
                    <!--begin::Icon-->
                    <span class="svg-icon text-primary me-5">
                        <i class="ki-duotone ki-arrows-loop fs-1 text-primary">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                        <a href="widgets/lists.html" class="fw-bold text-gray-800 text-hover-primary fs-6">B & Q - Food Company</a>
                        <span class="text-muted fw-semibold d-block">Due in 6 Days</span>
                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->
                    <span class="fw-bold text-primary py-1">+12%</span>
                    <!--end::Lable-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center bg-light-danger rounded p-5">
                    <!--begin::Icon-->
                    <span class="svg-icon text-danger me-5">
                        <i class="ki-duotone ki-pencil fs-1 text-danger">
                            <span class="path1"></span>
                            <span class="path2"></span>
                        </i>
                    </span>
                    <!--end::Icon-->
                    <!--begin::Title-->
                    <div class="flex-grow-1 me-2">
                        <a href="widgets/lists.html" class="fw-bold text-gray-800 text-hover-primary fs-6">Nexa - Next generation</a>
                        <span class="text-muted fw-semibold d-block">Due in 4 Days</span>
                    </div>
                    <!--end::Title-->
                    <!--begin::Lable-->
                    <span class="fw-bold text-danger py-1">+34%</span>
                    <!--end::Lable-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Notifications-->
    </div>
    <!--end::Tab pane-->
    <!--begin::Tab pane-->
    <div class="tab-pane fade" id="kt_aside_nav_tab_authors" role="tabpanel">
        <!--begin::Authors-->
        <div class="mx-5">
            <!--begin::Header-->
            <h3 class="fw-bold text-gray-900 mx-0 mb-10">Authors</h3>
            <!--end::Header-->
            <!--begin::Body-->
            <div class="mb-12">
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        <img src="{{ asset('assets/media/avatars/300-6.jpg') }}" class="" alt="" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Text-->
                    <div class="flex-grow-1">
                        <a href="apps/projects/users.html" class="text-gray-900 fw-bold text-hover-primary fs-6">Emma Smith</a>
                        <span class="text-muted d-block fw-bold">Project Manager</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        <img src="{{ asset('assets/media/avatars/300-5.jpg') }}" class="" alt="" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Text-->
                    <div class="flex-grow-1">
                        <a href="apps/projects/users.html" class="text-gray-900 fw-bold text-hover-primary fs-6">Sean Bean</a>
                        <span class="text-muted d-block fw-bold">PHP, SQLite, Artisan CLI</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        <img src="{{ asset('assets/media/avatars/300-11.jpg') }}" class="" alt="" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Text-->
                    <div class="flex-grow-1">
                        <a href="apps/projects/users.html" class="text-gray-900 fw-bold text-hover-primary fs-6">Brian Cox</a>
                        <span class="text-muted d-block fw-bold">HTML5, jQuery, CSS3</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        <img src="{{ asset('assets/media/avatars/300-23.jpg') }}" class="" alt="" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Text-->
                    <div class="flex-grow-1">
                        <a href="apps/projects/users.html" class="text-gray-900 fw-bold text-hover-primary fs-6">Dan Wilson</a>
                        <span class="text-muted d-block fw-bold">MangoDB, Java</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        <img src="{{ asset('assets/media/avatars/300-10.jpg') }}" class="" alt="" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Text-->
                    <div class="flex-grow-1">
                        <a href="apps/projects/users.html" class="text-gray-900 fw-bold text-hover-primary fs-6">Natali Trump</a>
                        <span class="text-muted d-block fw-bold">NET, Oracle, MySQL</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center mb-7">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        <img src="{{ asset('assets/media/avatars/300-9.jpg') }}" class="" alt="" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Text-->
                    <div class="flex-grow-1">
                        <a href="apps/projects/users.html" class="text-gray-900 fw-bold text-hover-primary fs-6">Francis Mitcham</a>
                        <span class="text-muted d-block fw-bold">React, Vue</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
                <!--begin::Item-->
                <div class="d-flex align-items-center">
                    <!--begin::Avatar-->
                    <div class="symbol symbol-50px me-5">
                        <img src="{{ asset('assets/media/avatars/300-12.jpg') }}" class="" alt="" />
                    </div>
                    <!--end::Avatar-->
                    <!--begin::Text-->
                    <div class="flex-grow-1">
                        <a href="apps/projects/users.html" class="text-gray-900 fw-bold text-hover-primary fs-6">Jessie Clarcson</a>
                        <span class="text-muted d-block fw-bold">Angular, React</span>
                    </div>
                    <!--end::Text-->
                </div>
                <!--end::Item-->
            </div>
            <!--end::Body-->
        </div>
        <!--end::Authors-->
    </div>
    <!--end::Tab pane-->
</div>
<!--end::Tab content-->
<!DOCTYPE html>
<html lang="en">
<!--begin::Head-->

<head>
    <title>Jeumpa</title>
    <meta charset="utf-8" />
    <meta name="description" content="Jeumpa adalah aplikasi monitoring administrasi kegiatan di BPS Provinsi Aceh yang digunakan untuk mengelola, memantau, dan mendokumentasikan pelaksanaan kegiatan secara terintegrasi, akurat, dan efisien." />
    <meta name="keywords" content="Jeumpa, BPS Provinsi Aceh, monitoring kegiatan, administrasi kegiatan, sistem informasi, aplikasi internal BPS, statistik Aceh, manajemen kegiatan" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <meta name="author" content="BPS Provinsi Aceh" />
    <meta property="og:locale" content="id_ID" />
    <meta property="og:type" content="website" />
    <meta property="og:title" content="Jeumpa | Aplikasi Monitoring Administrasi Kegiatan BPS Provinsi Aceh" />
    <meta property="og:description" content="Aplikasi monitoring administrasi kegiatan BPS Provinsi Aceh untuk mendukung pengelolaan kegiatan yang transparan dan terdokumentasi." />
    <meta property="og:site_name" content="Jeumpa - BPS Provinsi Aceh" />
    <link rel="canonical" href="https://preview.keenthemes.com/metronic8" />
    <link rel="shortcut icon" href="{{ asset('assets/media/logos/favicon.ico') }}" />
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <!--begin::Fonts(mandatory for all pages)-->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Inter:300,400,500,600,700" />
    <!--end::Fonts-->
    <!--begin::Vendor Stylesheets(used for this page only)-->
    <!-- <link href="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.css') }}" rel="stylesheet" type="text/css" /> -->
    <link href="{{ asset('assets/plugins/custom/datatables/datatables.bundle.css') }}" rel="stylesheet" type="text/css" />
    @stack('css')
    <!--end::Vendor Stylesheets-->
    <!--begin::Global Stylesheets Bundle(mandatory for all pages)-->
    <link href="{{ asset('assets/plugins/global/plugins.bundle.css') }}" rel="stylesheet" type="text/css" />
    <link href="{{ asset('assets/css/style.bundle.css') }}" rel="stylesheet" type="text/css" />
    <!--end::Global Stylesheets Bundle-->
    <script>
        // Frame-busting to prevent site from being loaded within a frame without permission (click-jacking) if (window.top != window.self) { window.top.location.replace(window.self.location.href); }
    </script>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" style="background-image: url()" class="header-fixed header-tablet-and-mobile-fixed aside-fixed aside-secondary-enabled">
    @include('layout.partials._theme_mode_init')

    @yield('content')


    <!--begin::Javascript-->
    <script>
        var hostUrl = "assets/";
    </script>
    <!--begin::Global Javascript Bundle(mandatory for all pages)-->
    <script src="{{ asset('assets/plugins/global/plugins.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/scripts.bundle.js') }}"></script>
    <!--end::Global Javascript Bundle-->
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="{{ asset('assets/plugins/custom/fullcalendar/fullcalendar.bundle.js') }}"></script>
    <!-- <script src="https://cdn.amcharts.com/lib/5/index.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/5/xy.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/5/percent.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/5/radar.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/5/themes/Animated.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/5/map.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/5/geodata/worldLow.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/5/geodata/continentsLow.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/5/geodata/usaLow.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZonesLow.js"></script> -->
    <!-- <script src="https://cdn.amcharts.com/lib/5/geodata/worldTimeZoneAreasLow.js"></script> -->
    <script src="{{ asset('assets/plugins/custom/datatables/datatables.bundle.js') }}"></script>
    <!--end::Vendors Javascript-->
    <!-- otw hapus -->
    <!--begin::Custom Javascript(used for this page only)-->
    <!-- <script src="{{ asset('assets/js/widgets.bundle.js') }}"></script>
    <script src="{{ asset('assets/js/custom/widgets.js') }}"></script>
    <script src="{{ asset('assets/js/custom/apps/chat/chat.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/upgrade-plan.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/create-app.js') }}"></script>
    <script src="{{ asset('assets/js/custom/utilities/modals/users-search.js') }}"></script> -->
    @stack('scripts')
    <!--end::Custom Javascript-->
    <!-- otw hapus -->
    <!--end::Javascript-->
</body>
<!--end::Body-->

</html>
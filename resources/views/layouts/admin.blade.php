<!DOCTYPE html>
<html lang="en" dir="ltr" data-startbar="dark" data-bs-theme="light">

<head>
    <meta charset="utf-8" />
    <title>Visitors management | {{Route::currentRouteName() }}</title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta content="Premium Multipurpose Admin & Dashboard Template" name="description" />
    <meta content="" name="author" />
    <meta content="{{ csrf_token() }}" name="csrf-token">
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />

    <!-- App favicon -->
    <link rel="shortcut icon" href="assets/images/favicon.ico">

    <link rel="stylesheet" href="assets/libs/jsvectormap/css/jsvectormap.min.css">
    <!-- App css -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/icons.min.css" rel="stylesheet" type="text/css" />
    <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" />
    @stack("styles")
</head>


<!-- Top Bar Start -->

<body data-sidebar-size="default" data-endbar-size="collapsed">
<!-- Top Bar Start -->
@include('components.header')
<!-- Top Bar End -->
<!-- leftbar-tab-menu -->
@include("components.sidebar")
<!--end startbar-->

<div class="startbar-overlay d-print-none"></div>
<!-- end leftbar-tab-menu-->

@yield('content')

<!-- Javascript  -->
<!-- vendor js -->

<script src="assets/libs/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/libs/simplebar/simplebar.min.js"></script>
<script src="assets/libs/iconify-icon/iconify-icon.min.js"></script>
<script src="assets/js/app.js"></script>
@stack("scripts")
</body>
<!--end body-->

</html>

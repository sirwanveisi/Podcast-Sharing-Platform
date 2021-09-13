<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta content="width=device-width, initial-scale=1" name="viewport" />
    <title>هیروپاد | پنل کاربری</title>
    <!-- Favicon-->
    <link rel="icon" href="/admin/images/favicon.ico" type="image/x-icon">
    <!-- Plugins Core Css -->
    <link href="/admin/css/app.min.css" rel="stylesheet">
    <link href="/admin/js/bundles/materialize-rtl/materialize-rtl.min.css" rel="stylesheet">
    <!-- Custom Css -->
    <link href="/admin/css/style.css" rel="stylesheet" />
    <!-- Theme style. You can choose a theme from css/themes instead of get all themes -->
    <link href="/admin/css/styles/all-themes.css" rel="stylesheet" />
    <link href="/admin/js/bundles/multiselect/css/multi-select.css" rel="stylesheet">
    <link href="/admin/css/form.min.css" rel="stylesheet">

</head>

<body class="light rtl">
<!-- Page Loader -->
<div class="page-loader-wrapper">
    <div class="loader">
        <div class="m-t-30">
            <img class="loading-img-spin" src="/admin/images/loading.png" alt="admin">
        </div>
        <p>لطفا صبر کنید...</p>
    </div>
</div>
<!-- #END# Page Loader -->
@include('layouts.sidebar')
<section class="content">
    @yield('content')
</section>
<!-- Plugins Js -->
<script src="/admin/js/app.min.js"></script>
<script src="/admin/js/chart.min.js"></script>
<!-- Custom Js -->
<script src="/admin/js/admin.js"></script>
<script src="/admin/js/bundles/apexcharts/apexcharts.min.js"></script>
<script src="/admin/js/pages/index.js"></script>
<script src="/admin/js/form.min.js"></script>
<script src="/admin/js/bundles/multiselect/js/jquery.multi-select.js"></script>
<script src="/admin/js/pages/forms/advanced-form-elements.js"></script>
<script src="/admin/js/bundles/bootstrap-colorpicker/dist/js/bootstrap-colorpicker.js"></script>
<script src="/admin/js/pages/forms/form-validation.js"></script>
@yield('script')
</body>

<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

 <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" />
        <!--end::Fonts-->
        <!--begin::Page Custom Styles(used by this page)-->
        <link href="vendor/assets/css/pages/login/login-1.css" rel="stylesheet" type="text/css" />
        <!--end::Page Custom Styles-->
        <!--begin::Global Theme Styles(used by all pages)-->
        <link href="vendor/assets/plugins/global/plugins.bundle.css" rel="stylesheet" type="text/css" />
        <link href="vendor/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
        <link href="vendor/assets/css/style.bundle.css" rel="stylesheet" type="text/css" />
        <!--end::Global Theme Styles-->
        <!--begin::Layout Themes(used by all pages)-->
        <!--end::Layout Themes-->
        <link rel="shortcut icon" href="vendor/assets/media/logos/favicon.ico" />

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Login') }} </title>
    <!-- Styles -->
   
</head>
<body id="kt_body" class="header-mobile-fixed aside-enabled aside-fixed aside-minimize-hoverable page-loading">       

        @yield('content')  

    <!-- Scripts -->
    
 <script>var HOST_URL = "https://preview.keenthemes.com/keen/theme/tools/preview";</script>
        <!--begin::Global Config(global config for global JS scripts)-->
        <script>var KTAppSettings = { "breakpoints": { "sm": 576, "md": 768, "lg": 992, "xl": 1200, "xxl": 1200 }, "colors": { "theme": { "base": { "white": "#ffffff", "primary": "#3699FF", "secondary": "#E5EAEE", "success": "#1BC5BD", "info": "#6993FF", "warning": "#FFA800", "danger": "#F64E60", "light": "#F3F6F9", "dark": "#212121" }, "light": { "white": "#ffffff", "primary": "#E1F0FF", "secondary": "#ECF0F3", "success": "#C9F7F5", "info": "#E1E9FF", "warning": "#FFF4DE", "danger": "#FFE2E5", "light": "#F3F6F9", "dark": "#D6D6E0" }, "inverse": { "white": "#ffffff", "primary": "#FFFFFF", "secondary": "#212121", "success": "#ffffff", "info": "#ffffff", "warning": "#ffffff", "danger": "#ffffff", "light": "#464E5F", "dark": "#ffffff" } }, "gray": { "gray-100": "#F3F6F9", "gray-200": "#ECF0F3", "gray-300": "#E5EAEE", "gray-400": "#D6D6E0", "gray-500": "#B5B5C3", "gray-600": "#80808F", "gray-700": "#464E5F", "gray-800": "#1B283F", "gray-900": "#212121" } }, "font-family": "Poppins" };</script>
        <!--end::Global Config-->
        <!--begin::Global Theme Bundle(used by all pages)-->
        <script src="vendor/assets/plugins/global/plugins.bundle.js"></script>
        <script src="vendor/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
        <script src="vendor/assets/js/scripts.bundle.js"></script>
        <!--end::Global Theme Bundle-->
        <!--begin::Page Scripts(used by this page)-->
        <script src="vendor/assets/js/pages/custom/login/login.js"></script>
        <!--end::Page Scripts-->
</body>
</html>

<meta charset="utf-8">
<title>
    @yield('title', 'My App') - @yield('mywebname', 'SmartAdmin')
</title>
<meta name="description" content="Analytics Dashboard">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
<meta name="csrf-token" content="{{ csrf_token() }}">
<!-- Call App Mode on ios devices -->
<meta name="apple-mobile-web-app-capable" content="yes" />
<!-- Remove Tap Highlight on Windows Phone IE -->
<meta name="msapplication-tap-highlight" content="no">
<!-- base css -->
<link rel="stylesheet" media="screen, print" href="/css/vendors.bundle.css">
<link rel="stylesheet" media="screen, print" href="/css/app.bundle.css">
<link id="mythemes" rel="stylesheet" media="screen, print" href="/css/themes/cust-theme-3.css">
<link id="myskins" rel="stylesheet" media="screen, print" href="/css/skins/skin-master.css">
<!-- Place favicon.ico in the root directory -->
<link rel="apple-touch-icon" sizes="180x180" href="/img/favicon/apple-touch-icon.png">
<link rel="icon" type="image/png" sizes="32x32" href="/img/favicon/favicon-32x32.png">
<link rel="mask-icon" href="/img/favicon/safari-pinned-tab.svg" color="#5bbad5">

<link href="/css/jquery-ui.css" rel="stylesheet" type="text/css" />
<link href="/css/jquery.multiselect.css" rel="stylesheet" type="text/css" />
<link href="/css/ui.jqgrid.css" rel="stylesheet" type="text/css" />
<link href="/css/font-awesome.min.css" rel="stylesheet"
    integrity="sha256-3dkvEK0WLHRJ7/Csr0BZjAWxERc5WH7bdeUya2aXxdU= sha512-+L4yy6FRcDGbXJ9mPG8MT/3UCDzwR9gPeyFNMCtInsol++5m3bk2bXWKdZjvybmohrAsn3Ua5x8gfLnbE1YkOg=="
    crossorigin="anonymous">

<link rel="stylesheet" media="screen, print" href="/css/miscellaneous/reactions/reactions.css">
<link rel="stylesheet" media="screen, print" href="/css/miscellaneous/fullcalendar/fullcalendar.bundle.css">
<link rel="stylesheet" media="screen, print" href="/css/miscellaneous/jqvmap/jqvmap.bundle.css">
<link rel="stylesheet" media="screen, print" href="/css/fa-brands.css">
<link rel="stylesheet" media="screen, print" href="/css/fa-regular.css">
<link rel="stylesheet" media="screen, print" href="/css/fa-solid.css">
<link rel="stylesheet" media="screen, print" href="/css/datagrid/datatables/datatables.bundle.css">
<link rel="stylesheet" media="screen, print" href="/css/statistics/chartjs/chartjs.css">
<link rel="stylesheet" media="screen, print" href="/css/statistics/chartist/chartist.css">
<link rel="stylesheet" media="screen, print" href="/css/statistics/c3/c3.css">
<link rel="stylesheet" media="screen, print" href="/css/statistics/dygraph/dygraph.css">
<link rel="stylesheet" media="screen, print" href="/css/notifications/sweetalert2/sweetalert2.bundle.css">
<link rel="stylesheet" media="screen, print" href="/css/notifications/toastr/toastr.css">
<link rel="stylesheet" media="screen, print" href="/css/formplugins/bootstrap-colorpicker/bootstrap-colorpicker.css">
<link rel="stylesheet" media="screen, print" href="/css/formplugins/bootstrap-datepicker/bootstrap-datepicker.css">
<link rel="stylesheet" media="screen, print"
    href="/css/formplugins/bootstrap-daterangepicker/bootstrap-daterangepicker.css">
<link rel="stylesheet" media="screen, print" href="/css/formplugins/dropzone/dropzone.css">
<link rel="stylesheet" media="screen, print" href="/css/formplugins/ion-rangeslider/ion-rangeslider.css">
<link rel="stylesheet" media="screen, print" href="/css/formplugins/cropperjs/cropper.css">
<link rel="stylesheet" media="screen, print" href="/css/formplugins/select2/select2.bundle.css">
<link rel="stylesheet" media="screen, print" href="/css/formplugins/summernote/summernote.css">
<link rel="stylesheet" media="screen, print" href="/css/miscellaneous/fullcalendar/fullcalendar.bundle.css">
<link rel="stylesheet" media="screen, print" href="/css/miscellaneous/lightgallery/lightgallery.bundle.css">
<link rel="stylesheet" media="screen, print" href="/css/page-invoice.css">
<link rel="stylesheet" media="screen, print" href="/css/theme-demo.css">

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" type="text/css" href="{{ url('/css/x.css') }}" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css"/>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/typicons/2.1.2/typicons.css" integrity="sha512-LHYfsPKHdLFYq6UOPC4nEu+XGDPEahxTa6H7pOcvPsDSb4yo9kQWzGk42ny1XlmXfLfU0EO2fmKVG3s3ykHtkw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/pixeden-stroke-7-icon@1.2.3/pe-icon-7-stroke/dist/pe-icon-7-stroke.min.css">
    <title>Member Area Remote Bisnis (REBI)</title>
    <script src="https://cdn.ckeditor.com/4.16.0/standard/ckeditor.js"></script>
    <link rel="shortcut icon" href="https://member.remotebisnis.com/img/iconrebi.png">
    <style>
        .rebi-bg-content {
            background-color: #ffffff87
        }
        .app-theme-gray.app-container {
            background: #eee !important;
        }
        .rebi-small {
            width: 30px;
        }
        .vertical-nav-menu li a:hover, .vertical-nav-menu li.mm-active > a {
            color: #9e0d15 !important;
            font-weight: bold;
        }
        .hamburger-inner, .header-mobile-wrapper {
            background-color: #9e0d15;
        }
        @media (max-width: 991.98px) {
            .app-page-title .page-title-icon, .ui-theme-settings {
                display: block !important;
            }
        }
        .ui-theme-settings.settings-open .theme-settings__inner {
            width: 340px;
        }
        .app-sidebar-wrapper {
            border: 1px solid #9e0d1542;
            border-radius: 6px;
        }
        .ps__rail-y:hover > .ps__thumb-y, .ps__rail-y:focus > .ps__thumb-y {
            background-color: rgb(158, 13, 21) !important;
        }
        .ps__thumb-y {
            background-color: #9e0d1570;
        }
        .pt-6px{
            padding-top: 6px;
        }
        .card-body .card-title {
            margin-bottom: 10px;
        }
        .rebi-border{
            border-color: #9e0d1570;
        }
    </style>
</head>
<body style="background-color: #edf2f7;">

    <main id="app">
        <navigation></navigation>

        <vue-progress-bar></vue-progress-bar>
    </main>

    <script src="{{ url('/js/x.js') }}"></script>
    <script src="{{ mix('js/app.js') }}"></script>


</body>
</html>

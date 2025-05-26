<!DOCTYPE html>
<html lang="{{app()->currentLocale()}}" data-bs-theme="light">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{asset("Trix/css/bootstrap.min.css")}}">
    <link rel="stylesheet" href="{{asset("Trix/css/styles.css")}}">
    <script src="{{asset('Trix/js/jquery-3.7.1.min.js')}}"></script>
    <script src="{{asset("Trix/js/script.js")}}"></script>
    <script src="{{asset("Trix/js/bootstrap.bundle.min.js")}}"></script>
    <script src="{{asset("Trix/js/bootstrap.min.js")}}"></script>
    <title></title>
</head>
<body class="container-fluid vh-100 vw-100 m-0 p-0">
    <div class="row h-100 w-100 m-0">
        <div class="d-none d-lg-block col-lg-3 col-xxl-2 container p-0">
            <div class="h-100 d-grid m-0" style="grid-template-rows: max-content 1fr max-content; grid-template-columns: auto">
                <header style="background-color: var(--bs-header-bg);">
                    @include("Trix.header")
                </header>

                <div id="nav-bar" style="background-color: var(--bs-header-bg)">
                    @include("Trix.navbar")
                </div>

                <footer>
                    @include("Trix.footer")
                </footer>
            </div>
        </div>

        <div class="col content h-100 p-3">
            {{-- <div class="shadow h-100 rounded-4" style="background-color: var(--bs-content-bg)"></div> --}}
        </div>
    </div>
</body>
</html>
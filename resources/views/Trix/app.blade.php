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
<body class="vh-100">
    <header class=" m-4 rounded-3">
        @include('Trix.header')
    </header>
    <div class="mt-4 mb-4 rounded-end-3" id="bar">

    </div>
    <footer>
        @include('Trix.footer')
    </footer>
</body>
</html>
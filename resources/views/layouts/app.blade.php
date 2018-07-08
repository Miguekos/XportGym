<!DOCTYPE html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>GYM |  @yield('title')</title>

    <!-- Styles -->
    <link href="{{ asset('css/all.css') }}" rel="stylesheet">
    <!-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> -->
</head>
<style>
    table.dataTable.no-footer {
        border-bottom: 1px solid #ddd;
    }
    .navbar {
        position: relative;
        min-height: 50px;
        margin-bottom: 12px;
        border: 1px solid #ddd;
    }
</style>
<body>


@include('template.nav')

        <!-- <ol class="breadcrumb">
            <li><a href="#">Home</a></li>
            <li><a href="#">Library</a></li>
            <li class="active">Data</li>
        </ol> -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel panel-default">
                        @yield('content')
                    </div>
                </div>
            </div>
        </div>
    

    <!-- Scripts -->

    <script src="{{ asset('js/all.js') }}"></script>
    <script>
        function showPromo(str) {
            if (str == "") {
                document.getElementById("txtHint").innerHTML = "";
                return;
            } else {
                if (window.XMLHttpRequest) {
                    // code for IE7+, Firefox, Chrome, Opera, Safari
                    xmlhttp = new XMLHttpRequest();
                } else {
                    // code for IE6, IE5
                    xmlhttp = new ActiveXObject("Microsoft.XMLHTTP");
                }
                xmlhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                        document.getElementById("txtHint").innerHTML = this.responseText;
                        // document.getElementById("txtHint").innerHTML = this.responseText;
                    }
                };
                xmlhttp.open("GET","/promo/"+str,true);
                xmlhttp.send();
            }
        }

    </script>
</body>
</html>

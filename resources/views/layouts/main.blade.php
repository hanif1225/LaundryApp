<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="csrf-token" content="{{csrf_token()}}">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sidebar With Bootstrap</title>
        <link href="{{asset('template/line_icons/web-font-files/lineicons.css')}}" rel="stylesheet" /> 
        <link href="{{asset('template/css/bootstrap.min.css')}}"   rel="stylesheet">
        <link rel="stylesheet" href="{{asset('template/custom/css/style.css')}}">
        <!-- Datatable  -->
        <link rel="stylesheet" href="{{asset('template/css/dataTables.dataTables.min.css')}}">
    </head>

    <body>
        <div class="wrapper">
            @include('layouts.sidebar')
            <!-- start of main -->
            <div class="main p-3">
                <div class="container">
                    @yield('content')
                </div>              
            </div>
            <!-- end of main -->
        </div>

        <footer class="py-2 mt-auto" id="fotter-area">
            <div class="container-fluid px-4">
                <div class="text-center align-items-center justify-content-between small">
                    <span><div class="text-light">Copyright &copy; Your Website 2023</div></span>
                </div>
            </div>
        </footer>
    </body>
</html>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Sidebar With Bootstrap</title>
        <!-- <link href="https://cdn.lineicons.com/4.0/lineicons.css" rel="stylesheet" />  -->
        <link href="{{asset('template/line_icons/web-font-files/lineicons.css')}}" rel="stylesheet" /> 
        <!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous"> -->
        <link href="{{asset('template/css/bootstrap.min.css')}}"   rel="stylesheet">
        <link rel="stylesheet" href="{{asset('template/custom/css/style.css')}}">
        
        <!-- Datatable -->
        <link rel="stylesheet" href="{{asset('template/css/dataTables.dataTables.min.css')}}">

    </head>

    <body>
        <div class="wrapper">
            @include('layouts.sidebar')
            <!-- start of main -->
            <div class="main p-3">
                <div class="container">
                    @yield('container')
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
        <!-- <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
            crossorigin="anonymous"></script> -->
        <script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('template/custom/js/script.js')}}"></script>
        <script src="{{asset('template/js/jquery-3.7.1.min.js')}}"></script>

        <!-- Datatable -->
        <script src="{{asset('template/js/dataTables.min.js')}}"></script>

        <!-- Sweet Alert2 -->
        <script src="{{asset('template/js/sweetalert2.js')}}"></script>

    </body>

</html>
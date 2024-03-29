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
    </head>

    <body>
        <div class="wrapper">
            <aside id="sidebar">
                <div class="d-flex">
                    <button class="toggle-btn" type="button">
                        <i class="lni lni-grid-alt"></i>
                    </button>
                    <div class="sidebar-logo">
                        <a href="#">Laundry App</a>
                    </div>
                </div>
                <ul class="sidebar-nav">
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            <span>Manage Users</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-user"></i>
                            <span>Profile</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#auth" aria-expanded="false" aria-controls="auth">
                            <i class="lni lni-protection"></i>
                            <span>Laundry</span>
                        </a>
                        <ul id="auth" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Pending</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Process</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Done</a>
                            </li>
                        </ul>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-agenda"></i>
                            <span>Laundry</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link">
                            <i class="lni lni-agenda"></i>
                            <span>Tagihan</span>
                        </a>
                    </li>
                    <li class="sidebar-item">
                        <a href="#" class="sidebar-link collapsed has-dropdown" data-bs-toggle="collapse"
                            data-bs-target="#tagihan" aria-expanded="false" aria-controls="tagihan">
                            <i class="lni lni-protection"></i>
                            <span>Tagihan</span>
                        </a>
                        <ul id="tagihan" class="sidebar-dropdown list-unstyled collapse" data-bs-parent="#sidebar">
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Pending</a>
                            </li>
                            <li class="sidebar-item">
                                <a href="#" class="sidebar-link">Done</a>
                            </li>
                        </ul>
                    </li>
                </ul>
                <div class="sidebar-footer">
                    <a href="#" class="sidebar-link">
                        <i class="lni lni-exit"></i>
                        <span>Logout</span>
                    </a>
                </div>
            </aside>
        
            <div class="main p-3">
                <div class="text-center">
                    <h1>
                        Sidebar Bootstrap 5
                    </h1>
                </div>
            </div>
        
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
    </body>

</html>
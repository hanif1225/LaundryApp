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
                    <div class="card">
                        <div class="card-header">
                            <h1><i class="lni lni-users medium"></i> Manage User</h1>
                        </div>
                        <div class="card-body">
                            <blockquote class="blockquote mb-0">
                                <div class="p-2">
                                    <button class="btn btn-success" onclick="AddUser()"><i class="lni lni-circle-plus"></i> Add Data</button>
                                </div>
                                <div class="table-responsive">
                                    <table class="table table-striped small">
                                        <thead>
                                            <tr>
                                                <th scope="col text-center">No</th>
                                                <th scope="col">Name</th>
                                                <th scope="col">Username</th>
                                                <th scope="col">Email</th>
                                                <th scope="col">No HP</th>
                                                <th scope="col">Action</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr>
                                                <td class="text-center">1</td>
                                                <td>Muhammad Abdul Yusup Hanifah</td>
                                                <td>hanif</td>
                                                <td>muhammadabdulyusufha@gmail.com</td>
                                                <td>089657512788</td>
                                                <td>
                                                    <button class="btn btn-sm btn-primary"><i class="lni lni-pencil-alt"></i></button>
                                                    <button class="btn btn-sm btn-warning"><i class="lni lni-search-alt"></i></button>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>  
                                </div>  
                            </blockquote>
                        </div>

                    </div>
@include('management_users.modal')
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
            <!-- <script src='https://cdn.jsdelivr.net/npm/jquery@3.7.0/dist/jquery.min.js'></script>  -->
         <script src="{{asset('template/js/jquery.min.js')}}"></script> 
        <script src="{{asset('template/js/bootstrap.bundle.min.js')}}"></script>
        <script src="{{asset('template/custom/js/script.js')}}"></script>


        <!-- Datatable -->
        <script src="{{asset('template/js/dataTables.min.js')}}"></script>

        <!-- Sweet Alert2 -->
        <script src="{{asset('template/js/sweetalert2.js')}}"></script>
<script>


  
    function AddUser() {
        //$('.modal-user input').val('')
        
        $("#form-users").modal("show")
        
        //Swal.fire("SweetAlert2 is working!");
        //just testing swall
    }


    $("#add_employee_form").submit(function(e) {
  e.preventDefault();
  const fd = new FormData(this);
  $.ajax({
    url: '{{ route('store_data') }}',
    method: 'post',
    data: fd,
    cache: false,
    contentType: false,
    processData: false,
    dataType: 'json',
    success: function(response) {
      if (response.status == 200) {
        Swal.fire(
          'Added!',
          'Employee Added Successfully!',
          'success'
        )
        //fetchAllEmployees();
      }
      $("#add_employee_form")[0].reset();
      $("#form-users").modal('hide');
    }
  });
});

</script>

    </body>

</html>
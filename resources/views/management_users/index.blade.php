@extends('layouts.main')
@section('content')
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


@include('layouts.script')                    
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
@endsection
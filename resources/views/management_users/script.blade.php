<script>

  // $(function() { //otomatis aktif ketika page di jalankan
  //       //fungsi untuk load csrf token
  //       $.ajaxSetup({
  //           headers: {
  //               'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
  //           }
  //       });
  //   });
  
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
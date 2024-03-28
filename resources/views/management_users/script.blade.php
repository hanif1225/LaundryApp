<script>
    $(document).ready( function () {
        $.ajaxSetup({
            headers: {
            'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            }
        });

        loadData();
    });

    function loadData(){
        var tableisi = $('#datatable').DataTable({
            processing: true,
            serverSide: true,
            bDestroy: true,   
            orderMulti: false,
            pageLength: 10,
            pagesToCache: 3,
            ajax : 
            {
                url: "{{route('data_user')}}"
            },
            columns:[
            {
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                }
            },
            {data: 'name', name: 'name'},
            {data: 'username', name: 'username'},
            {data: 'email', name: 'email'},
            {data: 'no_hp', name: 'no_hp'},
            {
                "data": "id", "render": function (data) {
                    return "<button class='btn btn-primary btn-sm mr-1' type='button' onclick='editData(`" + data + "`)' ><i class='lni lni-pencil-alt'></i></button>" +
                            "<button class='btn btn-warning btn-sm' type='button' onclick='detailData(`" + data + "`)' ><i class='lni lni-search-alt'></i></button>"+
                            "<button class='btn btn-danger btn-sm' type='button' onclick='deleteData(`" + data + "`)' ><i class='lni lni-trash-can'></i></button>"
                            },
                            "orderable": false,
                            "searchable": false,
                            "width": "150px"
                }
            ],
            dom: 'Bfrtip',
        });
        console.log(tableisi);
    };

    function AddUser() {
        $("#form-users").modal("show");

        $('.modal-user input').val('')
        $('#detail_picture').attr('src', '')
        $('.name_error').text('');
        $('.username_error').text('');
        $('.no_hp_error').text('');
        $('.address_error').text('');
        $('.email_error').text('');
        $('.password_error').text('');
        $('.picture_error').text('');
    }


    $("#add_user").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
    $.ajax({
        url:'http://127.0.0.1:8000/management_users',
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
            loadData();
            }
        $("#add_user")[0].reset();
        $("#form-users").modal('hide');
        },
        error:function(response){
            var formErrors = response.responseJSON.errors;
                if(formErrors.hasOwnProperty('name'))
                {
                    $('.name_error').text(formErrors.name[0]);
                }

                if(formErrors.hasOwnProperty('username'))
                {
                    $('.username_error').text(formErrors.username[0]);
                }
                
                if(formErrors.hasOwnProperty('no_hp'))
                {
                    $('.no_hp_error').text(formErrors.no_hp[0]);
                }

                if(formErrors.hasOwnProperty('address'))
                {
                    $('.address_error').text(formErrors.address[0]);
                }

                if(formErrors.hasOwnProperty('email'))
                {
                    $('.email_error').text(formErrors.email[0]);
                }

                if(formErrors.hasOwnProperty('password'))
                {
                    $('.password_error').text(formErrors.password[0]);
                }

                if(formErrors.hasOwnProperty('picture'))
                {
                    $('.picture_error').text(formErrors.picture[0]);
                }

            }
        });
    });


    $("#update_user").submit(function(e) {
        e.preventDefault();
        const fd = new FormData(this);
    $.ajax({
        url:'{{route('update_data_user')}}',
        method: 'post',
        data: fd,
        cache: false,
        contentType: false,
        processData: false,
        dataType: 'json',
        success: function(response) {
            if (response.status == 200) {
            Swal.fire(
                'Update!',
                'Employee Update Successfully!',
                'success'
            )
            loadData();
            }
        $("#update_user")[0].reset();
        $("#form-edit-users").modal('hide');
        },
        error:function(response){
            var formErrors = response.responseJSON.errors;
            
                if(formErrors.hasOwnProperty('name'))
                {
                    $('.name_error').text(formErrors.name[0]);
                }

                if(formErrors.hasOwnProperty('username'))
                {
                    $('.username_error').text(formErrors.username[0]);
                }
                
                if(formErrors.hasOwnProperty('no_hp'))
                {
                    $('.no_hp_error').text(formErrors.no_hp[0]);
                }

                if(formErrors.hasOwnProperty('address'))
                {
                    $('.address_error').text(formErrors.address[0]);
                }

                if(formErrors.hasOwnProperty('email'))
                {
                    $('.email_error').text(formErrors.email[0]);
                }

                if(formErrors.hasOwnProperty('password'))
                {
                    $('.password_error').text(formErrors.password[0]);
                }

                if(formErrors.hasOwnProperty('picture'))
                {
                    $('.picture_error').text(formErrors.picture[0]);
                }

            }
        });
    });

    function detailData(id) {
        $.ajax({
            type: 'GET',
            dataType: "JSON",
            cotentType: "application/json; charset=utf-8",
            url: '{{route('detail_data_user')}}',
            data: {
                id:id,
            _token: '{{ csrf_token() }}'
          },
            success: function (data) {

                $('#detail_picture').attr('src', 'storage/images_user/' + data["picture"])
                $("#detail_name").html(data["name"])
                $("#detail_username").html(data["username"])
                $("#detail_address").html(data["address"])
                $("#detail_no_hp").html(data["no_hp"])
                $("#detail_email").html(data["email"])

                $("#form-detail-users").modal("show")
                console.log(data.name)
            },
            fail: function (xhr, textStatus, errorThrown) {
                console.log(errorThrown)
            }
        })
    }

    function editData(id) {
        $.ajax({
            type: 'GET',
            dataType: "JSON",
            cotentType: "application/json; charset=utf-8",
            url: '{{route('edit_data_user')}}',
            data: {
                id:id,
            _token: '{{ csrf_token() }}'
          },
            success: function (data) {

                $('#edit_picture').attr('src', 'storage/images_user/' + data["picture"])
                
                $(".modal-edit-user input[name=id]").val(data.id)
                $(".modal-edit-user input[name=name]").val(data.name)
                $(".modal-edit-user input[name=username]").val(data.username)
                $(".modal-edit-user input[name=no_hp]").val(data.no_hp)
                $(".modal-edit-user input[name=address]").val(data.address)
                $(".modal-edit-user input[name=email]").val(data.email)

                $("#form-edit-users").modal("show")
                console.log(data.name)
            },
            fail: function (xhr, textStatus, errorThrown) {
                console.log(errorThrown)
            }
        })
    }

    function deleteData(id) {
        Swal.fire({
          title: 'Are you sure?',
          text: "You won't be able to revert this!",
          icon: 'warning',
          showCancelButton: true,
          confirmButtonColor: '#3085d6',
          cancelButtonColor: '#d33',
          confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
          if (result.isConfirmed) {
            $.ajax({
              url: '{{ route('delete_data_user') }}',
              method: 'delete',
              data: {
                id: id,
                _token: '{{ csrf_token() }}'
              },
              success: function(response) {
                console.log(response);
                Swal.fire(
                  'Deleted!',
                  'Your file has been deleted.',
                  'success'
                )
                loadData();
              }
            });
          }
        })
      };

</script>
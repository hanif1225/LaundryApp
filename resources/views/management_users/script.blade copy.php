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
                    return "<button class='btn btn-primary btn-sm mr-1' type='button' onclick='EditData(" + data + ")' ><i class='lni lni-pencil-alt'></i></button>" +
                            "<button class='btn btn-warning btn-sm' type='button' onclick='detailModal()' ><i class='lni lni-search-alt'></i></button>"
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
        url: '{{ route('store_data_user') }}',
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

    function detailModal() {
        $("#form-detail-users").modal("show");
    }
</script>
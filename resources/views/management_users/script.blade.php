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
                            "<button class='btn btn-warning btn-sm' type='button' onclick='detailmodal(" + data + ")' ><i class='lni lni-search-alt'></i></button>"
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
        $("#form-users").modal("show")
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
        }
        });
    });

</script>
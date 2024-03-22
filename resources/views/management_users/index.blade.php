@extends('layouts.main')
@section('content')
<div class="card">
    <div class="card-header" style="background-color: #0e2238; color:white">
        <h4><i class="lni lni-users medium"></i> Manage User</h4>
    </div>
    <div class="card-body">
        <blockquote class="blockquote mb-0">
            <div class="p-2">
                <button class="btn" style="background-color: #0e2238; color:white" onclick="AddUser()"><i class="lni lni-circle-plus"></i> Add Data</button>
            </div>
            <div class="table-responsive">
                <table class="table table-striped small" id="datatable">
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
                    </tbody>
                </table>  
            </div>  
        </blockquote>
    </div>
</div>
@include('management_users.modal')

@include('layouts.script')  
@include('management_users.script')                    

@endsection
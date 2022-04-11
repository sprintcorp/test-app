@extends('layouts.app')
@section('content')
<div class="content p-4">

    <div class="row">
        <div class="col-md-12 d-flex justify-content-end">
            <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target="#createNewUser">Add User</button>
        </div>
    </div>

    <div class="row mt-4">
        <div class="col-md-9 d-flex justify-content-start">
            <b>List Users</b>
        </div>

        <div class="col-md-3 d-flex justify-content-start">
            <input class="form-control border-end-0 border" type="search" placeholder="search..." width="200" id="search"/>
            <span class="input-group-append">
                <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5" type="button">
                    <svg class="bi me-2" width="16" height="16"><use xlink:href="#search"/></svg>
                </button>
            </span>
        </div>
    </div>


    <div class="row mt-4">
        <div id="success_message"></div>
        <div class="table-responsive">
            <table class="table table-striped table-sm">
                <thead>
                <tr class="text-black-50 table-header">
                    <th scope="col">Name</th>
                    <th scope="col">Create Date</th>
                    <th scope="col">Role</th>
                    <th scope="col">Action</th>
                </tr>
                </thead>
                <tbody id="all-users">

                </tbody>
            </table>
        </div>
    </div>




    {{--               User create modal--}}
    <div class="modal fade" id="createNewUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addUser" aria-hidden="true">

        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form id="userForm" name="userForm">
                    <div class="modal-header">
                        <h5 class="modal-title" id="addUser">Add User</h5>
                        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul id="errorList"></ul>

                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input type="text" name="employee_id" class="form-control" id="employee_id" placeholder="Employee ID*">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" name="firstname" class="form-control" id="firstname" placeholder="First Name*">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lastname" class="form-control" id="lastname" placeholder="Last Name*">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control" id="email" placeholder="Email*">
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="phone" class="form-control" id="phone" placeholder="Phone*">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" name="role" id="role">
                                    <option value="1">admin</option>
                                    <option value="2">Hr</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <input type="text" name="username" class="form-control" id="username" placeholder="Username*">
                            </div>
                            <div class="col-md-4">
                                <input type="password" name="password" class="form-control" id="password" placeholder="Password*">
                            </div>
                            <div class="col-md-4">
                                <input type="password" name="password_confirmation" class="form-control" id="password_confirmation" placeholder="Confirm Password*">
                            </div>
                        </div>

                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-borderless table-sm">
                                    <thead>
                                    <tr class="text-black-50 table-header p-5">
                                        <th scope="col">Module Permission</th>
                                        <th scope="col">Read</th>
                                        <th scope="col">Write</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Super Admin</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="permission" checked>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="permission" checked>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="permission" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm rounded-4 save-user">Add User</button>
                        <button type="button" class="btn btn-sm rounded-4" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
    {{--               Create user modal end--}}



    {{--               Edit user modal--}}
    <div class="modal fade" id="editUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="updateUser" aria-hidden="true">

        <div class="modal-dialog modal-xl modal-dialog-centered">
            <div class="modal-content">
                <form>
                    <div class="modal-header">
                        <h5 class="modal-title" id="updateUser">Edit User Information</h5>
                        <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>
                    <div class="modal-body">
                        <ul id="errorList"></ul>
                        <div class="row mb-3">
                            <div class="col-md-12">
                                <input type="text" name="employee_id" class="form-control" id="edit_employee_id" placeholder="Employee ID*">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-6">
                                <input type="text" name="firstname" class="form-control" id="edit_firstname" placeholder="First Name*">
                            </div>
                            <div class="col-md-6">
                                <input type="text" name="lastname" class="form-control" id="edit_lastname" placeholder="Last Name*">
                            </div>
                        </div>
                        <div class="row mb-3">
                            <div class="col-md-4">
                                <input type="email" name="email" class="form-control" id="edit_email" placeholder="Email*">
                            </div>
                            <div class="col-md-4">
                                <input type="number" name="phone" class="form-control" id="edit_phone" placeholder="Phone*">
                            </div>
                            <div class="col-md-4">
                                <select class="form-select" name="role" id="edit_role">
                                    <option>role</option>
                                </select>
                            </div>
                        </div>

                        <div class="row mb-3">
                            <div class="col-md-4">
                                <input type="text" name="username" class="form-control" id="edit_username" placeholder="Username*">
                            </div>
                            <div class="col-md-4">
                                <input type="password" name="password" class="form-control" id="edit_password" placeholder="Password*">
                            </div>
                            <div class="col-md-4">
                                <input type="password" name="confirm_password" class="form-control" id="confirm_password" placeholder="Confirm Password*">
                            </div>
                        </div>

                        <div class="row">
                            <div class="table-responsive">
                                <table class="table table-borderless table-sm">
                                    <thead>
                                    <tr class="text-black-50 table-header p-5">
                                        <th scope="col">Module Permission</th>
                                        <th scope="col">Read</th>
                                        <th scope="col">Write</th>
                                        <th scope="col">Delete</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <tr>
                                        <td>Super Admin</td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="permission" checked>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="permission" checked>
                                            </div>
                                        </td>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="permission" checked>
                                            </div>
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-primary btn-sm update-user rounded-4">Update User</button>
                        <button type="button" class="btn btn-sm rounded-4" data-bs-dismiss="modal">Cancel</button>
                    </div>
                </form>
            </div>
        </div>


    </div>
    {{--               Edit user modal end--}}

</div>

@endsection

@section('scripts')
    <script>
        $(document).ready(function (){
            getUsers();
            function getUsers(){
                $.ajax({
                    type: "GET",
                    url: '/users',
                    dataType: 'json',
                    success: function (response) {
                        console.log(response.data.data);
                        $('#all-users').html("");
                        $.each(response.data.data,function (key,value){

                            $('#all-users').append('<tr>\
                                <td>'+value.firstname+' '+value.lastname+'</td>\
                                <td>'+value.created_at+'</td>\
                                <td>'+value.user_role.name+'</td>\
                                <td>\
                                    <button class="btn px-2 edit-user" value="'+value.id+'" data-bs-toggle="modal" data-bs-target="#editUser">\
                                        <svg class="bi text-black-50" width="15" height="15" role="img" aria-label="menu">\
                                            <use xlink:href="#edit"/>\
                                        </svg>\
                                    </button>\
                                    <button class="btn" value="'+value.id+'">\
                                        <svg class="bi text-black-50" width="15" height="15" role="img" aria-label="menu">\
                                            <use xlink:href="#delete"/>\
                                        </svg>\
                                    </button>\
                                </td>\
                        </tr>');
                        });
                    },
                });
            }

            $(document).on('click','.edit-user',function (e) {
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();
                var userId = $(this).val();
                console.log(userId);
                $('#editUser').modal('show');

                $.ajax({
                    type: "POST",
                    url: '/users/'+userId,
                    data: data,
                    dataType: 'json',
                    success: function (data) {
                        $('#errorList').html("");
                        $('#success_message').addClass('alert alert-success alert-dismissible fade show');
                        $('#success_message').text(data.message);
                        $('#createNewUser').modal('hide');
                        $('#createNewUser').find('input').val("");
                        getUsers();
                    },
                    error:function (e){
                        if(e.status==422){

                            $('#errorList').html("");
                            $('#errorList').addClass('alert alert-danger');
                            $.each(e.responseJSON.errors,function (key,values){
                                $('#errorList').append('<li>'+values+'</li>')
                            });
                        }
                    }
                });

            });


            $(document).on('click','.save-user',function (e){
                $.ajaxSetup({
                    headers: {
                        'X-CSRF-TOKEN': jQuery('meta[name="csrf-token"]').attr('content')
                    }
                });
                e.preventDefault();
                var data = {
                    'firstname': $('#firstname').val(),
                    'lastname': $('#lastname').val(),
                    'email': $('#email').val(),
                    'password': $('#password').val(),
                    'password_confirmation': $('#password_confirmation').val(),
                    'employee_id': $('#employee_id').val(),
                    'username': $('#username').val(),
                    'phone': $('#phone').val(),
                    'role': $('#role').val(),
                }
                $.ajax({
                    type: "POST",
                    url: '/users',
                    data: data,
                    dataType: 'json',
                    success: function (data) {
                        $('#errorList').html("");
                        $('#success_message').addClass('alert alert-success alert-dismissible fade show');
                        $('#success_message').text(data.message);
                        $('#createNewUser').modal('hide');
                        $('#createNewUser').find('input').val("");
                        getUsers();
                    },
                    error:function (e){
                        if(e.status==422){

                            $('#errorList').html("");
                            $('#errorList').addClass('alert alert-danger');
                            $.each(e.responseJSON.errors,function (key,values){
                                $('#errorList').append('<li>'+values+'</li>')
                            });
                        }
                    }
                });
            })
        });
    </script>
@endsection

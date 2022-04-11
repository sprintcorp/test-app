<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>BingHR</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">



    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">



    <!-- Custom styles for this template -->
    <link href="{{asset('css/sidebar.css')}}" rel="stylesheet">
    <link href="{{asset('css/style.css')}}" rel="stylesheet">
</head>
<body>

<svg style="display: none;">



    <symbol id="search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </symbol>

    <symbol id="menu" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </symbol>

    <symbol id="calender" viewBox="0 0 16 16">
        <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM1 4v10a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V4H1z"/>
    </symbol>

    <symbol id="user" viewBox="0 0 16 16">
        <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm2-3a2 2 0 1 1-4 0 2 2 0 0 1 4 0zm4 8c0 1-1 1-1 1H3s-1 0-1-1 1-4 6-4 6 3 6 4zm-1-.004c-.001-.246-.154-.986-.832-1.664C11.516 10.68 10.289 10 8 10c-2.29 0-3.516.68-4.168 1.332-.678.678-.83 1.418-.832 1.664h10z"/>
    </symbol>

    <symbol id="chat" viewBox="0 0 16 16">
        <path d="M2.678 11.894a1 1 0 0 1 .287.801 10.97 10.97 0 0 1-.398 2c1.395-.323 2.247-.697 2.634-.893a1 1 0 0 1 .71-.074A8.06 8.06 0 0 0 8 14c3.996 0 7-2.807 7-6 0-3.192-3.004-6-7-6S1 4.808 1 8c0 1.468.617 2.83 1.678 3.894zm-.493 3.905a21.682 21.682 0 0 1-.713.129c-.2.032-.352-.176-.273-.362a9.68 9.68 0 0 0 .244-.637l.003-.01c.248-.72.45-1.548.524-2.319C.743 11.37 0 9.76 0 8c0-3.866 3.582-7 8-7s8 3.134 8 7-3.582 7-8 7a9.06 9.06 0 0 1-2.347-.306c-.52.263-1.639.742-3.468 1.105z"/>
    </symbol>

    <symbol id="file" viewBox="0 0 16 16">
        <path d="M14 4.5V14a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V2a2 2 0 0 1 2-2h5.5L14 4.5zm-3 0A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v12a1 1 0 0 0 1 1h8a1 1 0 0 0 1-1V4.5h-2z"/>
    </symbol>

    <symbol id="user-filled" viewBox="0 0 16 16">
        <path d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
    </symbol>

    <symbol id="envelope" viewBox="0 0 16 16">
        <path d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z"/>
    </symbol>

    <symbol id="notification" viewBox="0 0 16 16">
        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"/>
    </symbol>

    <symbol id="delete" viewBox="0 0 16 16">
        <path d="M5.5 5.5A.5.5 0 0 1 6 6v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm2.5 0a.5.5 0 0 1 .5.5v6a.5.5 0 0 1-1 0V6a.5.5 0 0 1 .5-.5zm3 .5a.5.5 0 0 0-1 0v6a.5.5 0 0 0 1 0V6z"/>
        <path fill-rule="evenodd" d="M14.5 3a1 1 0 0 1-1 1H13v9a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2V4h-.5a1 1 0 0 1-1-1V2a1 1 0 0 1 1-1H6a1 1 0 0 1 1-1h2a1 1 0 0 1 1 1h3.5a1 1 0 0 1 1 1v1zM4.118 4 4 4.059V13a1 1 0 0 0 1 1h6a1 1 0 0 0 1-1V4.059L11.882 4H4.118zM2.5 3V2h11v1h-11z"/>
    </symbol>

    <symbol id="edit" viewBox="0 0 16 16">
        <path d="M15.502 1.94a.5.5 0 0 1 0 .706L14.459 3.69l-2-2L13.502.646a.5.5 0 0 1 .707 0l1.293 1.293zm-1.75 2.456-2-2L4.939 9.21a.5.5 0 0 0-.121.196l-.805 2.414a.25.25 0 0 0 .316.316l2.414-.805a.5.5 0 0 0 .196-.12l6.813-6.814z"/>
        <path fill-rule="evenodd" d="M1 13.5A1.5 1.5 0 0 0 2.5 15h11a1.5 1.5 0 0 0 1.5-1.5v-6a.5.5 0 0 0-1 0v6a.5.5 0 0 1-.5.5h-11a.5.5 0 0 1-.5-.5v-11a.5.5 0 0 1 .5-.5H9a.5.5 0 0 0 0-1H2.5A1.5 1.5 0 0 0 1 2.5v11z"/>
    </symbol>


</svg>

{{--     Tool bar--}}
    <div class="align-items-center d-flex flex-column flex-shrink-0 sidebar">

            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center mt-5">
                <li class="nav-item border-0">
                    <a href="#" class="nav-link py-3" aria-current="page" title="Search" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi text-white" width="20" height="20" role="img" aria-label="search">
                            <use xlink:href="#search"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item border-0">
                    <a href="#" class="nav-link py-3" aria-current="page" title="Calender" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi text-white" width="20" height="20" role="img" aria-label="calender">
                            <use xlink:href="#calender"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item border-0">
                    <a href="#" class="nav-link py-3" aria-current="page" title="User" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi text-white" width="20" height="20" role="img" aria-label="user">
                            <use xlink:href="#user"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item border-0">
                    <a href="#" class="nav-link py-3" aria-current="page" title="Chat" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi text-white" width="20" height="20" role="img" aria-label="chat">
                            <use xlink:href="#chat"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item border-0">
                    <a href="#" class="nav-link py-3" aria-current="page" title="File" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi text-white" width="20" height="20" role="img" aria-label="file">
                            <use xlink:href="#file"/>
                        </svg>
                    </a>
                </li>


            </ul>


        <div class="dropdown">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://res.cloudinary.com/sprintcorp/image/upload/v1649636150/98681_nqrxbt.jpg" alt="mdo" width="20" height="20" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>

            <a href="#" title="menu" data-bs-toggle="tooltip" onclick="toggleMenu()" data-bs-placement="right" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none">
                <svg class="bi text-white" width="20" height="20" role="img" aria-label="menu">
                    <use xlink:href="#menu"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="d-flex page-wrapper">
        <div class="d-none bg-light" id="menu-bar">
            <ul class="nav nav-pills flex-column mt-4">
                <li class="nav-item">
                    <a href="#" class="nav-link menu link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#home"/></svg>
                        Dashboard
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link menu"  aria-current="page">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#speedometer2"/></svg>
                        Users
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link menu link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#table"/></svg>
                        Departments
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link menu link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#grid"/></svg>
                        Employees
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link menu link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                        Activities
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link menu link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                        Holidays
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link menu link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                        Events
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link menu link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                        Payrolls
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link menu link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                        Accounts
                    </a>
                </li>
                <li>
                    <a href="#" class="nav-link menu link-dark">
                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#people-circle"/></svg>
                        Reports
                    </a>
                </li>
            </ul>
        </div>
        <div class="main-content">
            <nav class="navbar navbar-expand-lg navbar-light bg-light top-nav">
                <div class="container-fluid">
                    <a class="navbar-brand" href="#">Users</a>
                    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <form class="d-flex me-auto mb-2 mb-lg-0">
                            <div class="year-dropdown px-2">
                                <input class="form-control" type="number" name="year" placeholder="Year"/>
                            </div>
                            <div class="input-group">
                                <input class="form-control border-end-0 border" type="search" placeholder="search..." width="200" id="search"/>
                                <span class="input-group-append">
                                    <button class="btn btn-outline-secondary bg-white border-start-0 border-bottom-0 border ms-n5" type="button">
                                        <svg class="bi me-2" width="16" height="16"><use xlink:href="#search"/></svg>
                                    </button>
                                </span>
                            </div>
                        </form>
                        <ul class="navbar-nav">
                            <li class="nav-item dropdown px-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Language
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">English</a></li>
                                    <li><a class="dropdown-item" href="#">French</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown px-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Reports
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Daily</a></li>
                                    <li><a class="dropdown-item" href="#">Weekly</a></li>
                                </ul>
                            </li>
                            <li class="nav-item dropdown px-2">
                                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                                    Project
                                </a>
                                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                                    <li><a class="dropdown-item" href="#">Project one</a></li>
                                    <li><a class="dropdown-item" href="#">Project two</a></li>
                                </ul>
                            </li>
                            <li class="nav-item px-2">
                                <a href="#" class="nav-link" aria-current="page" title="Message" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                    <svg class="bi text-black" width="20" height="20" role="img" aria-label="message">
                                        <use xlink:href="#envelope"/>
                                        <span class="position-absolute top-20 start-10 translate-middle p-1 bg-info border border-light rounded-circle">
                                        </span>
                                    </svg>

                                </a>
                            </li>

                            <li class="nav-item px-2">
                                <a href="#" class="nav-link" aria-current="page" title="Notification" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                    <svg class="bi text-black" width="20" height="20" role="img" aria-label="notification">
                                        <use xlink:href="#notification"/>
                                        <span class="position-absolute top-20 start-20 translate-middle p-1 bg-info border border-light rounded-circle">
                                        </span>
                                    </svg>
                                </a>
                            </li>

                            <li class="nav-item px-2">
                                <a href="#" class="nav-link" aria-current="page" title="User" data-bs-toggle="tooltip" data-bs-placement="bottom">
                                    <svg class="bi text-black" width="20" height="20" role="img" aria-label="user">
                                        <use xlink:href="#user-filled"/>
                                    </svg>
                                </a>
                            </li>

                        </ul>

                    </div>
                </div>
            </nav>
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
                            <tbody>
                                <tr>
                                    <td>random</td>
                                    <td>data</td>
                                    <td>placeholder</td>
                                    <td>
                                        <a href="#" data-bs-toggle="modal" data-bs-target="#editUser" class="px-2">
                                            <svg class="bi text-black-50" width="15" height="15" role="img" aria-label="menu">
                                                <use xlink:href="#edit"/>
                                            </svg>
                                        </a>

                                        <a href="#">
                                            <svg class="bi text-black-50" width="15" height="15" role="img" aria-label="menu">
                                                <use xlink:href="#delete"/>
                                            </svg>
                                        </a>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>




{{--               User create modal--}}
                <div class="modal fade" id="createNewUser" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="addUser" aria-hidden="true">

                        <div class="modal-dialog modal-xl modal-dialog-centered">
                            <div class="modal-content">
                                <form>
                                <div class="modal-header">
                                    <h5 class="modal-title" id="addUser">Add User</h5>
                                    <button type="button" class="btn-close btn-sm" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
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
                                                <option>role</option>
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
                                    <button type="button" class="btn btn-primary btn-sm rounded-4">Add User</button>
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
                                                <option>role</option>
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
                                    <button type="button" class="btn btn-primary btn-sm rounded-4">Add User</button>
                                    <button type="button" class="btn btn-sm rounded-4" data-bs-dismiss="modal">Cancel</button>
                                </div>
                            </form>
                        </div>
                    </div>


                </div>
                {{--               Edit user modal end--}}

            </div>
            <footer class="p-4">
                &copy; Copyright 2022 BingHR.io
            </footer>
        </div>
    </div>

<script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('js/sidebars.js')}}"></script>
<script src="{{asset('js/application.js')}}"></script>
</body>
</html>

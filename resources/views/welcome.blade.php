<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="Mark Otto, Jacob Thornton, and Bootstrap contributors">
    <meta name="generator" content="Hugo 0.88.1">
    <title>Sidebars · Bootstrap v5.1</title>

    <link rel="canonical" href="https://getbootstrap.com/docs/5.1/examples/sidebars/">



    <!-- Bootstrap core CSS -->
    <link href="{{asset('assets/dist/css/bootstrap.min.css')}}" rel="stylesheet">

    <style>
        .bd-placeholder-img {
            font-size: 1.125rem;
            text-anchor: middle;
            -webkit-user-select: none;
            -moz-user-select: none;
            user-select: none;
        }

        @media (min-width: 768px) {
            .bd-placeholder-img-lg {
                font-size: 3.5rem;
            }
        }
    </style>


    <!-- Custom styles for this template -->
    <link href="{{asset('css/sidebar.css')}}" rel="stylesheet">
</head>
<body>

<svg style="display: none;">



    <symbol id="search" viewBox="0 0 16 16">
        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
    </symbol>

    <symbol id="menu" viewBox="0 0 16 16">
        <path fill-rule="evenodd" d="M2.5 12a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5zm0-4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 0 1H3a.5.5 0 0 1-.5-.5z"/>
    </symbol>


</svg>

<main>
    <div class="align-items-center d-flex flex-column flex-shrink-0 bg-info" style="width: 3.5rem;height: 100vh">

            <ul class="nav nav-pills nav-flush flex-column mb-auto text-center mt-5">
                <li class="nav-item border-0">
                    <a href="#" class="nav-link py-3" aria-current="page" title="Search" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi text-white" width="20" height="20" role="img" aria-label="search">
                            <use xlink:href="#search"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item border-0">
                    <a href="#" class="nav-link py-3" aria-current="page" title="Search" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi text-white" width="20" height="20" role="img" aria-label="search">
                            <use xlink:href="#search"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item border-0">
                    <a href="#" class="nav-link py-3" aria-current="page" title="Search" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi text-white" width="20" height="20" role="img" aria-label="search">
                            <use xlink:href="#search"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item border-0">
                    <a href="#" class="nav-link py-3" aria-current="page" title="Search" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi text-white" width="20" height="20" role="img" aria-label="search">
                            <use xlink:href="#search"/>
                        </svg>
                    </a>
                </li>
                <li class="nav-item border-0">
                    <a href="#" class="nav-link py-3" aria-current="page" title="Search" data-bs-toggle="tooltip" data-bs-placement="right">
                        <svg class="bi text-white" width="20" height="20" role="img" aria-label="search">
                            <use xlink:href="#search"/>
                        </svg>
                    </a>
                </li>


            </ul>


        <div class="dropdown">
            <a href="#" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none" id="dropdownUser3" data-bs-toggle="dropdown" aria-expanded="false">
                <img src="https://github.com/mdo.png" alt="mdo" width="20" height="20" class="rounded-circle">
            </a>
            <ul class="dropdown-menu text-small shadow" aria-labelledby="dropdownUser3">
                <li><a class="dropdown-item" href="#">New project...</a></li>
                <li><a class="dropdown-item" href="#">Settings</a></li>
                <li><a class="dropdown-item" href="#">Profile</a></li>
                <li><hr class="dropdown-divider"></li>
                <li><a class="dropdown-item" href="#">Sign out</a></li>
            </ul>

            <a href="#" title="menu" data-bs-toggle="tooltip" data-bs-placement="right" class="d-flex align-items-center justify-content-center p-3 link-dark text-decoration-none">
                <svg class="bi text-white" width="20" height="20" role="img" aria-label="menu">
                    <use xlink:href="#menu"/>
                </svg>
            </a>
        </div>
    </div>

    <div class="d-flex flex-column flex-shrink-0 p-3 bg-light" style="width: 210px;">
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

</main>


<script src="{{asset('assets/dist/js/bootstrap.bundle.min.js')}}"></script>

<script src="{{asset('js/sidebars.js')}}"></script>
</body>
</html>

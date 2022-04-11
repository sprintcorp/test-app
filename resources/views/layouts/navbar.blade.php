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

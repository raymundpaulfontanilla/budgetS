<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <title>Main Layout</title>
</head>
<body>

<div class="container-fluid">
    <div class="row flex-nowrap" >
        <div class="col-auto col-md-2 col-xl-2 px-sm-2 px-0 " style="background-color:#33C500;">
            <div class="d-flex flex-column align-items-center align-items-sm-start px-3 pt-2 text-white min-vh-100 ">
                <a href="" class="d-flex align-items-center pb-3 mb-md-0 me-md-auto text-white text-decoration-none collapse show nav flex-column ms-1">
                    <span class="fs-5  d-sm-inline fw-bold">BudgetS</span>
                </a>
                <ul class="nav nav-pills flex-column mb-sm-auto mb-0 align-items-center align-items-sm-start" id="menu">
                    <li class="nav-item ">
                        <a href="" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-sm-inline text-dark fw-bold ">Overview</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1  d-sm-inline text-dark fw-bold">Income</span>
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1 d-sm-inline text-dark fw-bold">Expenses</span>
                        </a>
                    </li>


                    <li class="nav-item">
                        <a href="" class="nav-link align-middle px-0">
                            <i class="fs-4 bi-house"></i> <span class="ms-1  text-dark fw-bold">Manage History</span>
                        </a>
                    </li>

                    <div class="col py-3">
           @yield('content')
        </div>
    </div>
</div>
</body>
    
</body>
</html>
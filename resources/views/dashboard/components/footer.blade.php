<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.15.1/css/all.css" integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp" crossorigin="anonymous" />

    <title>Footer</title>

    <style>
        a {
            text-decoration: none;
            color: black;
        }
    </style>
</head>

<body>
    <footer>
    <footer class="footer mt-auto py-3" style="background-color: #F2FFEE;">
        <div class="row py-5">
            <div class="col-md-3 d-flex justify-content-center align-items-center">
                <img src="{{('images/logo.png')}}" class="img-fluid " style="width: 100px" />
                <span class="text-muted">Lorem ipsum dolor, sit</span>
            </div>
            <div class="col-md-3">
                <h5>Company</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="">About Us</a>
                    </li>
                    <li class="mb-2">
                        <a href="">Legal Information</a>
                    </li>
                    <li class="mb-2">
                        <a href="">Contact Us</a>
                    </li>
                    <li class="mb-2">
                        <a href="">BLogs</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Help Center</h5>
                <ul class="list-unstyled">
                    <li class="mb-2">
                        <a href="">Why Us</a>
                    </li>
                    <li class="mb-2">
                        <a href="">FAQs</a>
                    </li>
                </ul>
            </div>
            <div class="col-md-3">
                <h5>Contact Info</h5>
                <p>Phone: 12345678</p>
                <p>Email: test@test.com</p>
                <p>Location: Philippines</p>

                <a href="">
                    <i class="fab fa-brands fa-facebook fa-2x mr-2"></i>
                </a>
                <a href="">
                    <i class="fab fa-brands fa-twitter fa-2x mr-2"></i>
                </a>
                <a href="">
                    <i class="fab fa-brands fa-instagram fa-2x mr-2"></i>
                </a>
            </div>
        </div>
        <hr />
        <div class="container">
            <p>© 2022 | All rights Reserved</p>
        </div>
    </footer>
</body>

</html>
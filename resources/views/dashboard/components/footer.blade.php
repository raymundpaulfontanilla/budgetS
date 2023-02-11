<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <script
            src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
            crossorigin="anonymous"
        ></script>
        <link
            href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css"
            rel="stylesheet"
            integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC"
            crossorigin="anonymous"
        />
        <link
            rel="stylesheet"
            href="https://use.fontawesome.com/releases/v5.15.1/css/all.css"
            integrity="sha384-vp86vTRFVJgpjF9jiIGPEEqYqlDwgyBgEF109VFjmqGmIY/Y4HV4d3Gp2irVfcrp"
            crossorigin="anonymous"
        />

        <title>Footer</title>

        <style>
            * {
                padding: 0px;
                margin: 0px;
            }

            .list {
                text-decoration:none;
                color : black;
            }
            
            .footer {
                background-size: 100% 100%;
                background-position: 0px 0px,0px 0px;
                background-image: conic-gradient(from 233deg at 50% 50%, #FBFFFCFF 2%, #18A14D 100%),conic-gradient(from 229deg at 50% 50%, #FBFFFCFF 2%, #18A14D 100%);
            }
        </style>
    </head>
    <body>

        <footer class="footer mt-auto py-3 " style="background-color: #7fb86e;">
            <div class="row align-items-center">

                <div class="col-lg-3">
                    <div class = "img-fluid d-flex justify-content-center align-items-center">
                    <img src="{{('images/logo.png')}}" class="img-fluid " style="width: 100px"/>
                    </div>
                    <p class="text-muted text-center">Lorem ipsum dolor</p>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-4 text-center">
                    <h5 class="ms-3">Company</h5>
                    <ul class="list-unstyled ms-3 ">
                        <li class="mb-2 ">
                            <a href="" class = "list">About Us</a>
                        </li>
                        <li class="mb-2">
                            <a href="" class = "list">Legal Information</a>
                        </li>
                        <li class="mb-2">
                            <a href="" class = "list">Contact Us</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-4 text-center">
                    <h5 class="ms-3">Help Center</h5>
                    <ul class="list-unstyled ms-3">
                        <li class="mb-2">
                            <a href="" class = "list">Why Us</a>
                        </li>
                        <li class="mb-2">
                            <a href="" class = "list">FAQs</a>
                        </li>
                    </ul>
                </div>

                <div class="col-lg-3 col-md-4 col-sm-4 text-center">
                    <h5 class="ms-3">Contact Info</h5>
                    <p class="ms-3">Phone: 12345678</p>
                    <p class="ms-3">Email: test@test.com</p>
                    <p class="ms-3">Location: Philippines</p>

                    <a href="" class = "list ">
                        <i class="fab fa-brands fa-facebook fa-2x mr-2 ms-3"></i>
                    </a>
                    <a href="" class = "list">
                        <i class="fab fa-brands fa-twitter fa-2x mr-2 ms-3"></i>
                    </a>
                    <a href="" class = "list">
                        <i class="fab fa-brands fa-instagram fa-2x mr-2 ms-3"></i>
                    </a>
                </div>

            </div>
            <hr/>

            <div class="container text-center">
                <p>© 2023 | All rights Reserved</p>
            </div>

        </footer>
    </body>
</html>



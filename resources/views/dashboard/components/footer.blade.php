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
            }
        </style>
    </head>
    <body>
        
        <div data-aos="fade-up" data-aos-duration="2000">
            <footer class="footer mt-auto py-3 bg-success">
                <div class="row align-items-center">

                    <div class="col-lg-4">
                        <div class = "img-fluid d-flex justify-content-center align-items-center">
                            <img src="{{('images/logo.png')}}" class="img-fluid " style="width: 100px"/>
                        </div>
                        <p class="ms-3 text-white">BudgetS is a tool for managing and tracking your income and expenses. It provides you with detailed reports about your situation, so that you can adjust it accordingly. You can also find out how much you have in your account at any given time.</p>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6 pt-5 px-5 text-white">
                        <h5 class="ps-5">Company</h5>
                        <div class = "ps-5">
                            <ul class="list-unstyled ">
                                <li class="mb-2">
                                    <a href="" class = "list text-white">About Us</a>
                                </li>
                                <li class="mb-2">
                                    <a href="" class = "list text-white">Contact Us</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="col-lg-4 col-md-6 col-sm-6 px-5 text-white">
                        <h5 class="ps-5">Social Links</h5>
                        <a href="" class = "list text-white ps-3">
                            <i class="fab fa-brands fa-facebook fa-2x mr-2 ms-3"></i>
                        </a>
                        <a href="" class = "list text-white">
                            <i class="fab fa-brands fa-twitter fa-2x mr-2 ms-3"></i>
                        </a>
                        <a href="" class = "list text-white">
                            <i class="fab fa-brands fa-instagram fa-2x mr-2 ms-3"></i>
                        </a>
                    </div>
                </div>
                <hr style="color:white;"/>
                
                <div class="container text-center text-white">
                    <p>© 2023 | All rights Reserved</p>
                </div>
            </footer>
        </div>
    </body>
</html>




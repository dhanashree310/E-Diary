<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <title>E-Diary</title>
    <link href="css/styles.css" rel="stylesheet" />
    <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
    <style>
        #img-con {
            height: 760px;
            width: 1380px;
            text-align: center;
        }
        #img {
            width: 1210px;
            height: 580px;
        }
    </style>
</head>
<body>

    <div id="layoutSidenav">
        <div id="layoutSidenav_nav">
            <nav class="sb-sidenav accordion sb-sidenav-dark" id="sidenavAccordion">
                <div class="sb-sidenav-menu">
                    <div class="nav">
                        <div class="sb-sidenav-menu-heading" style="color:#00008B;">HOME</div>
                        <a class="nav-link" href="registration.php">
                            <div class="sb-nav-link-icon" style="color:#9F2B68;"><i class="fa fa-user"></i></div>
                            <div style="color:#E49B0F;">Registration</div>
                        </a>
                        <a class="nav-link" href="login.php">
                            <div class="sb-nav-link-icon" style="color:#9F2B68;"><i class="fa fa-user"></i></div>
                            <div style="color:#E49B0F;">Login</div>
                        </a>
                    </div>
                </div>
            </nav>
        </div>
        <div id="layoutSidenav_content">
            <main>
                <div class="container-fluid px-4">
                    <h1 class="mt-4" style="color:CD5C5C;">E-Diary</h1>
                    <div class="card mb-4">
                        <div class="card-body">
                            <div id="img-con">
                                <img id="img" src="/edms-1/edms/assets/img/im2.jpg" alt="Slideshow Image">
                            </div>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </div>

    <script>
const imageUrls = [
    "/edms-1/edms/assets/img/im2.jpg",
    "/edms-1/edms/assets/img/img1.jpg",
    "/edms-1/edms/assets/img/im6.jpg",
    "/edms-1/edms/assets/img/im3.jpg"
];


        let index = 0;
        function changeImage() {
            document.getElementById('img').src = imageUrls[index];
            index = (index + 1) % imageUrls.length;
        }
        setInterval(changeImage, 5000); // Changes every 5 seconds
    </script>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script src="js/scripts.js"></script>

</body>
</html>

<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="utf-8" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title> E-Diary | Register </title>
        
        <script src="https://use.fontawesome.com/releases/v6.1.0/js/all.js" crossorigin="anonymous"></script>
          <script type="text/javascript">
function valid()
{
if(document.registration.newpassword.value!= document.registration.confirmpassword.value)
{
alert("Password and Confirm Password Field do not match  !!");
document.registration.confirmpassword.focus();
return false;
}
return true;
}
</script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        /* body {
            background-color: #f9f9f9;
        } */

        .card {
            margin-top: 50px;
            border: none;
            border-radius: 20px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #0083ff;
            color: #fff;
            text-align: center;
            border-radius: 20px 20px 0 0;
        }

        .card-body {
            padding: 30px;
        }

        .form-control {
            border-radius: 10px;
            box-shadow: none;
        }

        .btn-primary {
            background-color: #0083ff;
            border: none;
            border-radius: 10px;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }

        .small-link {
            font-size: 14px;
        }

        .small-link a {
            color: #0083ff;
        }

        .small-link a:hover {
            text-decoration: none;
        }
    </style>
</head>
<body class="bg-primary">
    <div id="layoutAuthentication">
        <div id="layoutAuthentication_content">
            <main>
            <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card">
                    <div class="card-header">
                        <h3 class="text-center font-weight-bold my-4">E-Diary</h3>
                    </div>
                    <div class="card-body">
                        <h3 class="text-center font-weight-light my-4">User Registration</h3>
                                    <form action="registration.php" method="post" name="registration" onsubmit="return validateForm();">
                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputFirstName" type="text" name="fname" placeholder="Enter your first name"  required />
                                                        <label for="inputFirstName">First name</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating">
                                                        <input class="form-control" id="inputLastName" type="text" name="lname" placeholder="Enter your last name" required />
                                                        <label for="inputLastName">Last name</label>
                                                    </div>
                                                </div>
                                            </div>
                                        
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputEmail" type="email" name="emailid" placeholder="name@example.com" required />
                                            <label for="inputEmail">Email address</label>
                                        </div>
                                        <div class="form-floating mb-3">
                                            <input class="form-control" id="inputMobile" type="text" placeholder="Enter your mobile number" name="mobileno" maxlength="10" pattern="[0-9]+" required />
                                            <label for="inputMobile">Mobile Number</label>
                                        </div>
                                        <div class="row mb-3">
                                        <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPassword" type="password" placeholder="Create a password" name="newpassword"  id="newpassword" />
                                                        <label for="inputPassword">Password</label>
                                                    </div>
                                                </div>
                                                <div class="col-md-6">
                                                    <div class="form-floating mb-3 mb-md-0">
                                                        <input class="form-control" id="inputPasswordConfirm" type="password" placeholder="Confirm password" name="confirmpassword" id="confirmpassword" />
                                                        <label for="inputPasswordConfirm">Confirm Password</label>
                                                    </div>
                                                </div>
                                        </div>
                                        <div class="mt-4 mb-0">
                                            <div class="d-grid"><button type="submit" name="submit" class="btn btn-primary btn-block" >Create Account</button></div>
                                        </div>
                                    </form>
                                </div>
                                <div class="card-footer text-center py-3">
                                <div class="d-flex justify-content-between small-link">
                                    <div class="small"><a href="login.php">Have an account? Go to login</a></div>
                                    <hr />
                                    <div class="small"><a href="index.php">Back to Home Page</a></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </main>
            <div>
                <?php include_once('includes/footer.php');?>
        </div>
        
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
    <script>
        // Client-side form validation
        function validateForm() {
            var password = document.registration.newpassword.value;
            var confirmPassword = document.registration.confirmpassword.value;

            if (password !== confirmPassword) {
                alert("Password and Confirm Password do not match!");
                document.registration.confirmpassword.focus();
                return false;
            }
            return true;
        }
    </script>
</body>
</html>


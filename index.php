<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Login - Pemrograman Internet</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.min.css" rel="stylesheet">

</head>

<body class="bg-gradient-muted">

    <div class="container">
        <div class="text-center bg-gradient-info card 0-hidden border-0 shadow-lg my-2">
            <h1 class="h1 text-white p-4">Ega Permana<br>Teknik Informatika<br>20210120068</h1>
        </div>
        <div class="row justify-content-center align-items-center">
            <div class="card 0-hidden border-0 shadow-lg my-5 bg-gradient-info">
                <!-- Nested Row within Card Body -->
                <div class="p-5">
                    <div class="text-center">
                        <h1 class="h4 text-gray-900 mb-4">Silahkan Masuk</h1>
                    </div>
                    <form method="post" class="user" action="cek_login.php">
                        <div class="form-group">
                            <input type="username" class="form-control form-control-user" id="exampleInputEmail" aria-describedby="emailHelp" placeholder="Username" name="username">
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="exampleInputPassword" placeholder="Password" name="password">
                        </div>
                        <button type="submit" class="btn btn-info nt-2 form-control">Masuk</button>
                    </form>
                    <hr>
                    <h6 class="text-white">Username : admin<br>Password : 1234</h6>
                </div>
            </div>
        </div>
    </div>



    </div>

    <!-- Bootstrap core JavaScript-->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Core plugin JavaScript-->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Custom scripts for all pages-->
    <script src="js/sb-admin-2.min.js"></script>

</body>

</html>
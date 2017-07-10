<?php 
<!DOCTYPE html>
<html>

<head>
    <title>Sistem Informasi Service Komputer</title>
    <link rel="stylesheet" type="text/css" href="assets/css/halamanlogin.css">
</head>

<body>
    <div class="row">
        <div class="col-md-12" id="atas">
            <p><a href="beranda.html"></a></p>
            <a href="index.html"><span class="glyphicon glyphicon-log-out" aria-hidden="true"></span></a>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12" id="navigasi">
            <img src="images/CRSlogo.png">
            <h1>SISTEM INFORMASI
                <br>SERVICE KOMPUTER</h1>
        </div>
    </div>
    <form>
        <div class="login-page">
            <div class="form">
                <div class="form-group">
                    <div class="col-lg-4">
                        <h1 class="page-header">Login Admin</h1>
                    </div>
                </div>
                <div class="form-group">
                    <label for="email">Username:</label>
                    <input type="email" class="form-control" id="email">
                </div>
                <div class="form-group">
                    <label for="pwd">Password:</label>
                    <input type="password" class="form-control" id="pwd">
                </div>
                <div>
                    <a href="datauser.html">
                        <button type="button" class="btn btn-default">Log In</button>
                    </a>
                </div>
                <div class="form-group" id="lupa">
                    <a href="">Forget Password?</a>
                </div>
            </div>
        </div>
    </form>
    <div class="footer" id="footer">
        <p>&copy; Sisfo 2015</p>
    </div>
</body>

</html>



 ?>
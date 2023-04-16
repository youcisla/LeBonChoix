<!DOCTYPE html>
<html lang="en">
<?php 
session_start();
include('./db_connect.php');
?>

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Un Titre Accrocheur</title>


    <?php include('./header.php'); ?>
    <?php 
if(isset($_SESSION['login_id']))
header("location:index.php?page=home");

?>

</head>
<style>
body {
    width: 100%;
    height: calc(100%);
    /*background: #007bff;*/
}

main#main {
    width: 100%;
    height: calc(100%);
    background: white;
}

#login-right {
    position: absolute;
    right: 0;
    width: 50%;
    height: calc(100%);
    background: white;
    display: flex;
    align-items: center;
}

#login-left {
    position: absolute;
    left: 0;
    width: 50%;
    height: calc(100%);
    background: #59b6ec61;
    display: flex;
    align-items: center;
}

#login-right .card {
    margin: auto;
    z-index: 1
}

#login-left .card {
    margin: auto;
    z-index: 1
}

.logo {
    margin: auto;
    font-size: 8rem;
    background: white;
    padding: .5em 0.7em;
    border-radius: 50% 50%;
    color: #000000b3;
    z-index: 10;
}

div#login-right::before {
    content: "";
    position: absolute;
    top: 0;
    left: 0;
    width: calc(100%);
    height: calc(100%);
    background: #000000e0;
}
</style>

<body>


    <main id="main" class=" bg-dark">
        <div id="login-left">
            <div class="card col-md-8">
                <div class="card-body">

                    <form id="inscription-form" action="inscription">
                        <div class="form-group">
                            <h1>Register</h1>
                            <hr>

                            <input type="text" id="name" name="name" class="form-control" placeholder="Name"><br>

                            <input type="text" id="username" name="username" class="form-control"
                                placeholder="Username"><br>

                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Password"><br>

                            <input type="password" id="password2" name="password2" class="form-control"
                                placeholder="Password confirmation"><br>
                        </div>
                        <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Sign Up</button></center>
                        <br>
                        <p>Already have an account? <a href="#">Sign in</a>.</p>
                    </form>
                </div>
            </div>
        </div>
        <div id="login-right">
            <div class="card col-md-8">
                <div class="card-body">

                    <form id="login-form" action="login">
                        <div class="form-group">
                            <h1>Login</h1>
                            <hr>

                            <input type="text" id="username" name="username" class="form-control"
                                placeholder="Username"><br>

                            <input type="password" id="password" name="password" class="form-control"
                                placeholder="Password"><br>
                        </div>
                        <center><button class="btn-sm btn-block btn-wave col-md-4 btn-primary">Login</button>
                        </center><br>
                        <p>Don't have an account? <a href="#">Sign up</a>.</p>
                    </form>

                </div>
            </div>
        </div>
    </main>

    <a href="#" class="back-to-top"><i class="icofont-simple-up"></i></a>


</body>
<script>
$('#login-form').submit(function(e) {
    e.preventDefault()
    $('#login-form button[type="button"]').attr('disabled', true).html('Logging in...');
    if ($(this).find('.alert-danger').length > 0)
        $(this).find('.alert-danger').remove();
    $.ajax({
        url: 'ajax.php?action=login',
        method: 'POST',
        data: $(this).serialize(),
        error: err => {
            console.log(err)
            $('#login-form button[type="button"]').removeAttr('disabled').html('Login');

        },
        success: function(resp) {
            if (resp == 1) {
                location.href = 'index.php?page=home';
            } else {
                $('#login-form').prepend(
                    '<div class="alert alert-danger">Username or password is incorrect.</div>')
                $('#login-form button[type="button"]').removeAttr('disabled').html('Login');
            }
        }
    })
})
</script>
<script>
$('#inscription-form').submit(function(e) {
    e.preventDefault()
    $('#inscription-form button[type="button"]').attr('disabled', true).html('Logging in...');
    if ($(this).find('.alert-danger').length > 0)
        $(this).find('.alert-danger').remove();
    $.ajax({
        url: 'ajax.php?action=inscription',
        method: 'POST',
        data: $(this).serialize(),
        error: err => {
            console.log(err)
            $('#inscription-form button[type="button"]').removeAttr('disabled').html('inscription');

        },
        success: function(resp) {
            if (resp == 1) {
                location.href = 'index.php?page=home';
            } else {
                $('#inscription-form').prepend(
                    '<div class="alert alert-danger">ressaye</div>')
                $('#inscription-form button[type="button"]').removeAttr('disabled').html('inscription');
            }
        }
    })
})
</script>
</html>
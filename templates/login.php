<?php session_start(); ?>
<!DOCTYPE html>
<html>
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
        <link rel="shortcut icon" type="image/png" href="assets/img/booksmart-favicon1.png"/>
        <link type="text/css" href="assets/css/login.css" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css2?family=Shanti&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">

        <title>Booksmart | Login</title>
    </head>
    <body>
        <div class="container" id="container">
            <div class="form-container sign-in-container">
                <form action="authenticate.php" method="post">
                    <h1>Sign In</h1>
                    <div class="social-container">
                        <a href="#" class="social">
                            <ion-icon name="logo-facebook"></ion-icon>
                        </a>
                        <a href="#" class="social">
                            <ion-icon name="logo-googleplus"></ion-icon>
                        </a>
                        <a href="#" class="social">
                            <ion-icon name="logo-linkedin"></ion-icon>
                        </a>
                    </div>
                    <span>or use your account</span>
                    <input type="email" name="email" placeholder="Email" id="email">
                    <input type="password" name="password" placeholder="Password" id="password">
                    <button type="submit" value="Login">Sign In</button>
                </form>
            </div>
            <?php if(isset($_SESSION['error'])) { echo "dasdsadsa"; ?>
                <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
                    <div class="toast-header">
                        <img src="..." class="rounded mr-2" alt="...">
                        <strong class="mr-auto">Login Error</strong>
                        <button type="button" class="ml-2 mb-1 close" data-dismiss="toast" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="toast-body">
                        <?=$_SESSION['error']; ?>
                    </div>
                    </div>
            <?php session_destroy($_SESSION['error']); } ?>
            <div class="overlay-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-left">
                        <h1>Welcome Back</h1>
                        <p>To keep connected with us please login with your personal info</p>
                        <button class="ghost" id="signIn">Sign In</button>
                    </div>
                    <div class="overlay-panel overlay-right">
                        <h1>Hello,Friend</h1>
                        <p>Enter your personal details and start journey with us</p>
                        <a href="register.html"><button class="ghost" id="signUp">Sign Up</button></a>
                    </div>
                </div>
            </div>
        </div>
        <script src="https://unpkg.com/ionicons@4.2.2/dist/ionicons.js"></script>
    </body>
</html>
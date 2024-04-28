<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <script src="javaScript/loginFormValidation.js"></script>
    <title>Chat</title>
</head>
<body>
    <div class="wrapper">
        <section class="form login">
            <header>Chat Application</header>
            <form action="#" id="loginform">
                <div class="error-txt login-errors" style="display: none;"></div>
                <div class="feild input">
                    <label>Email Address</label>
                    <input type="email" name="email" placeholder="Enter email" id="email">
                </div>
                <div class="feild input">
                    <label>Password</label>
                    <input type="password" name="password" placeholder="Enter your password" required>
                    <i class="fas fa-eye" id="togglePass"></i>
                </div>
                <div class="feild button">
                    <input type="submit" value="login">
                </div>
            </form>
            <div class="link">
                 <p>New user! Signup <a href="index.php">here</a></p>
            </div>
        </section>
    </div>

    <script src="javaScript/passShowHide.js"></script>
    <script src="javaScript/login.js"></script>
</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <title>Smartpark</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../css/login-register.css">
</head>

<body>

    <div class="container Auth-mother-box">
        <div class="Auth-child-box">
            <div class="Auth-form-box">
                <form method="post">
                    <div class="Auth-form-head">
                        <h1>Register</h1>
                    </div>
                    <div class="Auth-form-input Auth-form-special">
                        <div style="padding-right: 10px; width: 50%;">
                            <div>
                                First Name
                            </div>
                            <input type="text" name="fname" required>
                        </div>
                        <div style="padding-left: 10px; width: 50%;">
                            <div>
                                Last Name
                            </div>
                            <input type="text" name="lname" required>
                        </div>
                    </div>
                    <div class="Auth-form-input">
                        <div>
                            Username
                        </div>
                        <input type="text" name="username" required>
                    </div>
                    <div class="Auth-form-input">
                        <div>
                            Password
                        </div>
                        <input type="text" name="password" required>
                    </div>
                    <div class="Auth-form-input">
                        <div>
                            Email
                        </div>
                        <input type="text" name="email" required>
                    </div>
                    <div class="Auth-form-btn">
                        <button type="submit" name="signup">Sign Up</button>
                    </div>
                    <div style="text-align: center;">
                        Already have an account? <a href="/Authentication/Login">Sign In</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

</body>

</html>
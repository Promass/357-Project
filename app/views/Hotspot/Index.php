<!DOCTYPE html>
<html lang="en">

<head>
    <title>Smartpark</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../css/navbar.css">
</head>

<body style="background-color: #121212;">

    <!-- NAVBAR -->

    <div class="Nav-logo-box">
        <a href="/Home/"><img src="../../../assets/logo.png" alt="logo"></a>
    </div>

    <div class="Nav-bar-box sticky-top">
        <div class="container Nav-item-box">
            <div class="Nav-link-box">
                <a href="/Home/" class="Nav-link" style="background-color: #BB86FC;">HOME</a>
                <a href="/Traffic/" class="Nav-link" style="border-right: solid #828282; border-width: thin;">TRAFFIC</a>
                <a href="/Hotspot/" class="Nav-link" style="border-right: solid #828282; border-width: thin;">HOTSPOTS</a>
                <?php
                
                if (isset($_SESSION['user_id'])) {
                    echo '<a href="/Saved/" class="Nav-link" style="border-right: solid #828282; border-width: thin;">SAVED</a>';
                }

                ?>
            </div>
            <div class="Nav-link-box">
                <a href="" class="Nav-question-btn">?</a>
                <?php
                
                    if (isset($_SESSION['user_id'])) {
                        echo '<a href="/Authentication/Logout" class="Nav-login-btn">LOGOUT</a>';
                    }
                    else {
                        echo '<a href="/Authentication/Login" class="Nav-login-btn">LOGIN</a>';
                    }

                ?>
                
            </div>
        </div>
    </div>

    <!-- NAVBAR -->

    <!-- CONTENT -->

    Hotspot Under Constructions!
    
    <!-- CONTENT -->

</body>

</html>
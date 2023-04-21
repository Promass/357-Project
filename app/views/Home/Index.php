<?php

if (isset($data['search']) && isset($data['longitude']) && isset($data['latitude'])) {
    echo '
        <script>
            localStorage.setItem("longitude", '. $data['longitude'] .');
            localStorage.setItem("latitude", '. $data['latitude'] .');
        </script>
        ';
}

?>
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
    <link rel="stylesheet" href="../../../css/home.css">
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
                <a href="/Guide/" class="Nav-question-btn">?</a>
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

    <div class="container">
        <form method="post">
            <div class="Home-search-box">
                <input class="Home-search-input" id="Home-search-input" placeholder="Search for a location..." type="text" name="Home-search-input" <?php if (isset($data['search'])) {
                                                                                                                                                        echo 'value="' . $data['search'] . '"';
                                                                                                                                                    } ?>>
                <input type="hidden" id="Home-search-lng" name="Home-search-lng" <?php if (isset($data['longitude'])) {
                                                                                        echo 'value="' . $data['longitude'] . '"';
                                                                                    } else {
                                                                                        echo 'value=""';
                                                                                    } ?>>
                <input type="hidden" id="Home-search-lat" name="Home-search-lat" <?php if (isset($data['latitude'])) {
                                                                                        echo 'value="' . $data['latitude'] . '"';
                                                                                    } else {
                                                                                        echo 'value=""';
                                                                                    } ?>>
                <button class="Home-search-btn" id="Home-search-btn" type="submit" name="Home-search" disabled>Search</button>
            </div>
        </form>

        <?php

        if (isset($data['search']) && isset($data['longitude']) && isset($data['latitude']) && isset($data['schedule'])) {
            echo '

                <div class="Home-rules-box">
                    <div class="Home-rules-head">
                        <div class="Home-rules-text">
                            <h4>Parking Schedule</h4>
                            <p>Schedules are subject to changes.</p>
                        </div>
                ';
            if (isset($_SESSION['user_id'])) {
                if (is_object($data['schedule'])) {
                    echo '<a href="/Saved/Save/'. $data['schedule']->id .'" class="Home-rules-btn">Save</a>';
                }
            }
            echo '
                    </div>
                    <div class="Home-rules-tail">
                        <div class="Home-rules-info">
                            <p>Searched For: ' . $data['search'] . '</p>
                            <p>Latitude: ' . $data['latitude'] . '</p>
                            <p>Longitude: ' . $data['longitude'] . '</p>
                            <p style="margin: 0px;">
                ';
            if (is_object($data['schedule'])) {
                echo 'Parking Rules: ' . $data['schedule']->descr;
            } else {
                echo 'Could not find any rules for this address.';
            }
            echo '
                            </p>
                        </div>
                    </div>
                </div>

                ';
        }

        ?>

        <div class="Home-map-box">
            <div id="Map-google" class="Home-map"></div>
        </div>

    </div>

    <!-- CONTENT -->

    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3FRojcfkJxd8nVBad0DLAeneZcKYbuJE&libraries=places&callback=initGoogle"></script>
    <script type="text/javascript" src="../../../js/HomeMap.js"></script>

</body>

</html>

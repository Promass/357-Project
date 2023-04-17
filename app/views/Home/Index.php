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
        <img src="../../../assets/logo.png" alt="Logo">
    </div>

    <div class="Nav-bar-box sticky-top">
        <div class="container Nav-item-box">
            <div class="Nav-link-box">
                <a href="" class="Nav-link" style="background-color: #BB86FC;">HOME</a>
                <a href="" class="Nav-link" style="border-right: solid #828282; border-width: thin;">TRAFFIC</a>
                <a href="" class="Nav-link" style="border-right: solid #828282; border-width: thin;">HOTSPOTS</a>
                <a href="" class="Nav-link" style="border-right: solid #828282; border-width: thin;">SAVED</a>
            </div>
            <div class="Nav-link-box">
                <a href="" class="Nav-question-btn">?</a>
                <a href="" class="Nav-login-btn">LOGIN</a>
            </div>
        </div>
    </div>

    <!-- NAVBAR -->

    <!-- CONTENT -->

    <div class="container">
        <form method="post">
            <div class="Home-search-box">
                <input class="Home-search-input" id="Home-search-input" placeholder="Search for a location..." type="text" name="Home-search-input" <?php if (isset($data['search'])) {echo 'value="'.$data['search'].'"';}?>>
                <input type="hidden" id="Home-search-lng" name="Home-search-lng" <?php if (isset($data['longitude'])) {echo 'value="'.$data['longitude'].'"';} else {echo 'value=""';}?>>
                <input type="hidden" id="Home-search-lat" name="Home-search-lat" <?php if (isset($data['latitude'])) {echo 'value="'.$data['latitude'].'"';} else {echo 'value=""';}?>>
                <button class="Home-search-btn" id="Home-search-btn" type="submit" name="Home-search" disabled>Search</button>
            </div>
        </form>

        <div class="Home-map-box">
            <div id="Map-google" class="Home-map"></div>
        </div>

        <div class="Home-rules-box">
            <div class="Home-rules-head">
                <div class="Home-rules-text">
                    <h4>Parking Schedule</h4>
                    <p>Schedules are subject to changes.</p>
                </div>
                <a href="" class="Home-rules-btn">Save</a>
            </div>
            <div class="Home-rules-tail">
                
                <div>
                    <p><?=$data['search']?></p>
                    <p><?=$data['longitude']?></p>
                    <p><?=$data['latitude']?></p>
                    <p>
                        <?php 
                    
                            if (is_object($data['schedule'])) {
                                echo $data['schedule']->descr;
                            }
                    
                        ?>
                    </p>
                </div>

            </div>
        </div>

    </div>

    <!-- CONTENT -->

    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3FRojcfkJxd8nVBad0DLAeneZcKYbuJE&libraries=places&callback=initGoogle"></script>
    <script type="text/javascript" src="../../../js/maps.js"></script>

</body>

</html>
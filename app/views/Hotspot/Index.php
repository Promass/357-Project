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
    <link rel="stylesheet" href="../../../css/saved.css">
</head>

<body style="background-color: #121212;">

    <!-- NAVBAR -->

    <div class="Nav-logo-box">
        <a href="/Home/"><img src="../../../assets/logo.png" alt="logo"></a>
    </div>

    <div class="Nav-bar-box sticky-top">
        <div class="container Nav-item-box">
            <div class="Nav-link-box">
                <a href="/Home/" class="Nav-link" style="border-left: solid #828282; border-right: solid #828282; border-width: thin;">HOME</a>
                <a href="/Traffic/" class="Nav-link" style="border-right: solid #828282; border-width: thin;">TRAFFIC</a>
                <a href="/Hotspot/" class="Nav-link" style="background-color: #BB86FC;">HOTSPOTS</a>
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

    <div class="container Saved-mother-box">
        <div class="row">
            <div class="col-lg-6 Saved-map-box-m">
                <div class="Saved-map-box-c">
                    <div id="Map-google" class="Saved-map"></div>
                </div>
            </div>
            <div class="col-lg-6 Saved-list-box-m">
                <div class="Saved-list-box-c">
                    <div>
                        <h4>Saved Locations</h3>
                    </div>
                    <div class="Saved-item-box" style="padding-right: 10px;">
                            <div class="Saved-item-c" style="margin-bottom: 10px;" onclick="showSaved(45.50070679, -73.56870186)">
                                <div>Near: Place Ville Marie</div>
                                <div>
                                    <span>Longitude: -73.56870186</span>
                                    |
                                    <span>Latitude: 45.50070679</span>
                                </div>
                                <div>Parking Rules: P EN TOUT TEMPS</div>
                                <div>Area: Ville-Marie</div>
                            </div>
                            <div class="Saved-item-c" style="margin-bottom: 10px;" onclick="showSaved(45.50459227, -73.55553697)">
                                <div>Near: Notre-Dame Basilica</div>
                                <div>
                                    <span>Longitude: -73.55553697</span>
                                    |
                                    <span>Latitude: 45.50459227</span>
                                </div>
                                <div>Parking Rules: P 09h-19h SAM.</div>
                                <div>Area: Ville-Marie</div>
                            </div>
                            <div class="Saved-item-c" style="margin-bottom: 10px;" onclick="showSaved(45.49518038, -73.65672237)">
                                <div>Near: Gibeau Orange Julep</div>
                                <div>
                                    <span>Longitude: -73.65672237</span>
                                    |
                                    <span>Latitude: 45.49518038</span>
                                </div>
                                <div>Parking Rules: A EN TOUT TEMPS</div>
                                <div>Côte-des-Neiges - Notre-Dame-de-Grâce</div>
                            </div>
                            <div class="Saved-item-c" style="margin-bottom: 10px;" onclick="showSaved(45.55960228, -73.5480317)">
                                <div>Near: Biodome</div>
                                <div>
                                    <span>Longitude: -73.5480317</span>
                                    |
                                    <span>Latitude: 45.55960228</span>
                                </div>
                                <div>Parking Rules: P EN TOUT TEMPS</div>
                                <div>Mercier - Hochelaga-Maisonneuve</div>
                            </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    
    <!-- CONTENT -->

    <script async src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD3FRojcfkJxd8nVBad0DLAeneZcKYbuJE&libraries=places&callback=initGoogle"></script>
    <script type="text/javascript" src="../../../js/SavedMap.js"></script>

</body>

</html>

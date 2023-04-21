<!doctype html>
<html lang="en">

<head>
    <title>Smartpark</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../../../css/guide.css">
</head>

<body style="background-color: #121212;">

    <div class="container Guide-container">

        <div class="Guide-logo">
            <a href="/Home/"><img src="../../../assets/logo.png" alt="logo"></a>
        </div>
        <h1 class="Guide-h1">SmartPark User Guidelines</h1>




        <h4 class="Guide-h4">1. Home</h4>
        <p class="Guide-p">
            The home page is the first page all users come across when they enter the Smartpark URL.
            The main feature of Smartpark is also found in the home page. The main feature of Smartpark is to provide users with 
            parking rules for a desired location. The steps to use the search feature is shown below.
        </p>
        <p class="Guide-p">
            Step 1: Start typing the desired address in the search bar. A popup with autocomplete of the address should come up as shown below.
            It is important to click an address from the popup or else search is not permitted.
        </p>
        <div class="Guide-img-div">
            <img src="../../../assets/guide-1.png" alt="Guide">
        </div>
        <p class="Guide-p">
            Step 2: Once an address has been clicked from the popup, the system will allow for it to be searched.
        </p>
        <div class="Guide-img-div">
            <img src="../../../assets/guide-2.png" alt="Guide">
        </div>
        <p class="Guide-p">
            Step 3: Analyze the search results in the search box.
        </p>
        <div class="Guide-img-div">
            <img src="../../../assets/guide-3.png" alt="Guide">
        </div>




        <h4 class="Guide-h4">2. Hotspot</h4>
        <p class="Guide-p">
            Antoher feature of Smartpark is the hotspot. The hotspot page contains predefined location of parkings that are near popular areas in Montreal.
            The users will simpliy click on each box and the map will auto-adjust to show the location.
        </p>
        <div class="Guide-img-div">
            <img src="../../../assets/guide-4.png" alt="Guide">
        </div>




        <h4 class="Guide-h4">3. Register/Signin</h4>
        <p class="Guide-p">
            The register page is accessed thorugh the signin page when the user's does not have an account with Smartpark. The registration 
            requires the users to provide their first name, last name, username, password and email. Although the username and the password are the most important.
            The username must be unique, meaning that no two users can have the same username. This is done to differentiat users.
        </p>
        <div class="Guide-img-div">
            <img src="../../../assets/guide-5.png" alt="Guide">
        </div>
        <p class="Guide-p">
            The signin page can be accessed by clicking on the "Login" button from any page. It is necessary for the users to register and signin 
            if they want to use the saved feature of Smartpark. The "Login" button dynamically changes to "Logout" if the users is logged in. Once the user 
            is signed in, the saved page button becomes available. 
        </p>
        <div class="Guide-img-div">
            <img src="../../../assets/guide-6.png" alt="Guide">
        </div>


        <h4 class="Guide-h4">4. Saved</h4>
        <p class="Guide-p">
            The saved feature allows users to save the paring rules for desired lcoations. If the user is signed into their account, the save 
            button will apear by the search results as shown below. Once the users clicks on the save button, the location will be transferred to 
            their saved page. It is important to note that the users can only save locations that has valid parking rules. If the system could not find ant rules 
            for the given address, then users will not be able to save the location.
        </p>
        <div class="Guide-img-div">
            <img src="../../../assets/guide-7.png" alt="Guide">
        </div>
        <p class="Guide-p">
            The saved locations works similarly like the hotspots. If they are clicked on, the map will adjust to show that location. 
            Only difference is that the users will be able to delete and add locations to the list.
        </p>
        <div class="Guide-img-div">
            <img src="../../../assets/guide-8.png" alt="Guide">
        </div>

        <h4 class="Guide-h4">5. Other</h4>
        <p class="Guide-p">
            As this is a prototype, the traffic feature is under development. Additionally, the search for parking rules is done inside a dataset.
            The dataset was obtained on kaggle and is completely free. However, as it is a free dataset, the content quality of the dataset is very low.
            It contained 1700 different types of parking rules. For now, we are showing the rules as taken from the dataset. In the future, we could develop 
            a parser that checks for the rules and generates a visually appealing table as shown below. Another note is that the dataset contains only parking rules 
            based in Montreal. So, searching for addresses outside Montreal will reasult in finding no parking rules.
        </p>
        <div class="Guide-img-div">
            <img src="../../../assets/guide-9.png" alt="Guide">
        </div>

    </div>



</body>

</html>
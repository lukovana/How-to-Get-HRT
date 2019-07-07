<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>How to Get HRT</title>

        <link rel="stylesheet" href="../stylesheets/website.css"> 
        <link rel="stylesheet" href="../stylesheets/style.css">
        <script src="../scripts/website.js"></script>
        <style>
            main {
                min-height: 60vh;
            }
        </style>
    </head>
    <body>
        <div class="wrapper" id="h_wrapper">
            <div id="headernav">
                <?php include '../templates/header.php'; headerfn('../')?>
                <?php include '../templates/nav.php'; nav('states/', '')?>
                <?php include '../templates/search.php'; search('../')?>
            </div>
        </div>
        <?php include '../templates/breadcrumbs.php'; secondtier('../', 'About Us');?>
        <main>
            <h1>About Us</h1>
            <section id="s_one">
                <h2>A little bit about me</h2>
                <p>My name is Bellis, and at the time of writing this I am a 23-year old trans person. I've watched firsthand how difficult navigating insurance is for people dealing with it for the first time. Helping people with medical issues has been my passion for years and I decided to take it a step further and provide all the information as well as offer my personal help to get people on the track to pursuing their transition as well as handling any health problems. If you're having any issues with your health care please send me a email or text and I will do everything in my power to help!</p> 
                <p>This website was created by lovely talented volunteers and I couldn't thank them enough. </p>
                <p>Shout out to the Dane for making this all possible! </p>
            </section>

            <section id="s_two">
                <h2>A special thanks to:</h2> 
                <ul>
                    <li>Misha</li>
                    <li>Byron</li>
                    <li>Jen</li>
                    <li>Em</li>
                    <li>Katya</li>
                </ul>
            </section>
            
        </main>
        <?php include '../templates/footer.php';?>
    </body>
</html>
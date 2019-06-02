<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta property="og:image" content="https://i.redd.it/wyhth24b4xc11.png" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.howtogethrt.com" />
        <meta property="og:title" content="Every Step Of The Way" />
        <meta property="og:description" content="From healthcare to hormones, we aim to be here for every step towards finding hormone replacement therapy and gender affirming healthcare. Seeking health insurance and don't know where to start? Contact us!" />
        
        <title>How to Get HRT</title>
        
        <link rel="icon" href="http://example.com/favicon.ico">
        <link rel="stylesheet" href="stylesheets/main.css">
        <link rel="stylesheet" href="stylesheets/landing.css">
    </head>
    <body>
        <div id="headernav">
            <?php include 'php/header.php'; headerfn('')?>
            <?php include 'php/nav.php'; nav('pages/states/', 'pages/')?>
            <?php include 'php/search.php'; search('')?>
        </div>
        <main>
            <section id="front">
                <h2>We are here to help!</h2>
                <p>Every single step of the way.</p>
            </section>
            <section class="card">
                <h3>How to get insurance in your state.</h3>
                <p>Interested in the process of getting health insurance? We can do it together!</p>
            </section>
            <section class="card">
                <h3>Gender Affirming Healthcare</h3>
                <p>Guidance in finding local Psychologists, Endocrinologists, Physicians, and Therapists. </p>
            </section>
            <section class="card">
                <h3>Surgeries</h3>
                <p>Don't know where to start? Let's start from step one.</p>
            </section>
            <section id="contact">
                Have more questions? Shoot us an Email or a text message!

                <?php
                $name = $message = "";

                if ($_SERVER["REQUEST_METHOD"] == "POST") {
                    $name = test_input($_POST["name"]);
                    $message = test_input($_POST["message"]);
                }

                function test_input($data) {
                    $data = trim($data);
                    $data = stripslashes($data);
                    $data = htmlspecialchars($data);
                    return $data;
                }
                ?>

                <form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                    Name: <input type="text" name="name" value="<?php echo $name;?>"><br>
                    Message: <textarea name="message"><?php echo $message;?></textarea><br>
                    <select name="snacks[]">
                        <option value="CocaCola">CocaCola</option>
                        <option value="Popcorn">Popcorn</option>
                        <option value="Peanuts">Peanuts</option>
                    </select><br>

                    <input type="submit" name="submit" value="Submit">
                </form>

                <?php   echo $name, "<br>"; 
                        echo $message, "<br>";

                        $snacks = $_POST['snacks'];
                        echo $snacks;
                        /*foreach($snacks as $snack) {
                            echo $snack, " ";
                            echo 'heck heck heck';
                        }*/
                ?>

                <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top" class="donate">
                    <input type="hidden" name="cmd" value="_donations" />
                    <input type="hidden" name="business" value="bellis@howtogethrt.com" />
                    <input type="hidden" name="currency_code" value="USD" />
                    <input type="image" src="https://www.paypalobjects.com/en_US/i/btn/btn_donateCC_LG.gif" name="submit" title="PayPal - The safer, easier way to pay online!" alt="Donate with PayPal button" />
                    <img alt="donate buttons" src="https://www.paypal.com/en_US/i/scr/pixel.gif" width="1" height="1"/>
                </form>
            </section>
        </main>
        <?php include 'php/footer.html';?>
    </body>
</html>
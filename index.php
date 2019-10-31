<!DOCTYPE html>
<html>
    <head>
        
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale = 1.0, maximum-scale=1.0, user-scalable=no" /> 
        <meta property="og:image" content="https://i.redd.it/wyhth24b4xc11.png" />
        <meta property="og:type" content="website" />
        <meta property="og:url" content="http://www.howtogethrt.com" />
        <meta property="og:title" content="Every Step Of The Way" />
        <meta property="og:description" content="From healthcare to hormones, we aim to be here for every step towards finding hormone replacement therapy and gender affirming healthcare. Seeking health insurance and don't know where to start? Contact us!" />
        
        <title>How to Get HRT</title>
        
        <link rel="icon" href="http://example.com/favicon.ico">
        <link rel="stylesheet" href="stylesheets/website.css"> 
        <link rel="stylesheet" href="stylesheets/main.css">
        <link rel="stylesheet" href="stylesheets/trans.css">
        
        <script src="scripts/website.js"></script>
        <script src="scripts/jquery-3.4.1.min.js"></script>
        <script>
            $(document).ready(function(){

                $("#contact").css("visibility", "hidden");
                $("#learn").css("visibility", "hidden");

                $("#p-tab").click(function(){
                    $("#learn").css("display", "none");
                    $("#contact").css("visibility", "visible");
                    $("#contact").toggle();
                })

                $("#b-tab").click(function(){
                    $("#contact").css("display", "none");
                    $("#learn").css("visibility", "visible");
                    $("#learn").toggle();
                })
            })
        </script>

    </head>
    <body>
        <div class="wrapper" id="h_wrapper">
            <div id="headernav">
                <?php include 'templates/states.php';?> <!-- this includes the state array globally -->
                <?php include 'templates/header.php'; headerfn('');?>
                <?php include 'templates/nav.php'; nav('pages/states/', 'pages/');?>
                <?php include 'templates/search.php'; search('');?>
            </div>
        </div>
        <main>
            <div id="t-flag">
                <div class="donation-container">
                    <h2>Help asdadasdasd</h2>
                    <div class="donation-img"></div>
                    <span class="donation-money">$2,000 goal</span>
                    <div class="donation-bar"></div>
                    <span class="donation-carrier">@cashapp</span>
                </div>
            </div>

            <section id="info-front">
                <h2>We are here to help.</h2>
                <h2>Every step of the way.</h2>

                <div id="p-info">
                    <h3>Questioning your gender identity?</h3>
                    <span>We have some information and resources that may be of help to you.</span>
                </div>

                <div id="b-info">
                    <h3>We are your number one source of information.</h3>
                    <span>We have compiled lists of psychologists, endocrinologists, lawyers, and so on that are able to help you wherever you are.</span>
                </div>
            </section>

            <div id="tabs-container">
                <div id="tab-container">
                    <div id="tab-pink" class="tab"><a href="#" id="p-tab">Talk to us today!</a></div>
                    <div id="tab-blue" class="tab"><a href="#" id="b-tab">Learn More!</a></div>
                </div>
                <div id="contact">
                    <div class="gr">
                        <span>If you'd like to shoot us an email, you're free to use the form down here. if not, there are alternate ways to contact us.</span>
                        <ul>
                            <li>Text: (000) 000 - 0000</li>
                            <li>Email: 000@whatever.com</li>
                            <li>Facebook: Blegh What</li>
                        </ul>
                    </div>
                    <hr size=1>
                    <form>
                        <div class="lr">
                            <div>
                                <label>Name</label>
                                <input type="text" name="name"/>
                            </div>

                            <div>
                                <label>Pronouns</label>
                                <input type="text" name="pronouns"/>
                            </div>
                        </div>

                        <div>
                            <label>Message</label>
                            <textarea></textarea>
                        </div>

                        <button type="reset">Reset</button>
                        <button type="submit">Submit</button>
                    </form>
                </div>
                <div id="learn">
                    <span>
                        Learn more about us lorem ipsem dolor sum amet.
                    </span>
                </div>
            </div>

        </main>
        <?php include 'templates/footer.php';?>
    </body>
</html>
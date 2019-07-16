<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>How to Get HRT</title>

        <link rel="stylesheet" href="../stylesheets/website.css"> 
        <link rel="stylesheet" href="../stylesheets/main.css">
        <script src="../scripts/website.js"></script>
        <link rel="stylesheet" href="../stylesheets/states.css">
        
    </head>
    <body>
        <div class="wrapper" id="h_wrapper">
            <div id="headernav">
                <?php include '../templates/states.php';?> <!-- this includes the state array globally -->
                <?php include '../templates/header.php'; headerfn('../')?>
                <?php include '../templates/nav.php'; nav('states/', '')?>
                <?php include '../templates/search.php'; search('../')?>
            </div>
        </div>
        <?php include '../templates/breadcrumbs.php'; secondtier('../', 'States');?>
        <main>
            <h1>List of States</h1>
            <?php 
            
            include '../templates/states.php';

                global $states;
                global $stateslength;
            
                echo '<div class="stateset">';
                    # loop start: 0-49
                    for($i = 0; $i < $stateslength; $i++) {
                    echo    '<span class="statepage"><a href="states/', $states[$i][0], 
                            '/state.php" class="statepagelink">', $states[$i][1], '</span><br><br>'; // please delete these horrible br tags
                        if ($i == 9 || $i == 19 || $i == 29 || $i == 39 ) {
                        echo    '</div><div class="stateset">';
                        }
                    };
                echo '</div>';
            
            ?>
        </main>
        <?php include '../templates/footer.php';?>
    </body>
</html>
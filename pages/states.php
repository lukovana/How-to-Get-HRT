<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <title>How to Get HRT</title>

        <link rel="stylesheet" href="../stylesheets/website.css"> 
        <script src="../scripts/website.js"></script>
        <link rel="stylesheet" href="../stylesheets/states.css">
        
    </head>
    <body>
        <div class="wrapper" id="h_wrapper">
            <div id="headernav">
                <?php include '../templates/header.php'; headerfn('../')?>
                <?php include '../templates/nav.php'; nav('states/', '')?>
                <?php include '../templates/search.php'; search('../')?>
            </div>
        </div>

        <main>
            <?php include '../templates/breadcrumbs.php'; secondtier('../', 'States');?>
            <?php statepage('states/');?>
        </main>
        <?php include '../templates/footer.php';?>
    </body>
</html>
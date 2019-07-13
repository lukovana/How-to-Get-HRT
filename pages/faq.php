<!DOCTYPE html>
<html lang="en-US">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">

        <title>How to Get HRT</title>
        
        <link rel="stylesheet" href="../stylesheets/website.css"> 
        <link rel="stylesheet" href="../stylesheets/main.css">
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
        <?php include '../templates/breadcrumbs.php'; secondtier('../', 'FAQ');?>
        <main>
            <h1>Frequently Asked Questions</h1>
            <section id="s_one">
                <h2>Random List</h2>
                <ol>
                    <li>Coffee</li>
                    <li>Tea</li>
                    <li>Milk</li>
                </ol>
            </section>

            <section id="s_two">
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </section>
        </main>
        <?php include '../templates/footer.php';?>
    </body>
</html>
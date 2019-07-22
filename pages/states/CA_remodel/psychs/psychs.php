<!DOCTYPE html>
<html lang="en-US">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>How to Get HRT</title>

		<link rel="stylesheet" href="../../../../stylesheets/website.css"> 
		<link rel="stylesheet" href="../../../../stylesheets/main.css">
        <script src="../../../../scripts/website.js"></script>
        <link rel="stylesheet" href="../../../../stylesheets/doc.css">
    </head>
    <body>
		<div class="wrapper" id="h_wrapper">
            <div id="headernav">
                <?php include '../../../../templates/header.php'; headerfn('../../../../')?>
                <?php include '../../../../templates/nav.php'; nav('../../../states/', '../../../')?>
                <?php include '../../../../templates/search.php'; search('../../../../')?>
            </div>
        </div>
		<!--<main>
			
			<section class="section for the forms">
				<h3></h3>
				<h4><h4>
				<form>
				</form>
				<form>
				</form>
			</section>

			<section class="section for AAALLLL the psychs">
				<article>
					...
				</article>
					...
					...
			</section>
		</main>-->
		<?php include '../../../../templates/breadcrumbs.php'; thirdtier('California', 'Psychologists');?>
        <main>
			
			<h2>Lets find a good psychologist for you!</h2>

			<section class="formstyles">
				<h3>Lets get the ball rolling!</h3>
				<p>Select Your County!</p>

				<!-- Enters psychologist information from the database -->
				<?php include '../arrays/counties.php';
					  include 'query_db.php';
					  include '../database/db_all.php';
					  queryAll($counties, $query);
				
				?>
				
			</section>
		</main>
		<?php include '../../../../templates/footer.php';?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en-US">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>How to Get HRT</title>

        <link rel="stylesheet" href="../../../stylesheets/style.css">
        <link rel="stylesheet" href="../../../stylesheets/howtoget.css">
    </head>
    <body>
        <div id="headernav">
            <?php include '../../../scripts/header.php'; headerfn('../../../')?>
            <?php include '../../../scripts/nav.php'; nav('../../states/', '../../')?>
            <?php include '../../../scripts/search.php'; search('../../../')?>
        </div>
		<?php include '../../../scripts/breadcrumbs.php'; thirdtier('California', 'Psychologists');?>
        <main>
            <section class="state">
                <h2>Lets find a good psychologist for you!</h2>
				
				<section>
                <h3>Lets get the ball rolling!</h3> <br>
                <p>Select Your County!</p>

				<!-- Enters psychologist information from the database -->
				<?php 	include '../scripts/database.php';
						include '../scripts/enterData.php';
				?>

				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
					
					<?php 	include 'data_assets/counties.html';
							include 'data_assets/insurances.html';
							#include '../scripts/formselect.php'
							#select("county", $counties);
							#select("insurance", $insurances);?>

					<button type="Submit">Submit</button>
				</form>
				</section>

				<!-- Processing the data posted from the form -->
				<?php 	$county = $_POST['county']; 
						$insurance = $_POST['insurance'];
						echo "<h3><a href=", "#", $county,">", $county, "</a></h3>";
						echo "<h3>", $insurance, "</h3>";
				?>
				
			</section>
		</main>
		<?php include '../../../scripts/footer.html';?>
    </body>
</html>
<!DOCTYPE html>
<html lang="en-US">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>How to Get HRT</title>

        <link rel="stylesheet" href="../../../stylesheets/main.css">
        <link rel="stylesheet" href="../../../stylesheets/doc.css">
    </head>
    <body>
        <div id="headernav">
            <?php include '../../../scripts/header.php'; headerfn('../../../')?>
            <?php include '../../../scripts/nav.php'; nav('../../states/', '../../')?>
            <?php include '../../../scripts/search.php'; search('../../../')?>
		</div>
		<!-- must find a way to make the second dropdown appear right after the first dropdown -->
        <main>
			<?php include '../../../scripts/breadcrumbs.php'; thirdtier('California', 'Psychologists');?>
			
			<h2>Lets find a good psychologist for you!</h2>

			<section class="allcounties">
				<!-- Enters psychologist information from the database -->
				<?php 	include '../scripts/database.php';
						include 'database/enterData.php';
				?>
			</section>

			<section class="formstyles">
				<h3>Lets get the ball rolling!</h3>
				<p>Select Your County!</p>

				<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form1">
					
					<?php 	include 'database/counties.html';
							#include '../scripts/formselect.php'
							#select("county", $counties);
							#select("insurance", $insurances);?>

					<button type="Submit">Submit</button>
					
				</form>

				<?php	include '../scripts/database.php';

						//  Take in the county data from the form.
						$county = $_POST['county']; 

						echo 
						'<form method="POST" action="process.php" id="form2">';
						include 'database/insurances.php';
						getInsuranceList('California', $county);
						echo '</form>';
				?>
			</section>
		</main>
		<?php include '../../../scripts/footer.html';?>
    </body>
</html>
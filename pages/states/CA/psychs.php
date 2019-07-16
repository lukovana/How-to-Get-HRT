<!DOCTYPE html>
<html lang="en-US">
    <head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
		
        <title>How to Get HRT</title>

		<link rel="stylesheet" href="../../../stylesheets/website.css"> 
		<link rel="stylesheet" href="../../../stylesheets/database.css">
        <script src="../../../scripts/website.js"></script>
    </head>
    <body>
		<div class="wrapper" id="h_wrapper">
            <div id="headernav">
                <?php include '../../../templates/header.php'; headerfn('../../../')?>
                <?php include '../../../templates/nav.php'; nav('../../states/', '../../')?>
                <?php include '../../../templates/search.php'; search('../../../')?>
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
		<?php include '../../../templates/breadcrumbs.php'; thirdtier('California', 'Psychologists');?>
        <main>
			
			<h2>Lets find a good psychologist for you!</h2>

			<section class="formstyles">
				<h3>Lets get the ball rolling!</h3>
				<p>Select Your County!</p>

				<!-- Enters psychologist information from the database -->
				<section id="allpsychs">
					<?php 	include '../scripts/database.php';
							include 'scripts/enter_data.php';
					?>
				</section>

				<section id="allforms">
				
					<form method="POST" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" id="form1">
						
						<?php 	include 'scripts/counties_select.php';
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
							include 'scripts/insurances_select.php';
							getInsuranceList('California', $county);
							echo '<button type="Submit">Submit</button></form>';
					?>

				</section>
			</section>
		</main>
		<?php include '../../../templates/footer.php';?>
    </body>
</html>